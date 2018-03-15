<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produ extends Model
{
    function talla(){
        return $this->belongsToMany(Talla::class, 'produ_talla')->orderBy('orden', 'asc');
    }
    function color(){
    	return $this->belongsTo(Color::class, 'color_id');
    }
    function ima(){
        return $this->hasMany(Ima::class);
    }
    function cate(){
    	return $this->belongsTo(Cate::class, 'cate_id');
    }
    function subcate(){
    	return $this->belongsTo(SubCate::class, 'subcate_id');
    }
    public static function obtenerProductos($id){
        return Produ::where('subcate_id', '=', $id)->select('nombre','id', 'imagen', 'descripcion')->get();
    }
    public static function obtenerCategoria($id){
        return Produ::where('cate_id', '=', $id)->select('nombre')->get();
    }
    protected $table = 'produ';
    protected $fillable = [
        'nombre','imagen', 'cate_id', 'color_id', 'sub_cate_id', 'orden'
    ];
}
