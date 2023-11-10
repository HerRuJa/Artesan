<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name','ap_pat','ap_mat','email','telefono','direccion','id_pais','id_entidad','municipio_id','id_tipo_usu','colonia','cp','fecha_naci','username','password','status'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
    
    public function tipos_usuario()
    {
        return $this->belongsTo('App\Models\Tipos_usuario', 'id_tipo_usu', 'id');
    }
    
}
