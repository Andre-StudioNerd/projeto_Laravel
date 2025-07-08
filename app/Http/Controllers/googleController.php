<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class googleController extends Controller
{
  public function index(Request $request){

    return redirect(to:'https://google.com');


   }

}
