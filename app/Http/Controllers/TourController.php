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
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TourController extends Controller
{
    
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
            return view("Backend.Admin.Tours.classicTours.ClassicTour", [
                "tour" => $tours
            ]);
        }
    }

   
    public function create()
    {
        $destinations = Destination::all();
        $categories = TourCategory::all();
        return view('Backend.Admin.Tours.classicTours.CreateClassicTour', [
            "categories" => $categories,
            "destinations" => $destinations
        ]);
    }

    function checkStore(Request $request)
    {
        dd($request->all());
    }

   
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            "name" => "required|string",
            "type" => "required|string",
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


    function deleteHighlights($id)
    {
        $highlight = TourHighlight::whereNull('deleted_at')->where('id', $id)->first();
        if ($highlight) {
            $highlight->delete();
            $tour = Tour::with('images')
                ->with('highlights')
                ->with('facility')
                ->with('program')
                ->where("id", $highlight->tour_id)
                ->whereNull('deleted_at')
                ->first();

            return redirect("/admin/tours/detail/" . $highlight->tour_id)
                ->with("msg", "Tour Highlight Deleted!")
                ->with("success", true)
                ->with('tour', $tour);
        }
        return redirect("/admin/tours/detail/" . $highlight->tour_id)
            ->with("msg", "Not Found!")
            ->with("fail", true);
        // ->with('tour', $tour);
    }


    
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


    function deleteTourFacility($id)
    {
        $tourFacility = TourFacility::whereNull("deleted_at")
            ->where('id', $id)
            ->first();
        if ($tourFacility) {
            $tourFacility->delete();
            $tour = Tour::with('images')
                ->with('highlights')
                ->with('facility')
                ->with('program')
                ->where("id", $tourFacility->tour_id)
                ->whereNull('deleted_at')
                ->first();

            return redirect("/admin/tours/detail/" . $tourFacility->tour_id)
                ->with("msg", "Tour Facility Deleted!")
                ->with("success", true)
                ->with('tour', $tour);
            // return self::success("Tour Facility deleted!");
        }
        return redirect("/admin/tours/detail/" . $tourFacility->tour_id)
            ->with("msg", "Not Found")
            ->with("fail", true);
        // ->with('tour', $tour);
        // return self::failure("Not Found!", [], 404);
    }

   
    function removeTourImage($id)
    {
        $image = Image::whereNull('deleted_at')
            ->where('id', $id)
            ->first();
        //complete it.      
    }


    
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


    
    function deleteTourProgram($id)
    {
        $tourProgram = TourProgram::whereNull('deleted_at')
            ->where('id', $id)
            ->first();
        if ($tourProgram) {
            $tourProgram->delete();

            $tour = Tour::with('images')
                ->with('highlights')
                ->with('facility')
                ->with('program')
                ->where("id", $tourProgram->tour_id)
                ->whereNull('deleted_at')
                ->first();

            return redirect("/admin/tours/detail/" . $tourProgram->tour_id)
                ->with("msg", "Tour Program Deleted!")
                ->with("success", true)
                ->with('tour', $tour);
            // return self::success("Tour program deleted");
        }
        return redirect("/admin/tours/detail/" . $tourProgram->tour_id)
            ->with("msg", "Not Found!")
            ->with("fail", true);
        // ->with('tour', $tour);
        // return self::failure("Not Found!", [], 404);
    }
  
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
            return view("Backend.Admin.Tours.classicTours.TourDescription", [
                "tour" => $tour,
                "destination" => $destination
            ]);
            // return self::success("Tour retrieved!", ["data" => $tour]);
        }
        return self::failure("No such tour exist!");
    }

 
    public function edit($id)
    {
        //
        $destinations = Destination::all();
        $categories = TourCategory::all();
        $tour = Tour::with('images')
            ->with('highlights')
            ->with('facility')
            ->with('program')
            ->where('id', $id)
            ->first();
            // $tour["start_date"] = Carbon::createFromFormat('mm/dd/yyyy',$tour["start_date"]);
            // dd($tour["start_date"]);
            //  $tour['check'] = Carbon::createFromFormat('mm/dd/yyyy',$tour["start_date"])->format('m-d-y');
            //  dd($tour['check']);
        return view('Backend.Admin.Tours.classicTours.UpdateClassicTour', [
            "categories" => $categories,
            "destinations" => $destinations,
            "tour" => $tour
        ]);
    }

  
    public function update(Request $request, $id)
    {
        //
        $tour = Tour::find($id);
        if ($tour) {
            $tour->fill($request->all());
            $tour->save();
            $tour = Tour::whereNull('deleted_at')
                ->get();
            return redirect('Backend.Admin.Tours.classicTours.ClassicTour')
                ->with('msg', 'Tour updated!')
                ->with('success', true)
                ->with('tours', $tour);
            // return self::success("Tour updated", ["data" => $tour]);
        }
        return redirect('/admin/UpdateTourPage/{id}')
            ->with('msg', 'Not Found')
            ->with('fail', true);
        // , [
        //     "categories" => $categories,
        //     "destinations" => $destinations,
        //     "tour" => $tour
        // ]);
        // return self::failure('Not Found', [], 404);
    }

   
    public function destroy($id)
    {
        //
        $tour = Tour::find($id);
        if ($tour) {
            $tour->delete();
            //delete images
            //delete highlights 

            //retrieving all the tours
            $tours = Tour::with('images')
                ->with('highlights')
                ->with('facility')
                ->where("category_id", $tour->category_id)
                ->whereNull('deleted_at')
                ->get();

            //retrieving the category for category name
            $cat = TourCategory::find($tour->category_id);

            // return response()->json(["tour"=>$tours]);
            return redirect('/admin/tours/' . $cat->name)
                // ->with("tour", $tours)
                ->with('success', true)
                ->with('msg', 'Tour Deleted!');

            // return self::success("Tour deleted!", ["data" => $tour]);
        }
        return redirect('/admin/tours/' . $cat->name)
            // ->with("tour", $tours)
            ->with('fail', true)
            ->with('msg', "Not Found");
        // return self::failure('Not Found', [], 404);
    }

    public function getToursByCategory($id)
    {

        
        $tour = Tour::where('category_id', $id)->get();
        $cat = TourCategory::where('id', $id)->first();
        return view('Backend.Admin.Tours.classicTours.ClassicTour', compact('tour', 'cat'));
       
         
        // $tour = Tour::all();
        //     $cat = TourCategory::where('id', $id)->first();
        // return view('Backend.Admin.Tours.classicTours.ClassicTour', [
        //     "tour" => $tour,
        //     "category" => $cat
        // ]);
    }
}
