<?php

namespace App\Http\Controllers;

use App\Models\Mice;
use Illuminate\Http\Request;

class MiceController extends Controller
{
  
    public function index()
    {
        $mices = Mice::all();
        return view('Backend.Admin.Services.MICE.view', compact('mices'));
    }

 
    public function create()
    {
        return view('Backend.Admin.Services.MICE.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'available' => 'required',
            'total_pax' => 'required',
            'personal' => 'required',
            'Products' => 'required',
            'Extra' => 'required',

        ]);
        $mice = new Mice;
        $mice->name = $request->name;
        $mice->available = $request->available;
        $mice->total_pax = $request->total_pax;
        $mice->personal = $request->personal;
        $mice->Products = $request->Products;
        $mice->Extra = $request->Extra;
        $mice->save();

        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
    }

  
    public function show($id)
    {
        //show the details of hotel
 
        $mice = Mice::find($id);
        return view('Backend.Admin.Services.MICE.show', compact('mice'));
 
    }


   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'available' => 'required',
            'total_pax' => 'required',
            'personal' => 'required',
            'Products' => 'required',
            'Extra' => 'required',
        ]);
        $mice = Mice::find($id);
        $mice->name = $request->name;
        $mice->available = $request->available;
        $mice->total_pax = $request->total_pax;
        $mice->personal = $request->personal;
        $mice->Products = $request->Products;
        $mice->Extra = $request->Extra;
        $mice->save();
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);
    }

 
    public function destroy($id)
    {
        $mice = Mice::find($id);
        $mice->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);
    }

   //Show the data in the frontend
    public function showMice()
    {
        $mices = Mice::all();
        return view('Frontend.Mice.Mices', compact('mices'));
    }

    public function showMiceDetails($id)
    {
        $mice = Mice::find($id);
        return view('Frontend.Mice.Micee', compact('mice'));
    }
}
