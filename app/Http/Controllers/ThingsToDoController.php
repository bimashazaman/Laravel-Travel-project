<?php

namespace App\Http\Controllers;

use App\Models\ThingsToDo;
use App\Models\ThingsToDoCategory;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ThingsToDoController extends Controller
{
    public function index()
    {
        
        
    // $things = ThingsToSee::where('category_id', $name)->get();
    //     $category = ThingsToSeeCategory::where('name', $name)->first();
    //     return view('Backend.Admin.Armenia.ThingsToSee.view', compact('things', 'category'));

        $categories = ThingsToDoCategory::all();
        $things = ThingsToDo::all();
        return view('Backend.Admin.Armenia.ThingsToDo.view', compact('categories','things'));

    }

   
    public function create()
    {
        $categories = ThingsToDoCategory::all();
        return view('Backend.Admin.Armenia.ThingsToDo.create', compact('categories'));
    }

  
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|string",
            "description" => "required|string",
            "time" => "required|string",
            "address" => "required|string",
            "duration" => "required|string",
            "period" => "required|string",
            "distance" => "required|string",
            "price" => "required|string",
            "category_id" => "required|string",
            
        ]);
        if ($validate->fails()) {
           
            return redirect()
                ->back()
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);
        }
        try {
           
            DB::beginTransaction();
            
            $things = new ThingsToDo();
            $things->fill($request->all());
            $things->save();

            //saving tour images
            // foreach ($request->file('images') as $key => $file) {

            //     $fileOrignalName = $file->getClientOriginalName();
            //     // return $fileOrignalName;
            //     $fileNameArray = explode('.', $fileOrignalName);
            //     $fileExtension = end($fileNameArray);
            //     $newFilename = $key . now()->timestamp . "." . $fileExtension;
            //     $path = "tour/" . $tour->id . "/";
            //     $file->move($path, $newFilename);
            //     $image = new Image();
            //     $image["filename"] = $newFilename;
            //     $image["path"] = $path . $newFilename;
            //     $image->save();
            //     TourImage::create([
            //         "tour_id" => $tour->id,
            //         "image_id" => $image->id
            //     ]);
            // }

            DB::commit();
            
            return redirect()
                ->back()
                ->with("msg", "Added successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }
        
    }

 
    public function show($id)
    {
        //
    }


  
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|string",
            "description" => "required|string",
            "time" => "required|string",
            "address" => "required|string",
            "duration" => "required|string",
            "period" => "required|string",
            "distance" => "required|string",
            "price" => "required|string",
            "category_id" => "required|string",
            
        ]);
        if ($validate->fails()) {
           
            return redirect()
                ->back()
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);
        }
        try {
           
            DB::beginTransaction();
            
            $things = ThingsToDo::find($id);
            $things->fill($request->all());
            $things->save();

            //saving tour images
            // foreach ($request->file('images') as $key => $file) {

            //     $fileOrignalName = $file->getClientOriginalName();
            //     // return $fileOrignalName;
            //     $fileNameArray = explode('.', $fileOrignalName);
            //     $fileExtension = end($fileNameArray);
            //     $newFilename = $key . now()->timestamp . "." . $fileExtension;
            //     $path = "tour/" . $tour->id . "/";
            //     $file->move($path, $newFilename);
            //     $image = new Image();
            //     $image["filename"] = $newFilename;
            //     $image["path"] = $path . $newFilename;
            //     $image->save();
            //     TourImage::create([
            //         "tour_id" => $tour->id,
            //         "image_id" => $image->id
            //     ]);
            // }

            DB::commit();
            
            return redirect()
                ->back()
                ->with("msg", "Updated successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }

    }

  
    public function destroy($id)
    {
        try {
           
            DB::beginTransaction();
            
            $things = ThingsToDo::find($id);
            $things->delete();
            DB::commit();
            
            return redirect()
                ->back()
                ->with("msg", "Deleted successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }

    }

    public function getThingsToDoByCategory($id)
    {
        $things = ThingsToDo::where('category_id', $id)->get();
        $category = ThingsToDoCategory::where('id', $id)->first();
        return view('Frontend.Armenia.ThingsToDo', compact('things', 'category'));
    }

    // {
    //     $things = ThingsToSee::where('category_id', $id)->get();
    //     return view('Frontend.Armenia.ThingsToSee', compact('things'));
    // }

    public function getThingsToDoById($id)
    {
        $things = ThingsToDo::find($id);
        return view('Frontend.Armenia.ThingsToDoDetails', compact('things'));
    }

    //get all things to see
    public function getAllThingsToDo()
    {
        $things = ThingsToDo::all();
        return view('Frontend.Armenia.ThingsToDo', compact('things'));
    }

}
