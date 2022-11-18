<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug = "") 
    {
        $category = Categoty::where('slug', $slug)->firstOrFail();

        return view('category', ["category" => $category]);
    }
}
