<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Review;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        //     app()->setLocale($locale);
        // }
        $reviews = Review::with('images', 'category')->get();
        return view('Frontend.About.reviews', compact('reviews'));
    }

    public function create($locale = null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $categories = TourCategory::all();
        return view('Frontend.Reviews.AddReview', compact('categories'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'category_id' => '',
            'title' => 'required',
            'review' => 'required',
            'image' => '',
            'name' => 'required',
            'count_star' => '',
            'email' => 'required',
            'images' => 'required',
        ]);

        //use create method and pass the request data to create a new review

        $review = Review::create(
            [
                'category_id' => $request->category_id,
                'title' => $request->title,
                'review' => $request->review,
                'image' => $request->image,
                'name' => $request->name,
                'count_star' => $request->count_star,
                'email' => $request->email,
            ]
        );


        // $review = new Review();
        // $review->category_id = $request->category_id;
        // $review->title = $request->title;
        // $review->review = $request->review;
        // $review->image = $request->image;
        // $review->name = $request->name;
        // $review->count_star = $request->count_star;
        // $review->email = $request->email;
        // $review->save();


        foreach ($request->file('images') as  $image) {

            $imageName = $image->getClientOriginalName();
            $image->move("Review/" . $review->id . "/", $imageName);
            $image = new Image();
            $image["filename"] = $imageName;
            $image["path"] = "Review/" . $review->id . "/" . $imageName;
            $image->save();
            $review->images()->attach($image->id);
        }
        return redirect()->back()
            ->with("msg", "Added successfully!")
            ->with("success", true);
    }
}
