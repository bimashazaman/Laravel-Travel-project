<?php

namespace App\Http\Controllers;

use App\Models\Brochure;
use App\Models\Image;
use Illuminate\Http\Request;

class BrochureController extends Controller
{
    public function index()
    {
        $brochure = Brochure::all();
        return view('Backend.Admin.Armenia.Brochure.view', compact('brochure'));
    }

    public function create()
    {
        return view('Backend.Admin.Armenia.Brochure.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file_name' => 'required',
            'images' => 'required',
        ]);

       //download the file and save it to public/images
        $file = $request->file('file_name');
        $fileName = $file->getClientOriginalName();
        $file->move('public/images', $fileName);
        $fileName = 'public/images/' . $fileName;

        //save the file name to the database
        $brochure = new Brochure();
        $brochure->title = $request->title;
        $brochure->file_name = $fileName;
        $brochure->save();

        //save the images to the database
        $images = $request->file('images');
        foreach ($images as $image) {
            $fileName = $image->getClientOriginalName();
            $image->move('public/images', $fileName);
            $fileName = 'public/images/' . $fileName;
            $image = new Image();
            $image->file_name = $fileName;
            $image->brochure_id = $brochure->id;
            $image->save();
        }
       
        return redirect()->back()->with("msg", "Created successfully!")->with("success", true);
    }


    public function edit($id)
    {
        $brochure = Brochure::find($id);
        return view('Backend.Admin.Armenia.Brochure.update', compact('brochure'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'file_name' => 'required',
            // 'images' => 'required',
        ]);
        $brochure = Brochure::find($id);
        $brochure->title = $request->title;
        $brochure->file_name = $request->file_name;
        $brochure->save();
        // foreach ($request->file('images') as  $image) {

        //     $imageName = $image->getClientOriginalName();
        //     $image->move("Brochure/" . $brochure->id . "/", $imageName);
        //     $image = new Image();
        //     $image["filename"] = $imageName;
        //     $image["path"] = "Brochure/" . $brochure->id . "/" . $imageName;
        //     $image->save();
        //     $brochure->images()->attach($image->id);
        
        // }
        return redirect()->back()->with("msg", "Updated successfully!")->with("success", true);
    }


    public function destroy($id)
    {
        $brochure = Brochure::find($id);
        $brochure->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")->with("success", true);
    }





}
