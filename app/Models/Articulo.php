<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Articulo extends Model
{
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'descripcion' => 'required',
		'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024',
		'categoria_id' => 'required',
    ];

    protected $fillable = ['nombre','precio','descripcion','imagen','categoria_id'];
    
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }

    
    public function ingreso()
    {
        return $this->belongsToMany(Ingreso::class, 'DetalleIngreso', 'articulo_id', 'ingreso_id')->withPivot('id');
    }


}
