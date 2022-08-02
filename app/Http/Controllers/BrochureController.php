<?php

namespace App\Http\Controllers;

use App\Models\Brochure;
use App\Models\BrochureFile;
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
            'name' => 'required',
            // 'file_name' => 'required',
            'images' => 'required',
        ]);

       //save the brochure file_name into images

    //    $request->file_name->getClientOriginalName()
    //      $request->file_name->storeAs('public/brochure', $request->file_name->getClientOriginalName());

    //     $brochure = Brochure::create([
    //         'name' => $request->name,
    //         'file_name' => $request->file_name->getClientOriginalName(),
    //     ]);




        $brochure = Brochure::create([
            'name' => $request->name,
        ]);

       



        // foreach ($request->file('file_name') as  $file) {

        //     $FileName = $file->getClientOriginalName();
        //     $file->move("BrochureFile/" . $brochure->id . "/", $FileName);
        //     $file = new BrochureFile();
        //     $file["filename"] = $FileName;
        //     $file["path"] = "BrochureFile/" . $brochure->id . "/" . $FileName;
        //     $file->save();
        //     $brochure->images()->attach($file->id);
        
        // }
   

        foreach ($request->file('images') as  $image) {

            $imageName = $image->getClientOriginalName();
            $image->move("Brochure/" . $brochure->id . "/", $imageName);
            $image = new Image();
            $image["filename"] = $imageName;
            $image["path"] = "Brochure/" . $brochure->id . "/" . $imageName;
            $image->save();
            $brochure->images()->attach($image->id);
        
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
 
        return redirect()->back()->with("msg", "Updated successfully!")->with("success", true);
    }


    public function destroy($id)
    {
        $brochure = Brochure::find($id);
        $brochure->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")->with("success", true);
    }


    public function getAll()
    {
        $brochure = Brochure::simplePaginate(6);
        return view('Frontend.Brochures.Brochures', compact('brochure'));

    }





}
