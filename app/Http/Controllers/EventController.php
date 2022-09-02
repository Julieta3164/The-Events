<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();

        return view('events.events')->with('event',$events);
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
        $events->image = $request->file('image');
        $events->time = $request->get('time');
        $events->date = $request->get('date');
        $events->people = $request->get('people');
        $events->save();

        return redirect('/events');
    } 

        public function show($id)
    {
        //
    }

    public function edit($id)
    {
         $event = Event::find($id);
         return view('events.edit')->with('event',$event);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->image = $request->get('image');
        $event->time = $request->get('time');
        $event->date = $request->get('date');
        $event->people = $request->get('people');
        $event->save();

        return redirect('/events');
    }

    public function destroy($id)
    {
        $event = Event::find($id);        
        $event->delete();

        return redirect('/events');
    }

}