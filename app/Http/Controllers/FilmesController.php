<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
     public function index(Request $request){

     return ['Aranha', 'ET', 'Vingadores'];


     $html = '<ul>';
     foreach ($filmes as $filme) {
        $html .= "<li>$filme</li>";
     }
     $html .= '</ul>';


    return $html;

   }
}
