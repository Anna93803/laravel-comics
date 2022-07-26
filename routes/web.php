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

    $comics = config("comics");

    return view('layout/base' , compact("comics"));
});


Route::get('/comic/{id}', function ($id) {
    $comics = config("comics");

    $comicsProducts = null;

    foreach($comics as $comic) {
        if($comic["id"] === intval($id)) {
            $comicsProducts = $comic;
            break;
        }
    }

    if(is_null($comicsProducts)) {
        abort("404");
    }

    return view('show' , $comicsProducts);
});