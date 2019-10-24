<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModoPago extends Model
{
    //
    protected $table='modo_pagos';

    protected $filleable=['nombre','otros_detalles'];

    protected $hidden=['id','created_at','updated_at'];
}
