<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table ='clientes';

    //protected $primaryKey=id;

    protected $filleable =['nombre','apellido','telefono','fecha_nacimiento','email'];

    protected $hidden =['id','created_at','updated_at'];
}
