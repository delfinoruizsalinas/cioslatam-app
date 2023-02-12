<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConocenosController extends Controller
{
    public function index(){
        $title = "CIO'S LATAM - CONOCENOS";
        
        return view('layouts.conocenos', compact('title'));
    }
}
