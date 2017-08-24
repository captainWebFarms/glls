<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRange extends Model
{
    //
    public function ProductNames()
    {
        return $this->hasMany(ProductName::class);
    }
}
