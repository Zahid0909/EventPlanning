<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Reservation;

class MyEventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {

        $userId = auth()->id();

        $reservations = Reservation::where('user_id', $userId)->pluck('event_id');

        $events = Event::whereIn('id', $reservations)->get();

        return view('myevents', [
            'events' => $events
        ]);

    }
}
