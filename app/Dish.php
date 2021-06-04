<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $table = 'dishes';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function allergens()
    {
        return $this->belongsToMany('App\Allergen');
    }
}
