<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function discription()
    {
        return $this->belongsTo(Discription::class);
    }
}
