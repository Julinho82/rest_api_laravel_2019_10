<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

class ClienteControler extends Controller
{
    //read all
    public function getClientes(){

        $listaClientes =Cliente::all();

        return  response()->json($listaClientes);

    }


  //read by id

  public function getClientesById($id){

    $clienteById = Cliente::find($id);

    return response()->json($clienteById);;
  }

  
  //create

  //edit

  //delete


}
