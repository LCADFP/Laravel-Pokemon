<?php

namespace pokemon;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
   protected $fillable = ['nombre', 'descripcion'];  
    
   public function getRouteKeyName(){
       return 'slug';
   }

}
