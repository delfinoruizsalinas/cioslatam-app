<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index(){
        $title = "CIO'S LATAM - CONTACTO";
        return view('layouts.contacto', compact('title'));    
    }
}
