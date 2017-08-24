<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductName extends Model
{
    //
    public function productRange()
    {
        return $this->belongsTo(ProductRange::class);
    }
}
