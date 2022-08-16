<?php

namespace App\Http\Controllers;

use App\Models\UsefulInfo;
use Illuminate\Http\Request;

class UsefulInfoController extends Controller
{
    
    public function index()
    {
        $usefulInfos = UsefulInfo::all();
        return view('Backend.Admin.Armenia.Informations.view',
            compact('usefulInfos'));
    }

   
    public function create()
    {
        return view('Backend.Admin.Armenia.Informations.create');
    }

  
    public function store(Request $request)
    {
       //store the data in the database
         $request->validate([
          'facts' => 'required',
          'tips' => 'required',
          ]);
          $usefulInfo = new UsefulInfo();
            $usefulInfo->facts = $request->facts;
            $usefulInfo->tips = $request->tips;
          $usefulInfo->save();
          return redirect()->back()
          ->with("msg", "Added successfully!")
          ->with("success", true);
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


    //get in the frontend
    public function getUsefulInfo($locale = null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $usefulInfos = UsefulInfo::all();
        return view('Frontend.Armenia.UsefulToKnow',
            compact('usefulInfos'));
    }
}
