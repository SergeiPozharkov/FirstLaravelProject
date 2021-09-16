<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function listReviews()
    {
        return view('list-reviews');
    }

    public function addReview()
    {
        return view('add-review');
    }

    public function addReviewCheck(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|min:4|max:100',
            'review' => 'required|min:15'
        ]);
    }
}
