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
    $headerLinks = config("db.headerLinks");
    $dcComics = config("db.dcComicsLinks");
    $shopLinks = config("db.shopsLinks");
    $dcLinks = config("db.dcLinks");
    $sitesLinks = config("db.sitesLinks");

    $cardData = config("comics");

    return view('welcome', compact("headerLinks", "dcComics", "shopLinks", "dcLinks", "sitesLinks", "cardData"));
})->name('homepage');
