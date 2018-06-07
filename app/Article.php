<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Article.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:30:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Article extends Model
{
	
    protected $table = 'article';
    
    protected $fillable = ['titulo', 'subtitulo', 'cuerpo', 'imagen'];

}
