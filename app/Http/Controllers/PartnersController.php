<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index(){
        $title = "CIO'S LATAM - PARTNERS";
        return view('layouts.partners', compact('title'));    
    }

    public function register()
    {
        $title = "CIO'S LATAM - PARTNERS REGISTRO";
        return view('layouts.partners', compact('title'));     
    }
}
