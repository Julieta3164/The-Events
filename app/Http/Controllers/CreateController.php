<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    

    public function __construct()

    {
        $this->middleware('auth');
        $this->middleware('admin'); 
           
    }
    
    public function index(){
        return \view ('create');
        }
    }

