<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{

/* public function __construct()
{
    $this->middleware ('auth');
    $this->middleware ('admin');
} */

    

    public function index(){

        return view ('adminview','events/create','events','event/edit');
        }
}