<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produ extends Model
{
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
    public static function obtenerSubcategoria($id){
        return Produ::where('subcate_id', '=', $id)->select('nombre','id', 'imagen', 'descripcion')->get();
    }
    protected $table = 'produ';
    protected $fillable = [
        'nombre','imagen', 'cate_id', 'sub_cate_id', 'orden'
    ];
}
