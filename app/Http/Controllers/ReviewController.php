<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function create()
    {
        return view('reviews.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'review' => 'required|string',
        ]);
        $review = new Review($validated);
        $review->user_id = Auth::id();
        $review->is_published = false;
        $review->save();

        return redirect()->back()->with('success', 'Ваш отзыв успешно отправлен!');
    }

    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'is_published' => 'boolean',
        ]);

        $review->update($validated);

        return redirect()->back()->with('success', 'Статус отзыва обновлен!');
    }

}
