<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    public function galleryCategory(){
        return $this->belongsTo(GallerCatgeory::class);
    }
    //
}
