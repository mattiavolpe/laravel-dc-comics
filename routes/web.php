<?php

use App\Http\Controllers\Guests\PageController;
use App\Http\Controllers\Admin\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, "index"])->name("comics");

Route::get('/comic/{id}', [PageController::class, "show"])->name("showComic");

Route::resource('admin/comics', ComicController::class);

Route::get('/characters', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('characters', $data);
})->name("characters");

Route::get('/movies', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('movies', $data);
})->name("movies");

Route::get('/tv', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('tv', $data);
})->name("tv");

Route::get('/games', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('games', $data);
})->name("games");

Route::get('/collectibles', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('collectibles', $data);
})->name("collectibles");

Route::get('/videos', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('videos', $data);
})->name("videos");

Route::get('/fans', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('fans', $data);
})->name("fans");

Route::get('/news', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('news', $data);
})->name("news");

Route::get('/shop', function () {
    $data = [
        "db" => [
            "pages" => config("db.pages"),
            "footerLinks" => config("db.footerLinks")
        ]
    ];
    return view('shop', $data);
})->name("shop");
