<?php

namespace App\Http\Controllers;

use App\Models\HomeCMS;
use Illuminate\Http\Request;

class HomeCmsController extends Controller
{
   //crud
    public function index()
    {
        $HomeCMS = HomeCMS::all();
        return view('Backend.Admin.CMS.Home.view', compact('HomeCMS'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }


}
