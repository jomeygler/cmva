<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\funcionario;
class evento extends Model
{
  public function funcionario (){
    //return $this->hasMany(EventoFu::class);
    return $this->belongsTo(funcionario::class);
//    return $this->belongsTo('App\funcionario', 'id');
}
}
