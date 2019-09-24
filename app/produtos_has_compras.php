<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos_has_compras extends Model
{
    protected $table = 'produtos_has_compras';
    protected $fillable = ['produtos_id','compras_id','quantidade'];
}
