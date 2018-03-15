<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    function produ(){
    	return $this->belongsToMany(Produ::class, 'produ_talla');
    }
    protected $table = 'talla';
    protected $fillable = [
        'numero','orden'
    ];
}
