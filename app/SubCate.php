<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCate extends Model
{
    public function produ(){
    	return $this->hasMany(Produ::class, 'subcate_id', 'id'); 
    }
    public function cate(){
    	return $this->belongsTo(Cate::class, 'cate_id', 'id');
    }

    public static function obtenerSubCategoria($id){
        return SubCate::where('cate_id', '=', $id)->select('nombre','id', 'imagen')->get();
    }

	protected $table = 'subcate';
    protected $fillable = [
        'nombre','imagen', 'cate_id', 'orden', 'activo'
    ];
}
