<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();

        return view('home', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'requided',
            'time' => 'required',
            'date' => 'required'
            ]);
        $event = new Event();
        $event->title = $request->title;
        $event->image = $request->image;
        $event->description = $request->description;
        $event->time = $request->time;
        $event->date = $request->date;

        $event ->save();
        return redirect('/home')->with('success','Event created successfully!');
    }

    public function show(Event $event)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Event $event)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Event $event, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'requided',
            'time' => 'required',
            'date' => 'required'
            ]);
            $event->title = $request->title;
            $event->image = $request->image;
            $event->description = $request->description;
            $event->time = $request->time;
            $event->date = $request->date;

        $event->save();
        return redirect('/home')->with('success','Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/home')->with('success','Event deleted successfully!');
    }
}

