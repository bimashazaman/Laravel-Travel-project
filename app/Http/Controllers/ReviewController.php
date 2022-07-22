<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('Frontend.About.reviews', compact('reviews'));
    }

    public function create()
    {
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
        ]);

        $review = new Review();
        $review->category_id = $request->category_id;
        $review->title = $request->title;
        $review->review = $request->review;
        $review->image = $request->image;
        $review->name = $request->name;
        $review->count_star = $request->count_star;
        $review->email = $request->email;
        $review->save();
        return redirect()->back()
            ->with("msg", "Added successfully!")
            ->with("success", true);
    }
}
