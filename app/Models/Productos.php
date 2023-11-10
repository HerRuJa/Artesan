<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    
    protected $fillable = ['nombre','descripcion','existencia','precio_compra','precio_venta','stock','categoria_id','id_proveedor','status'];

    
    public function categorias()
    {
        return $this->belongsTo('App\Models\Categorias', 'categoria_id', 'id');
    }
    
    public function proveedores()
    {
        return $this->belongsTo('App\Models\Proveedores', 'id_proveedor', 'id');
    }

}
