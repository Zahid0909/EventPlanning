<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $events = \App\Models\Event::all();
        return view('home', [
            'events' => $events
        ]);
    }
}
