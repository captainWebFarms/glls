<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function imageMedium()
    {
        return $this->belongsTo(Image::class);
    }

    public function imageSmall()
    {
        return $this->belongsTo(Image::class);
    }
}
