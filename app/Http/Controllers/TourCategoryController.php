<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TourCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = TourCategory::whereNull('deleted_at')->get();
        return response()->json([
            "data" => $categories,
            "success" => true
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            "name" => "required|name"
        ]);
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }
        $exist = TourCategory::whereNull('deleted_at')->where('name', $request->name)->first();
        if ($exist) {
            return self::failure("Already exist", [], 400);
        }
        $category = new TourCategory();
        $category->fill($request->all());
        $category->save();
        return self::success("Tour category added", ["data" => $category]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = TourCategory::whereNull('deleted_at')->where('id', $id)->first();
        if ($category) {
            return self::success("Category retrieved", ["data" => $category]);
        }
        return self::failure("Not Found", [], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $category = TourCategory::whereNull("deleted_at")->where('id', $id)->first();
        if ($category) {
            $category->fill($request->all());
            $category->save();
            return self::success("Category updated!", ["data" => $category]);
        }
        return self::failure("Not Found!", [], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = TourCategory::whereNull("deleted_at")->where('id', $id)->first();
        if ($category) {

            $category->delete();
            return self::success("Category deleted!", []);
        }
        return self::failure("Not Found!", [], 404);
    }
}
