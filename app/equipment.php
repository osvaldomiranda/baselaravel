<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{


	protected $fillable = ['nombre','caracteristicas','descripcion', 'photo'];    
}

