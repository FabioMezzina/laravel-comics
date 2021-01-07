<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * return one comic element from db
     */
    public function show($id) {
        $comics = config('dc-database');
        $comic = [];
        foreach ($comics as $item) {
            if ($id == $item['id']) {
                $comic = $item;
            }
        }
        return view('comic-detail', compact('comic'));
    }
}
