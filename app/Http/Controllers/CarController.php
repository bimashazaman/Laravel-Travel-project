<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Vehicle;
use App\Models\VehicleImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
   
    public function index()
    {
        
        $cars = Vehicle::all();
        $image = VehicleImage::all();
        return view('Backend.Admin.Services.Car.view', compact('cars','image'));
    }

  
    public function create()
    {
        return view('Backend.Admin.Services.Car.create');
    }

    
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'car_type' => 'required',
            'car_model' => 'required',
            'images' => '',
            'daily_price' => 'required',
            'weekly_price' => 'required',
            'monthly_price' => 'required',
            'free_cancelation' => 'required',
            
        ]);
        if ($validate->fails()) {
            // return self::failure($validate->errors()->first());
            return redirect('/car/create')
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);
        }
        try {
            // dd($request->all());
            DB::beginTransaction();
            
            $vehicle = new Vehicle();
            $vehicle->fill($request->all());
            $vehicle->save();

            //saving tour images
            // foreach ($request->file('images') as $key => $file) {

            //     $fileOrignalName = $file->getClientOriginalName();
            //     // return $fileOrignalName;
            //     $fileNameArray = explode('.', $fileOrignalName);
            //     $fileExtension = end($fileNameArray);
            //     $newFilename = $key . now()->timestamp . "." . $fileExtension;
            //     $path = "vehicle/" . $vehicle->id . "/";
            //     $file->move($path, $newFilename);
            //     $image = new Image();
            //     $image["filename"] = $newFilename;
            //     $image["path"] = $path . $newFilename;
            //     $image->save();
            //     VehicleImage::create([
            //         'image_id' => $image->id,
            //         'vehicle_id' => $vehicle->id
            //     ]);
            // }

            DB::commit();
           
            return redirect('/car/create')
                ->with("msg", "Car added successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }
  

        

    }

    
    public function show($id)
    {
        //show tour details
        $car = Vehicle::find($id);
        $image = VehicleImage::where('vehicle_id', $id)->get();
        return view('Backend.Admin.Services.Car.show', compact('car','image'));

    
    }

    
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //update a car
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'daily_price' => 'required',
            'weekly_price' => 'required',
            'monthly_price' => 'required',
            'free_cancelation' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);

        $car = Vehicle::find($id);
        $car->name = $request->name;
        $car->description = $request->description;
        $car->image = $request->image;
        $car->daily_price = $request->daily_price;
        $car->weekly_price = $request->weekly_price;
        $car->monthly_price = $request->monthly_price;
        $car->free_cancelation = $request->free_cancelation;
        $car->price = $request->price;
        $car->status = $request->status;
        $car->save();

        return redirect()->route('car.index')->with('success', 'Car updated successfully');


    }

   
    public function destroy($id)
    {
        //delete a car
        $car = Vehicle::find($id);
        $car->delete();
        //return back with success message to the same page
        return redirect()->back()->with('success', 'Car deleted successfully');

    }



    //get the cars in frontend
    public function getCars()
    {
        $cars = Vehicle::all();
        return view('Frontend.Cars.Cars', compact('cars'));
    }

    //get the car details in frontend
    public function getCarDetails($id)
    {
        $car = Vehicle::find($id);
        return view('Frontend.Cars.Car', compact('car'));
    }
}
