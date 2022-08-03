<?php

namespace App\Http\Controllers;

use App\Models\HomeCMS;
use Illuminate\Http\Request;

class HomeCmsController extends Controller
{
   //crud
    public function index()
    {
        $home = HomeCMS::all();
        return view('Backend.Admin.CMS.Home.view', compact('home'));
    }

    public function create()
    {
        return view('Backend.Admin.CMS.Home.view');
    }

    public function store(Request $request)
    {
        
        // $this->validate($request, [
        //     'title' => 'required',
        //     'subtitle' => 'required',
        // ]);
        // $home = new HomeCMS();
        // $home->title = $request->title;
        // $home->subtitle = $request->subtitle;
        // $home->save();
        // return redirect()->back()->with("msg", "Created successfully!")
        // ->with("success", true);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $home = HomeCMS::find(1);

        $homeContent = HomeCMS::find(1)->first();

        return view('Backend.Admin.CMS.Home.view', compact('home','homeContent'));
        
    }

    public function update(Request $request, $id)
    {
        //update
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
        ]);
        $home = HomeCMS::find($id);
        $home->title = $request->title;
        $home->subtitle = $request->subtitle;
        $home->save();
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);

    }

    public function destroy($id)
    {
        
    }


}
