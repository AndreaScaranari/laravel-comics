<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/comics/{index}', function ($index){
    $comics = config('comics');

    if(!is_numeric($index) || $index < 0 || $index >= count($comics)){
        abort(404);
    }

    $comic = $comics[$index];
    $last_index = count($comics) - 1;
    $prev = $index > 0 ? $index -1: $last_index;
    $next = $index == $last_index ? 0: $index + 1;

    return view('comic', compact('comic', 'prev', 'next'));
})->name('comic');