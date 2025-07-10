<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller{
   public function index(HttpRequest $request)
   {

     $series = Serie::query()->orderBy('nome')->get();


   return view('series.index')->with('series',$series);

   }

   public function create(){
    return view('series.create');

   }

   public function store(HttpRequest $request){
    $nomeSerie=$request->input('nome');
    $serie =new Serie();
    $serie->nome=$nomeSerie;
    if($serie->Save()){
       return redirect('/series');
    }else{
        return "Deu Erro";
    }



   }
}
