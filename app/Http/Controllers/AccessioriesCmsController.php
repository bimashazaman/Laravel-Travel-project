<?php

namespace App\Http\Controllers;

use App\Models\TourAccessoriesCMS;
use Illuminate\Http\Request;

class AccessioriesCmsController extends Controller
{
    public function edit($id)
    {
        $acc = TourAccessoriesCMS::find(1);

        $accContent = TourAccessoriesCMS::find(1)->first();

        return view('Backend.Admin.CMS.Accessiories.view', compact('acc','accContent'));
        
    }

    public function update(Request $request, $id)
    {
        //update
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $acc = TourAccessoriesCMS::find($id);
        $acc->title = $request->title;
        $acc->description = $request->description;
        $acc->save();
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);

    }
}
