<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    function produ(){
    	return $this->hasMany(Produ::class);
    }

    protected $table = 'color';
    protected $fillable = [
        'color','imagen'
    ];
}
