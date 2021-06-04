<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    protected $table = 'allergens';

    protected $guarded = [];

    public function dishes()
    {
        return $this->belongsToMany('App\Dish');
    }
}
