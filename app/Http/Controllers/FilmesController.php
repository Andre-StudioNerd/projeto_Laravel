<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
     public function index(Request $request){

    $filmes = ['Aranha', 'ET', 'Vingadores'];


     return view('filmes.index')->with('filmes',$filmes);

   }
}
