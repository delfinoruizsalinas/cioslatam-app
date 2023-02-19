<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    public function index()
    {
        $title = "CIO's LATAM - Post News";
    
        return view('layouts.post_news', compact('title'));
    }
    ///api/post-partners

}
