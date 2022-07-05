<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Image;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TourFacility;
use App\Models\TourHighlight;
use App\Models\TourImage;
use App\Models\TourProgram;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        //
        $cat = TourCategory::where('name', $name)->first();
        if ($cat) {

            $tours = Tour::with('images')
                ->with('highlights')
                ->with('facility')
                ->where("category_id", $cat->id)
                ->whereNull('deleted_at')
                ->get();
            // return response()->json(["tour"=>$tours]);
            return view("Backend.Admin.classicTours.ClassicTour", [
                "tour" => $tours
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();
        $categories = TourCategory::all();
        return view('Backend.Admin.classicTours.CreateClassicTour', [
            "categories" => $categories,
            "destinations" => $destinations
        ]);
    }

    /**
     * Store a newly created tour with basic info and pictures.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function checkStore(Request $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created tour with basic info and pictures.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            "name" => "required|string",
            "category_id" => "required|integer",
            "destination_id" => "required|integer",
            "duration" => "required",
            "price" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "description" => "sometimes",
            "images" => "required"
        ]);
        if ($validate->fails()) {
            // return self::failure($validate->errors()->first());
            return redirect('/admin/CreateClassicTour')
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);
        }
        try {
            // dd($request->all());
            DB::beginTransaction();
            //basic tour info
            $tour = new Tour();
            $tour->fill($request->all());
            $tour->save();

            //saving tour images
            foreach ($request->file('images') as $key => $file) {

                $fileOrignalName = $file->getClientOriginalName();
                // return $fileOrignalName;
                $fileNameArray = explode('.', $fileOrignalName);
                $fileExtension = end($fileNameArray);
                $newFilename = $key . now()->timestamp . "." . $fileExtension;
                $path = "tour/" . $tour->id . "/";
                $file->move($path, $newFilename);
                $image = new Image();
                $image["filename"] = $newFilename;
                $image["path"] = $path . $newFilename;
                $image->save();
                TourImage::create([
                    "tour_id" => $tour->id,
                    "image_id" => $image->id
                ]);
            }

            DB::commit();
            // return self::success("Tour added successfully!", ["data" => $tour]);
            return redirect('/admin/CreateClassicTour')
                ->with("msg", "Tour added successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }
    }

    /**
     * Add tour highlights.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    function addTourHighlights(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            "name" => "required"
        ]);
        if ($validate->fails()) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);

            // return self::failure($validate->errors()->first());
        }
        try {
            $tt = TourHighlight::create([
                "name" => $request->name,
                "tour_id" => $id
            ]);
            // dd($tt);
            $tour = Tour::with('images')
                ->with('highlights')
                ->with('program')
                ->with('facility')
                ->where("id", $id)
                ->whereNull('deleted_at')
                ->first();
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", "Tour Highlight added successfully!")
                ->with("success", true)
                ->with('tour', $tour);
            // return self::success("Tour highlights added!", $tourHighlights);
        } catch (Exception $e) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", $e->getMessage())
                ->with("fail", true);
            // return self::failure("Error in adding tour highlight", $e->getMessage());
        }
    }


    /**
     * Delete tour highlights.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function deleteHighlights($id)
    {
        $highlight = TourHighlight::whereNull('deleted_at')->where('id', $id)->first();
        if ($highlight) {
            $highlight->delete();
            return self::success("Highlight Deleted");
        }
        return self::failure("Not Found!", [], 404);
    }


    /**
     * Add tour facility.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    function addTourFacility(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            // "tour_id" => "required|integer"
        ]);
        if ($validator->fails()) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", $validator->errors()->first())
                ->with("fail", true);
            // return self::failure($validator->errors()->first());
        }
        $exist = TourFacility::where('name', $request->name)
            ->where('tour_id', $id)
            ->first();
        if ($exist) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", "Already Exist!")
                ->with("fail", true);
            // return self::failure("Already Exist!", [], 400);
        }
        $tourFacility = new TourFacility();
        $tourFacility->fill($request->all());
        $tourFacility["tour_id"] = $id;
        $tourFacility->save();
        $tour = Tour::with('images')
            ->with('highlights')
            ->with('facility')
            ->with('program')
            ->where("id", $id)
            ->whereNull('deleted_at')
            ->first();

        return redirect("/admin/tours/detail/" . $id)
            ->with("msg", "Tour Highlight added successfully!")
            ->with("success", true)
            ->with('tour', $tour);
        // return self::success("Tour Facility added!");
    }


    /**
     * delete tour facility.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function deleteTourFacility($id)
    {
        $tourFacility = TourFacility::whereNull("deleted_at")
            ->where('id', $id)
            ->first();
        if ($tourFacility) {
            $tourFacility->delete();
            return self::success("Tour Facility deleted!");
        }
        return self::failure("Not Found!", [], 404);
    }

    /**
     * Remove the tour image.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    function removeTourImage($id)
    {
        $image = Image::whereNull('deleted_at')
            ->where('id', $id)
            ->first();
        //complete it.      
    }


    /**
     * Add tour program.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    function addTourProgram(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            "destination_id" => "required|integer",
            "parent_destination_id" => "required|integer",
            "day" => "required|integer",
            "date" => "required"
        ]);
        if ($validator->fails()) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", $validator->errors()->first())
                ->with("fail", true);
            // return self::failure($validator->errors()->first());
        }
        $tourProgram = new TourProgram();
        $tourProgram->fill($request->all());
        $tourProgram["tour_id"] = $id;
        $tourProgram->save();
        $tour = Tour::with('images')
            ->with('highlights')
            ->with('facility')
            ->with('program')
            ->where("id", $id)
            ->whereNull('deleted_at')
            ->first();
        return redirect("/admin/tours/detail/" . $id)
            ->with("msg", "Tour Program added successfully!")
            ->with("success", true)
            ->with('tour', $tour);
        // return self::success("Tour program added", ["data" => $tourProgram]);
    }


    /**
     * delete tour program.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function deleteTourProgram($id)
    {
        $tourProgram = TourProgram::whereNull('deleted_at')
            ->where('id', $id)
            ->first();
        if ($tourProgram) {
            $tourProgram->delete();
            return self::success("Tour program deleted");
        }
        return self::failure("Not Found!", [], 404);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tour = Tour::with('images')
            ->with('highlights')
            ->with('facility')
            ->with('program')
            ->whereNull('deleted_at')
            ->where('id', $id)->first();
        //    dd($tour);
        $destination = Destination::all();
        if ($tour) {
            return view("Backend.Admin.classicTours.TourDescription", [
                "tour" => $tour,
                "destination" => $destination
            ]);
            return self::success("Tour retrieved!", ["data" => $tour]);
        }
        return self::failure("No such tour exist!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tour = Tour::find($id);
        if ($tour) {
            $tour->fill($request->all());
            $tour->save();
            $tour = Tour::with('images')
                ->with('highlights')
                ->where('id', $id)
                ->get();
            return self::success("Tour updated", ["data" => $tour]);
        }
        return self::failure('Not Found', [], 404);
    }

    /**
     * Remove the tour and its images and highlights.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tour = Tour::find($id);
        if ($tour) {
            $tour->delete();
            //delete images
            //delete highlights 
            return self::success("Tour deleted!", ["data" => $tour]);
        }
        return self::failure('Not Found', [], 404);
    }
}
