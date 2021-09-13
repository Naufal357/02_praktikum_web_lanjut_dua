<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){
        echo "Nama : Naufal Rozan <br>";
        echo "ID    : " . $request->id;
    }
}