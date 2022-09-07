<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DescriptionController extends Controller
{

    public function description(Request $request){
        $event = Event::all()->sortByDesc("id");
    
        return view('description')->with('event',$event);
        }

        public function edit(Request $request, $id)
    {
         $event = Event::find($id);
         return view('description')->with('event',$event);
    }

        public function update(Request $request, $id)
        {
    
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('storage'), $fileName);
            $url_file = Storage::url($fileName);
            $event = Event::find($id);
            $event->title = $request->post('title');
            $event->description = $request->post('description');
            $event->image = $url_file;
            $event->time = $request->post('time');
            $event->date = $request->post('date');
            $event->people = $request->post('people');
            $event->save();
    
            return view('/description')->with('event',$event);
        }
}
