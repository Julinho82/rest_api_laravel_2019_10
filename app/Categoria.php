<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    protected $table ='categorias';

    protected $filleable=['nombre','descripcion'];

    protected $hidden=['id','created_at','updated_at'];
}
