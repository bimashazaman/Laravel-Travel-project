<?php

namespace App\Http\Controllers;

use App\Models\TourCMS;
use Illuminate\Http\Request;

class TourCmsController extends Controller
{
    public function edit($id)
    {
        $tour = TourCMS::find(1);

        $tourContent = TourCMS::find(1)->first();

        return view('Backend.Admin.CMS.Tour.view', compact('tour','tourContent'));
        
    }

    public function update(Request $request, $id)
    {
        //update
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $tour = TourCMS::find($id);
        $tour->title = $request->title;
        $tour->description = $request->description;
        $tour->save();
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);

    }
}
