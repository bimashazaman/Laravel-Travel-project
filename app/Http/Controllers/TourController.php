<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Tour;
use App\Models\TourHighlight;
use App\Models\TourImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tours = Tour::with('images')
            ->with('highlights')
            ->whereNull('deleted_at')
            ->get();
        return $tours;
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
     * Store a newly created tour with basic info and pictures.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = Validator::make($request->all(), [
            "category_id" => "required|integer",
            "destination_id" => "required|integer",
            "duration" => "required",
            "price" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "description" => "sometimes",
            "images" => "required"
        ]);
        if ($validate->fails()) {
            return self::failure($validate->errors()->first());
        }
        try {
            DB::beginTransaction();
            //basic tour info
            $tour = new Tour();
            $tour->fill($request->all());
            $tour->save();

            //saving tour images
            foreach ($request->file('images') as $key => $file) {

                $fileOrignalName = $file->getClientOriginalName();
                // return $fileOrignalName;
                $fileNameArray = explode('.', $fileOrignalName);
                $fileExtension = end($fileNameArray);
                $newFilename = $key . now()->timestamp . "." . $fileExtension;
                $path = "tour/" . $tour->id . "/";
                $file->move($path, $newFilename);
                $image = new Image();
                $image["filename"] = $newFilename;
                $image["path"] = $path . $newFilename;
                $image->save();
                TourImage::create([
                    "tour_id" => $tour->id,
                    "image_id" => $image->id
                ]);
            }

            DB::commit();
            return self::success("Tour added successfully!", ["data" => $tour]);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }
    }

    /**
     * Add tour highlights.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function addTourHighlights(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "tour_id" => "required|integer",
            "highlightData" => "required|array"
        ]);
        if ($validate->fails()) {
            return self::failure($validate->errors()->first());
        }
        $highlightCollection = collect([]);
        foreach ($request->highlightData as $highlight) {
            $highlightCollection->push([
                "tour_id" => $request->tour_id,
                "name" => $highlight
            ]);
        }
        try {
            TourHighlight::create($highlightCollection);
            $tourHighlights = TourHighlight::where('tour_id', $request->tour_id)->get();
            return self::success("Tour highlights added!", $tourHighlights);
        } catch (Exception $e) {
            return self::failure("Error in adding tour highlight", $e->getMessage());
        }
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
        $tour = Tour::whereNull('deleted_at')->where('id', $id)->first();
        if ($tour) {
            return self::success("Tour retrieved!", ["data" => $tour]);
        }
        return self::failure("No such tour exist!");
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
        $tour = Tour::find($id);
        if ($tour) {
            $tour->fill($request->all());
            $tour->save();
            $tour = Tour::with('images')
                ->with('highlights')
                ->where('id', $id)
                ->get();
            return self::success("Tour updated", ["data" => $tour]);
        }
        return self::failure('Not Found', [], 404);
    }

    /**
     * Remove the tour and its images and highlights.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tour = Tour::find($id);
        if ($tour) {
            $tour->delete();
            //delete images
            //delete highlights 
            return self::success("Tour deleted!", ["data" => $tour]);
        }
        return self::failure('Not Found', [], 404);
    }
}
