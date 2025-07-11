<?php

use App\Http\Controllers\FilmesController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\MusicasController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeriesControlller;
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

Route::get('/series', [SeriesController::class,'index']);
Route::get('/series/criar', [SeriesController::class,'create']);
Route::post('/series/salvar', [SeriesController::class,'store']);




Route::get('/filmes', [FilmesController::class,'index']);
Route::get('/filmes/criar', [FilmesController::class,'create']);
Route::post('/filmes/salvar', [FilmesController::class,'store']);


Route::get('/musicas', [MusicasController::class,'index']);
Route::get('/musicas/criar', [MusicasController::class,'create']);
Route::post('/musicas/salvar', [MusicasController::class,'store']);

Route::get('/google', [googleController::class,'index']);

