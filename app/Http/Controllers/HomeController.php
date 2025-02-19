<?php

namespace App\Http\Controllers;

use App\Models\Review;


class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::where('is_published', true)->latest()->get();
        return view('home', compact('reviews'));
    }
}
