<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
   public function dish_category(){
        return $this->belongsTo('App\DishCategory');
   }
}
