<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos_productos extends Model
{
    protected $table = 'fotos_productos';
    
    protected $fillable = ['producto_id','ruta','status'];

    public function productos()
    {
        return $this->belongsTo('App\Models\Productos', 'producto_id', 'id');
    }
}
