<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('event.index')->with('events',$events);
    }

    public function create()
    {
            return view('events.create');
    }

    public function store(Request $request)
    {
        $events = new Event();
        $events->title = $request->get('title');
        $events->description = $request->get('description');
        // $events->image = $request->get('image');
        $events->time = $request->get('time');
        $events->date = $request->get('date');
        $events->people = $request->get('people');
        $events->save();

        return redirect('/events');
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

