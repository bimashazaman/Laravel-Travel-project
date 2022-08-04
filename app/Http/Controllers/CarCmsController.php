<?php

namespace App\Http\Controllers;

use App\Models\RentCarCms;
use Illuminate\Http\Request;

class CarCmsController extends Controller
{
    public function edit($id)
    {
        $car = RentCarCms::find(1);

        $carContent = RentCarCms::find(1);

        return view('Backend.Admin.CMS.Car.view', compact('car','carContent'));
        
    }

    public function update(Request $request, $id)
    {
        //update
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $car = RentCarCms::find($id);
        $car->title = $request->title;
        $car->description = $request->description;
        $car->save();
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);

    }
}
