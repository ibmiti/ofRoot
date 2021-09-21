<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class VideoController extends Controller
{
    public function show(){
        return view('videos', ['articles'=> $articles = Articles::latest()->get() ]);
    }
}
