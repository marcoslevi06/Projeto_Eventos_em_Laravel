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

    // Rota para criação de um Evento
    public function create()
    {
        return view('events/create');
    }

    // Rota store, redirecionando para a home
    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso.');
    }
}
