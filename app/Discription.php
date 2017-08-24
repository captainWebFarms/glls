<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discription extends Model
{
    //
    public function Products()
    {
        return $this->hasMany(Products::class);
    }
}
