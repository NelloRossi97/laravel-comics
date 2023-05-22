<?php

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

Route::get('/', function () {
    $data = [
        'comics' => config('db.comics'),
        'contentCall' => config('db.contentCall'),
        'comicsArray' => config('db.comicsArray'),
        'shopArray' => config('db.shopArray'),
        'dcArray' => config('db.dcArray'),
        'sitesArray' => config('db.sitesArray')
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics-list', function () {
    $data = [
        'contentCall' => config('db.contentCall'),
        'comicsArray' => config('db.comicsArray'),
        'shopArray' => config('db.shopArray'),
        'dcArray' => config('db.dcArray'),
        'sitesArray' => config('db.sitesArray')
    ];
    $title = 'Comics List';
    return view('comics-list', compact('title'), $data);
})->name('comics-list');

Route::get('/comics/{id}', function ($id) {
    $data = [
        'contentCall' => config('db.contentCall'),
        'comicsArray' => config('db.comicsArray'),
        'shopArray' => config('db.shopArray'),
        'dcArray' => config('db.dcArray'),
        'sitesArray' => config('db.sitesArray')
    ];
    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'), $data);
    } else {
        abort('404');
    }
})->name('comics.show');