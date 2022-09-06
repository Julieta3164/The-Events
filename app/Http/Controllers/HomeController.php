<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        $event = Event::all()->sortByDesc("id");

        return view('home')->with('event',$event);
    }
 }
