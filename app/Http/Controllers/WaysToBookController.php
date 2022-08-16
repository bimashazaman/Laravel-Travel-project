<?php

namespace App\Http\Controllers;

use App\Models\WaysToBook;
use Illuminate\Http\Request;

class WaysToBookController extends Controller
{
   
    public function index()
    {
        $ways = WaysToBook::all();
        return view('Backend.Admin.AboutUs.waysToBook.view', compact('ways'));
    }

    
    public function create()
    {
        return view('Backend.Admin.AboutUs.waysToBook.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $ways = new WaysToBook;
        $ways->title = $request->title;
        $ways->description = $request->description;
        $ways->save();
        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
    }

   
    public function destroy($id)
    {
    //delete
    $ways = WaysToBook::find($id);
    $ways->delete();
    return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);
    }


    public function GetAll($locale= null)
    {

        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $ways = WaysToBook::all();
       return view('Frontend.About.waysToBook', compact('ways'));
    }

}
