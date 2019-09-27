<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Compras;

class Clientes extends Model
{
    use SoftDeletes;

    protected $table = 'clientes';
    protected $fillable = ['nome','sobrenome','email','senha'];

    public function compras(){
        return $this->hasMany('App\Compras');
    }
}
