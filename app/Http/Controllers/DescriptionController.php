<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
/*     public function index(){
        return \view ('description');
        } */


    public function description(Request $request){
        $event = Event::all()->sortByDesc("id");
    
        return view('description')->with('event',$event);
        }
}
