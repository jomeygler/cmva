<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\evento;
use App\departamento;

class funcionario extends Model
{
  public function eventos (){
//  return $this->hasMany(evento::class);
return $this->hasMany('App\evento', 'funcionario_id');
}

public function departamento (){
//  return $this->hasMany(evento::class);
return $this->belongsTo(departamento::class);
}

}
