<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produtos;
class Compras extends Model
{
    protected $table = 'compras';
    protected $fillable = ['data', 'clientes_id'];

    public function produtos() {
        return $this->belongsToMany('App\Produtos', 'produtos_has_compras','produtos_id','compras_id')->withPivot('quantidade');
    }

    public function clientes(){
        return $this->belongsTo('App\Clientes');
    }
}
