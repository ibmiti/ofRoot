<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ShopController extends Controller
{
   public function show(){

        // TODO Build Article Collection :
            //  build a collection of latest articles in the articlesController, then send here later:
                // -  this will call the db, when it does not need to.


       $articles = Articles::latest()->get();
       return view('shop', ['articles' => $articles]);
   }
}
