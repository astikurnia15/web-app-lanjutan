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
    return view('welcome');
});

Route::get("/about-me", function() {
    return "Nama Saya <b>Asti Kurniarizqi</b>";
});

Route::get("/Nim", function() {
    return "1811102441017";
});

Route::get("/Instagram", function() {
    return "astykiky_</b>";
});

Route::get("/Twitter", function() {
    return "@astykiky";
});

Route::get("/Kampus", function() {
    return "Universitas Muhammadiyah Kalimantan Timur";
});



Route::get("/testing-view", function() {
    return view("view-1");
});

Route::get("/testing-view2", function() {
    return view("view-2");
});

Route::get("/testing-view3", function() {
    return view("view-3");
});

Route::get("/testing-view4", function() {
    return view("view-4");
});

Route::get("/testing-view5", function() {
    return view("view-5");
});

Route::get("/testing-view5", function() {
    return view("view-5");
});

Route::get("/testing-view6", function() {
    return view("view-6");
});


use App\Http\Controllers\SatuController;
Route::get("/Satu/Kiky 1", [SatuController::class,"satu"]);
Route::get("/Satu/Kiky 2", [SatuController::class,"dua"]);
Route::get("/Satu/Kiky 3", [SatuController::class,"tiga"]);

use App\Http\Controllers\DuaController;
Route::get("/Dua/Kiky 4", [DuaController::class,"empat"]);
Route::get("/Dua/Kiky 5", [DuaController::class,"lima"]);
Route::get("/Dua/Kiky 6", [DuaController::class,"enam"]);
