<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * return one comic element from db
     */
    public function show($slug) {
        $comics = config('dc-database');
        $comic = [];

        // Check for slug
        foreach($comics as $item) {
            $t_slug = Str::slug($item['title'], '-');
            if($slug == $t_slug) {
                $comic = $item;
                break;
            }
        }

        // Exception
        if(empty($comic)) {
            abort(404); // redirect 404
        }

        return view('comic-detail', compact('comic'));
    }
}
