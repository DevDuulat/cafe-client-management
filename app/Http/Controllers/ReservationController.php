<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservation.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'                => 'required|string|max:255',
            'reservation_date'    => 'required|date',
            'phone'               => 'required|string|max:50',
            'location'            => 'required|string|max:255',
            'number_of_persons'   => 'required|integer|min:1',
            'table_number'        => 'required|integer|min:1',
            'time'                => 'required',
            'wishes'              => 'nullable|string',
        ]);

        Reservation::create($validated);

        return redirect()->back()->with('status', 'Бронь успешно создана!');
    }
}
