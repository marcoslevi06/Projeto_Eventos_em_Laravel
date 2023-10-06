<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    // Rota raíz da aplicação
    public function index()
    {
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }


}
