<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class GalleryCategory extends Model
{
    public function galleryImages(){
        return $this->hasMany(GalleryImage::class);
    }
    
}
