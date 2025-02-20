<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        $reservations = Reservation::select('reservation_date', 'time', 'location')
            ->get()
            ->map(function ($reservation) {
                $reservation->time = \Carbon\Carbon::parse($reservation->time)->format('H:i');
                return $reservation;
            });

        return view('user.reservation.create', compact('reservations'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'reservation_date' => 'required|date',
            'time' => 'required|string',
            'number_of_persons' => 'required|integer|min:1',
            'location' => 'required|string|max:255',
        ]);

        $existingReservation = Reservation::where([
            ['reservation_date', $request->reservation_date],
            ['time', $request->time],
            ['location', $request->location],
        ])->exists();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'На это время в выбранной локации уже есть бронь.');
        }

        Reservation::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'phone' => $request->phone,
            'reservation_date' => $request->reservation_date,
            'time' => $request->time,
            'number_of_persons' => $request->number_of_persons,
            'location' => $request->location,
            'status' => 'pending',
        ]);

        return redirect()->route('reservation.create')->with('success', 'Ваш столик успешно забронирован!');
    }

    public function updateStatus(Request $request, Reservation $reservation)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected'
        ]);

        $reservation->update(['status' => $request->status]);

        return back()->with('success', 'Статус бронирования обновлён.');
    }

}
