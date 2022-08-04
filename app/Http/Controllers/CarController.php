<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\RentCarCms;
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
        
        $cars = Vehicle::with('images')->simplePaginate(9);

        
        // $image = VehicleImage::all();
        return view('Backend.Admin.Services.Car.view', compact('cars'));
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
            'images' => 'required',
            'daily_price' => 'required',
            'weekly_price' => 'required',
            'monthly_price' => 'required',
            'seats' => 'required',
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
            
            $vehicle = Vehicle::create([
                'name' => $request->name,
                'car_type' => $request->car_type,
                'car_model' => $request->car_model,
                'seats' => $request->seats,
                'daily_price' => $request->daily_price,
                'weekly_price' => $request->weekly_price,
                'monthly_price' => $request->monthly_price,
                'free_cancelation' => $request->free_cancelation,
                 
            ]);

            foreach ($request->file('images') as  $image) {



         
           


                $imageOrignalName = $image->getClientOriginalName();
                $imageNameArray = explode('.', $imageOrignalName);
                $imageExtension = end($imageNameArray);
                $newImageName = now()->timestamp . "." . $imageExtension;
                $path = "Car/" . $vehicle->id . "/";
                $image->move($path, $newImageName);
                $image = new Image();
                $image["filename"] = $newImageName;
                $image["path"] = $path . $newImageName;
                $image->save();
                VehicleImage::create([
                    "vehicle_id" => $vehicle->id,
                    "image_id" => $image->id
                ]);

            }
            





            DB::commit();
            // return self::success("Tour added successfully!", ["data" => $image]);
            return redirect('/admin/CreateClassicTour')
                ->with("msg", "Tour added successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }
  

        

    }

    
    public function show($id)
    {
       

        $car = Vehicle::with('images')->find($id);
        return view('Backend.Admin.Services.Car.show', compact('car'));

    
    }

    
    public function edit($id)
    {
        $car= Vehicle::find($id);
        return view('Backend.Admin.Services.Car.update', compact('car'));
    }

  
    public function update(Request $request, $id)
    {
        //update a car
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'car_type' => 'required',
            'car_model' => 'required',
            'images' => '',
            'daily_price' => 'required',
            'weekly_price' => 'required',
            'monthly_price' => 'required',
            'seats' => 'required',
            'free_cancelation' => 'required',
           
            
        ]);
        if ($validate->fails()) {
            // return self::failure($validate->errors()->first());
            return redirect('/car/create')
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);
        }

        try {
            DB::beginTransaction();
            $car = Vehicle::find($id);
            $car->update([
                'name' => $request->name,
                'car_type' => $request->car_type,
                'car_model' => $request->car_model,
                'seats' => $request->seats,
                'daily_price' => $request->daily_price,
                'weekly_price' => $request->weekly_price,
                'monthly_price' => $request->monthly_price,
                'free_cancelation' => $request->free_cancelation,
                 
            ]);
            
            DB::commit();
            // return self::success("Tour added successfully!", ["data" => $image]);
            return redirect('/admin/CreateClassicTour')
                ->with("msg", "Tour added successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }




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
        $cms = RentCarCms::all();
        $cars = Vehicle::with('images')->inRandomOrder()->simplePaginate(9);
        return view('Frontend.Cars.Cars', compact('cars','cms'));
    }

    //get the car details in frontend
    public function getCarDetails($id)
    {
        $car = Vehicle::find($id)->with('images')->first();
        return view('Frontend.Cars.Car', compact('car'));
    }
}
