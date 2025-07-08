<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request as HttpRequest;

class SeriesController extends Controller{
   public function index(HttpRequest $request)
   {

     $series = ['Punisher', 'Lost', 'Greys Anatomy'];


     $html = '<ul>';
     foreach ($series as $serie) {
        $html .= "<li>$serie</li>";
     }
     $html .= '</ul>';


    return  $html;

   }
}
