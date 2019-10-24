<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModoPago;

class ModoPagoControler extends Controller
{
    //read all

    public function getModoPagos(){
       
        $listaModoPagos=ModoPago::all();

        return response()->json($listaModoPagos);
    }

    

    //read by id

    //create


    //edit

    //delete



}
