<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
/*     public function index(){

        return view ('/dashboard');
        } */
        public function dashboard(Request $request){
            $event = Event::all()->sortByDesc("id");
    
            return view('dashboard')->with('event',$event);
        }
}
