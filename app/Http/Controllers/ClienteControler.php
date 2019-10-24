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

  //create

  
  //read by id

  public function getClientesById($id){

    $clienteById = Cliente::findbyid($id);

    return response()->json($clienteById);;
  }

  //edit

  //delete


}
