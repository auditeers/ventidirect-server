<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cats = Category::all();
        return view('home', ["cats" => $cats]);
    }
}
