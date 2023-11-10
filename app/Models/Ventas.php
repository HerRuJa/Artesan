<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas';
    
    protected $fillable = ['id_cliente','fecha','subtotal','iva','total','id_tipo_pago','usuario_id','status'];

    public function clientes()
    {
        return $this->belongsTo('App\Models\User', 'id_cliente', 'id');
    }
    
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'usuario_id', 'id');
    }
    public function tipos_pago()
    {
        return $this->belongsTo('App\Models\Tipos_pago', 'id_tipo_pago', 'id');
    }
}
