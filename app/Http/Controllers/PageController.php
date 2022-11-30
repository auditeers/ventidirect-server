<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{
    public function show(String $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('page', [
            "page" => $page,
        ]); 
    }
}
