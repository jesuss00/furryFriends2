<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadosPedido extends Model
{
    protected $table = 'estados_pedidos';

    public function setEstadoAttribute($value)
    {
        $this->attributes['estado'] = strtolower(trim($value));
    }
}
