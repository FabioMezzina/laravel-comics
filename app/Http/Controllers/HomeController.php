<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() {
        $comics = config('dc-database');

        // Generate slug
        foreach($comics as &$comic) {
            $slug = Str::slug($comic['title'], '-');
            $comic['slug'] = $slug;
        }
        
        return view('home', compact('comics'));
    }
}
