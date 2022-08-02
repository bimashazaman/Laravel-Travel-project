<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $tourCategories = TourCategory::whereNull('deleted_at')
            ->get();
        return view("Backend.Admin.Dashboard", ["tourCat"=>$tourCategories,'hello'=>"hello"]);
    }

    
}
