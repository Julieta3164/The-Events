<?php

namespace App\Http\Controllers;


class CreateController extends Controller
{ 
    

    public function __construct()

    {
        $this->middleware('auth');
        $this->middleware('admin'); 
           
    } 
    
    public function index(){
        return \view ('/events/create');
        }
    }

