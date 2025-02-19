<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $reservations = Reservation::where('user_id', auth()->id())->get();

        $reviews = Review::where('user_id', auth()->id())->get();

        return view('user.my-page', compact('reservations', 'reviews'));
    }
}
