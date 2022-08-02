<?php

namespace App\Http\Controllers;

use App\Models\DepartureTable;
use App\Models\Destination;
use App\Models\Image;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TourFacility;
use App\Models\TourHighlight;

use App\Models\TourProgram;
use App\Models\Type;
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
                "tour" => $tours,
            ]);
        }
    }


    public function create()
    {
        $type = Type::all();
        $destinations = Destination::all();
        $categories = TourCategory::all();
        return view('Backend.Admin.Tours.classicTours.CreateClassicTour', [
            "categories" => $categories,
            "destinations" => $destinations,
            "type" => $type,
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
            "type_id" => "",
            "Itenanary"=>"",
            "category_id" => "required|integer",
            "destination_id" => "required|integer",
            "duration" => "required",
            "price" => "required",
            "one_day_price" => "required",
            "one_week_price" => "required",
            "one_month_price" => "required",
            "one_year_price" => "required",
            "start_date" => "",
            "end_date" => "",
            "description" => "sometimes",
            "images" => "required",
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        try {
            DB::beginTransaction();

            $tour = Tour::create([
                "name" => $request->name,
                "type_id" => $request->type_id,
                "Itenanary"=>$request->Itenanary,
                "category_id" => $request->category_id,
                "destination_id" => $request->destination_id,
                "duration" => $request->duration,
                "price" => $request->price,
                "one_day_price" => $request->one_day_price,
                "one_week_price" => $request->one_week_price,
                "one_month_price" => $request->one_month_price,
                "one_year_price" => $request->one_year_price,
                "start_date" => $request->start_date,
                "end_date" => $request->end_date,
                "description" => $request->description,
            ]);

            foreach ($request->file('images') as  $image) {

                $imageName = $image->getClientOriginalName();
                $image->move("Tour/" . $tour->id . "/", $imageName);
                $image = new Image();
                $image["filename"] = $imageName;
                $image["path"] = "Tour/" . $tour->id . "/" . $imageName;
                $image->save();
                $tour->images()->attach($image->id);
            

                // //use intervention.io

                // $imageOrignalName = $image->getClientOriginalName();
                // $imageNameArray = explode('.', $imageOrignalName);
                // $imageExtension = end($imageNameArray);
                // $newImageName = now()->timestamp . "." . $imageExtension;
                // $path = "tour/" . $tour->id . "/";
                // $image->move($path, $newImageName);
                // $image = new Image();
                // $image["filename"] = $newImageName;
                // $image["path"] = $path . $newImageName;
                // $image->save();
                // TourImage::create([
                //     "tour_id" => $tour->id,
                //     "image_id" => $image->id
                // ]);
            }





            DB::commit();
            // return self::success("Tour added successfully!", ["data" => $image]);
            return redirect('/admin/CreateClassicTour')
                ->with("msg", "Tour added successfully!")
                ->with("success", true);
        }  catch (Exception $e) {
            return redirect()
                ->back()
                ->with("msg", $e->getMessage())
                ->with("fail", true);
            // return self::failure("Error in adding tour highlight", $e->getMessage());
        }
    }


    function type(Request $request, $id)
    {

        $validate = Validator::make($request->all(), [
            "type_name" => "",
        ]);
        if ($validate->fails()) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);

            // return self::failure($validate->errors()->first());
        }
        try {
            $tt = Type::create([
                "type_name" => $request->type_name,
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
                ->with("msg", "Tour Type added successfully!")
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


    function addDeparture(Request $request, $id)
    {


        $validate = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            "start_date" => "required",
            "end_date" => "required",
            "price" => "required",
            "pax" => "required",
        ]);
        if ($validate->fails()) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);

            // return self::failure($validate->errors()->first());
        }
        try {
            $tt = DepartureTable::create([
                "start_date" => $request->start_date,
                "end_date" => $request->end_date,
                "price" => $request->price,
                "pax" => $request->pax,
                "tour_id" => $id

            ]);
            // dd($tt);
            $tour = Tour::with('images')
                ->with('highlights')
                ->with('program')
                ->with('facility')
                ->with('departureTable')
                ->where("id", $id)
                ->whereNull('deleted_at')
                ->first();
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", "Added successfully!")
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
        

        $validate = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            "name" => "required",
            "unname" => ""
        ]);
        if ($validate->fails()) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);

            // return self::failure($validate->errors()->first());
        }
        try {
            $tt = TourFacility::create([
                "name" => $request->name,
                "unname" => $request->unname,
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
                ->with("msg", "Tour Facility added successfully!")
                ->with("success", true)
                ->with('tour', $tour);
        } catch (Exception $e) {
            return redirect("/admin/tours/detail/" . $id)
                ->with("msg", $e->getMessage())
                ->with("fail", true);
        }
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
            "day" => "required",
            "fromTo" => "required",
            "description" => "",
            "distance" => "required",
            "duration" => "required",
            "food" => "",
            "location" => "required",

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
            ->with('types')
            ->whereNull('deleted_at')
            ->where('id', $id)->first();
        //    dd($tour);
        $destination = Destination::all();
        $type = Type::all();
        if ($tour) {
            return view("Backend.Admin.Tours.classicTours.TourDescription", [
                "tour" => $tour,
                "destination" => $destination,
                "type" => $type
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
        
        $tour->fill($request->all());
        $tour->save();
       
        return redirect()
            ->back()
            ->with("msg", "Tour Updated!")
            ->with("success", true);
      


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
        // return redirect('/admin/tours/' . $cat->name)
        //     // ->with("tour", $tours)
        //     ->with('fail', true)
        //     ->with('msg', "Not Found");
        // return self::failure('Not Found', [], 404);
    }

    public function getToursByCategory($id)
    {


        //get all tours where id is equal to the category id with pagination
        $tour = Tour::with('images')
            ->with('highlights')
            ->with('facility')
            ->with('program')
            ->orderby('created_at', 'desc')
            ->where("category_id", $id)
            ->whereNull('deleted_at')
            ->simplePaginate(6);

        // $tour = Tour::where('category_id', $id)->get();
        $cat = TourCategory::where('id', $id)->first();
        return view('Backend.Admin.Tours.classicTours.ClassicTour', compact('tour', 'cat'));


        // $tour = Tour::all();
        //     $cat = TourCategory::where('id', $id)->first();
        // return view('Backend.Admin.Tours.classicTours.ClassicTour', [
        //     "tour" => $tour,
        //     "category" => $cat
        // ]);
    }









    public function createMoreImages($id)
    {
        $tour = Tour::find($id);
        if ($tour) {
            return view('Backend.Admin.Tours.classicTours.TourDescription', [
                "tour" => $tour
            ]);
        }
        return self::failure('Not Found', [], 404);
    }

    //store multiple images for id
    public function moreImagestore(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [

            "images" => "required",
        ]);

        //store all the images
        if ($validate->fails()) {
            return redirect('/admin/tours/detail/' . $id)
                ->with('msg', 'Not Found')
                ->with('fail', true);
        } else {
            $tour = Tour::find($id);
            if ($tour) {
                $images = $request->file('images');
                foreach ($images as $image) {
                    $imageName = $image->getClientOriginalName();
                    $image->move(public_path('images/tours/' . $tour->id), $imageName);
                    $tour->images()->create([
                        "image" => $imageName
                    ]);
                }
                return redirect('/admin/tours/detail/' . $id)
                    ->with('msg', 'Images Added!')
                    ->with('success', true);
            }
            return redirect('/admin/tours/detail/' . $id)
                ->with('msg', 'Not Found')
                ->with('fail', true);
        }
    }
}
