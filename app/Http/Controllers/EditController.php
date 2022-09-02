<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(){
        return \view ('/events/edit');
        }
}
