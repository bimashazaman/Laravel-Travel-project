<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('Frontend.About.aboutUs', compact('aboutUs'));
    }

    public function create()
    {
        return view('Backend.Admin.AboutUs.WhoWeAre.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $aboutUs = new AboutUs();
        $aboutUs->title = $request->title;
        $aboutUs->description = $request->description;
        $aboutUs->save();
        return redirect()->back()
            ->with("msg", "Added successfully!")
            ->with("success", true);
    }

    public function edit($id)
    {
        $aboutUs = AboutUs::find($id);
        return view('Frontend.About.EditAboutUs', compact('aboutUs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $aboutUs = AboutUs::find($id);
        $aboutUs->title = $request->title;
        $aboutUs->description = $request->description;
        $aboutUs->save();
        return redirect()->back()
            ->with("msg", "Updated successfully!")
            ->with("success", true);
    }

    public function destroy($id)
    {
        $aboutUs = AboutUs::find($id);
        $aboutUs->delete();
        return redirect()->back()
            ->with("msg", "Deleted successfully!")
            ->with("success", true);
    }

    public function show($id)
    {
        $aboutUs = AboutUs::find($id);
        return view('Frontend.About.ShowAboutUs', compact('aboutUs'));
    }

    public function index2()
    {
        $aboutUs = AboutUs::all();
        return view('Backend.Admin.AboutUs.WhoWeAre.view', compact('aboutUs'));
    }
}
