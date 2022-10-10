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

Route::get(
    '/{id}',
    function ($id) {
        $comics = config('comics');
        if ($id < count($comics)) {
            $comic = $comics[$id];
            $data = ['comic' => $comic];

            return view('comics.show', $data);
        } else {
            abort(404);
        }
    }
)->where('id', '[0-9]+')->name('comic');

Route::get('/', function () {
    $data = [
        'comics' => config('comics'),
        'widgets' => config('widgets'),
    ];
    return view('comics', $data);
});
