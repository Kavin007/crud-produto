<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Compras;

class Produtos extends Model
{
    use SoftDeletes;

    protected $table = 'produtos';
    protected $fillable = ['nome','preco','descricao'];

    public function compras() {
        return $this->belongsToMany('App\Compras', 'produtos_has_compras');
    }
    
}
