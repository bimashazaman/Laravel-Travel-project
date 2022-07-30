<?php

namespace App\Http\Controllers;

use App\Models\CarWithDriver;
use App\Models\CarWithDriverInfo;
use Illuminate\Http\Request;

class CarWithDriverController extends Controller
{
    
    // all the initial funtions index, create, store, show, edit, update, destroy
    public function index()
    {
        $cars = CarWithDriver::all();
        return view('Backend.Admin.Services.CarWithDriver.view', compact('cars'));
        
    }

    public function create()
    {
        return view('Backend.Admin.Services.CarWithDriver.create');
    }


    public function createInfo()
    {
        return view('Backend.Admin.Services.CarWithDriver.addInfo');
    }


    public function storeInfo()
    {
        // $table->string('name');
        //     $table->string('model');
        //     $table->string('type');
        //     $table->string('seats');
        //     $table->string('overview');
        //     $table->string('cancelation_fee');

        //validate the data
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'overview' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'seats' => 'required|string|max:255',
            'cancelation_fee' => 'required|string|max:255',
        ]);

        //create a new car with driver
        $car = CarWithDriverInfo::create(request([
            'name',
            'overview',
            'model',
            'type',
            'seats',
            'cancelation_fee',
        ]));

        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);



    }





    public function store(Request $request)
    {

    
        
      //validate the data
        $request->validate([
            'car_name' => 'required',
            'three_seats' => 'required',
            'seven_seats' => 'required',
            'sixteen_seats' => 'required',
            'twintynine_seats' => 'required',
            'fortynine_seats' => 'required',
        ]);

        //create a new car with driver by create method
        $car = CarWithDriver::create($request->all());

        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
    }

  


//update the car with driver
    public function update(Request $request, $id)
    {
       
    }

    public function destroy($id)
    {
        //delete the car with driver
        $car = CarWithDriver::find($id);
        $car->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);

        
    }

   // get everything in the frontend
    public function getAll()
    {
        $cars = CarWithDriver::all();
        $carInfo = CarWithDriverInfo::all()->first();
        return view("Frontend.Cars.DriverCar", compact('cars','carInfo'));
    }
   


}
