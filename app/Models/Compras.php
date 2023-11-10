<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';
    
    protected $fillable = ['id_proveedor','fecha','subtotal','iva','total','usuario_id','status'];

    public function proveedores()
    {
        return $this->belongsTo('App\Models\Proveedores', 'id_proveedor', 'id');
    }
    
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'usuario_id', 'id');
    }
}
