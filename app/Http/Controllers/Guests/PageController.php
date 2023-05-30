<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index() {
        $comics = Comic::orderByDesc('id')->get();
        $db = config("db");
        return view("comics", compact("comics", "db"));
    }

    public function show($id) {
        $db = config("db");
        $comic = Comic::where('id', $id)->get();
        return view("singleComic", compact("comic", "db"));
    }
}
