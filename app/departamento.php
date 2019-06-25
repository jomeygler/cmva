<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\funcionario;

class departamento extends Model
{
  public function funcionarios (){
  //  return $this->hasMany(evento::class);
  return $this->hasMany('App\funcionario','departamento_id');
  }
    //
}
