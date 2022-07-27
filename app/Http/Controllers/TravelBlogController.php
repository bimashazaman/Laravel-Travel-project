<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\TravelBlog;
use Illuminate\Http\Request;

class TravelBlogController extends Controller
{
  
    public function index()
    {

        $travelBlogs = TravelBlog::all();
        return view('Backend.Admin.Armenia.TravelBlog.view', compact('travelBlogs'));
    }

   
    public function create()
    {
        return view('Backend.Admin.Armenia.TravelBlog.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
            'more_description' => 'required',
            'images' => 'required',
        ]);
        $travelBlog = TravelBlog::create([
            'title' => $request->title,
            'type' => $request->type,
            'more_description' => $request->more_description,
            'description' => $request->description,
        ]);
        foreach ($request->file('images') as  $image) {
            $imageName = $image->getClientOriginalName();
            $image->move("TravelBlog/" . $travelBlog->id . "/", $imageName);
            $image = new Image();
            $image["filename"] = $imageName;
            $image["path"] = "TravelBlog/" . $travelBlog->id . "/" . $imageName;
            $image->save();
            $travelBlog->images()->attach($image->id);
        }
        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
    }

   
    public function show($id)
    {
        
        $travelBlog = TravelBlog::find($id)->with('images')->where('id', $id)->first();
        return view('Backend.Admin.Armenia.TravelBlog.show', compact('travelBlog'));

    }

   
    public function edit($id)
    {
        $travelBlog = TravelBlog::find($id);
        return view('Backend.Admin.Armenia.TravelBlog.update', compact('travelBlog'));
    }

   
    public function update(Request $request, $id)
    {
       // update
       $travelBlog = TravelBlog::find($id);
       $travelBlog->update($request->all());
      
       return redirect()->back()->with("msg", "Upadated successfully!")
       ->with("success", true);
    }

   
    public function destroy($id)
    {
        $travelBlog = TravelBlog::find($id);
        $travelBlog->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);
    }

    //get it on frontend
    public function getTravelBlog()
    {
        $travelBlogs = TravelBlog::with('images')->get();
        return view('Frontend.Blogs.Articles', compact('travelBlogs'));
    }

    //get it on frontend

    public function getTravelBlogById($id)
    {
        $travelBlog = TravelBlog::find($id)
        ->with('images')
        ->where('id', $id)
        ->first();
        
        return view('Frontend.Blogs.Article', compact('travelBlog'));
    }



}
