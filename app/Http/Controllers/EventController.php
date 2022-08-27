<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('events.index')->with('events', $events);
    }
        public function store(Request $request) 
        {
            $validated = $request-> validate([
                'title' => 'required',
                'image' => 'required',
                'description' => 'required',
                'date' => 'required',
                'time' => 'required',
                'people' => 'required',
            ]);

            Event::create($validated);

            return redirect()->route('events.index')->with('message', 'Evento creado!');
        } 
        
            public function edit(Event $event)
        {
            return view('events.edit')->with('event', $event);
        }

        public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'people' => 'required',
        ]);

        $event->update($validated);

        return redirect()->route('events.index')->with('message', 'Evento actualizado con éxito!');
    }

}

