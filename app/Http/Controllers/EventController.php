<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    public function index(Request $request)
    {
        $events = Event::all()->sortByDesc("id");;

        return view('events.events')->with('event',$events);
    }

    public function create()
    {
            return view('events.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required',
            'description' => 'required',
            'time'  => 'required',
            'date'  => 'required',
            'people'  => 'required'
        ]);

        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName);
        $url_file = Storage::url($fileName);
        $events = new Event();
        $events->title = $request->get('title');
        $events->description = $request->get('description');
        $events->image = $url_file;
        $events->time = $request->get('time');
        $events->date = $request->get('date');
        $events->people = $request->get('people');
        $events->save();
        return redirect('/events');
    } 

    public function edit(Request $request, $id)
    {
         $event = Event::find($id);
         if(!$event){
            return view('events.notexist');
         }

         return view('events.edit')->with('event',$event);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required',
            'description' => 'required',
            'time'  => 'required',
            'date'  => 'required',
            'people'  => 'required'
        ]);

        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName);
        $url_file = Storage::url($fileName);
        $event = Event::find($id);
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->image = $url_file;
        $event->time = $request->get('time');
        $event->date = $request->get('date');
        $event->people = $request->get('people');
        $event->save();

        return redirect('/events');
    }

    public function destroy(Request $request)
    {
        $event = Event::find($request->id);        
        $event->delete();
        return redirect('/events');
    }

    public function add(Request $request)
    {
        $event = Event::find();
        $event->user()->attach($event);
    }

}