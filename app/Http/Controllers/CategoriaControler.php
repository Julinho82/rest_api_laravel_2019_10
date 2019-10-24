<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class CategoriaControler extends Controller
{
    //read all

    public function getCategorias(){

        $listaCategorias =Categoria::all();

        return  response()->json($listaCategorias);


    }



    //read by id


    //create


    //edit


    //delete
}
