<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cats = Category::whereNull('parent_id')->get();

        return view('home', ["cats" => $cats]);
    }
}
