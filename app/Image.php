<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Pages()
    {
        return $this->hasMany(Page::class);
    }

}
