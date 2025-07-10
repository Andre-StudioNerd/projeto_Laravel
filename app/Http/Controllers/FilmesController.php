<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmesController extends Controller
{
     public function index(Request $request){


    $filmes = Movie::all();


     return view('filmes.index')->with('filmes',$filmes);

   }
   public function create(){
    return view('filmes.create');

   }

   public function store(Request $request){
     $nomeFilme=$request->input('nome');
     $nomeFilme=$request->input('nome');
     $filme =new Movie();
     $filme->nome=$nomeFilme;
    if($filme->Save()){
       return redirect('/filmes');
    }else{
        return "Deu Erro";
    }


   }
}


