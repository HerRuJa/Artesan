<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table = 'proveedores';
    
    protected $fillable = ['nombre','rfc','razon_social','direccion','email','contacto','id_pais','id_entidad','municipio_id','cp','colonia','telefono','status'];

    public function paises()
    {
        return $this->belongsTo('App\Models\Paises', 'id_pais', 'id');
    }
    
    public function entidades()
    {
        return $this->belongsTo('App\Models\Entidades', 'id_entidad', 'id');
    }
    
    public function municipios()
    {
        return $this->belongsTo('App\Models\Municipios', 'municipio_id', 'id');
    }
}
