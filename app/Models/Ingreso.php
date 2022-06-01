<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    static $rules = [
		'num_comprobante' => 'required',
		'fecha_hora' => 'required',
		'impuesto' => 'required',
		'persona_id' => 'required',
    ];

    protected $fillable = ['num_comprobante','fecha_hora','impuesto','persona_id'];

    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
    
    public function articulo()
    {
        return $this->belongsToMany(Articulo::class, 'DetalleIngreso', 'ingreso_id', 'articulo_id')->withPivot('id');
    }

}
