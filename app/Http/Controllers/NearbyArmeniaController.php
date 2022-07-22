<?php

namespace App\Http\Controllers;

use App\Models\NearbyArmenia;
use App\Models\NearbyArmeniaCategory;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NearbyArmeniaController extends Controller
{
    
    public function index()
    {
        
        $categories = NearbyArmeniaCategory::all();
        $things = NearbyArmenia::all();
        return view('Backend.Admin.Armenia.TODO.view', compact('categories','things'));

    }

   
    public function create()
    {
        $categories = NearbyArmeniaCategory::all();
        return view('Backend.Admin.Armenia.TODO.create', compact('categories'));
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
            
            $things = new NearbyArmenia();
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
            
            $things = NearbyArmenia::find($id);
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
            
            $things = NearbyArmenia::find($id);
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

    public function getNearbyByCategory($id)
    {
        $things = NearbyArmenia::where('category_id', $id)->get();
        $category = NearbyArmeniaCategory::where('id', $id)->first();
        return view('Frontend.Armenia.nearby', compact('things', 'category'));
    }

    // {
    //     $things = Nearby::where('category_id', $id)->get();
    //     return view('Frontend.Armenia.Nearby', compact('things'));
    // }

    public function getNearbyById($id)
    {
        $things = NearbyArmenia::find($id);
        return view('Frontend.Armenia.NearbyDetails', compact('things'));
    }

    //get all things to see
    public function getAllNearby()
    {
        $things = NearbyArmenia::all();
        return view('Frontend.Armenia.nearby', compact('things'));
    }


}
