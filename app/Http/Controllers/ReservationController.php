<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        $reservations = Reservation::select('table_number', 'reservation_date', 'time')
            ->get()
            ->map(function ($reservation) {
                $reservation->time = \Carbon\Carbon::parse($reservation->time)->format('H:i');
                return $reservation;
            });
        return view('reservation.create', compact('reservations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'reservation_date' => 'required|date',
            'time' => 'required|string',
            'table_number' => 'required|integer',
            'number_of_persons' => 'required|integer|min:1',
            'location' => 'required|string|max:255',
        ]);

        $existingReservation = Reservation::where([
            ['table_number', $request->table_number],
            ['reservation_date', $request->reservation_date],
            ['time', $request->time],
        ])->exists();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'Этот столик уже забронирован на указанное время.');
        }

        Reservation::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'phone' => $request->phone,
            'reservation_date' => $request->reservation_date,
            'time' => $request->time,
            'table_number' => $request->table_number,
            'number_of_persons' => $request->number_of_persons,
            'location' => $request->location,
        ]);

        return redirect()->route('reservation.create')->with('success', 'Ваш столик успешно забронирован!');
    }

}
