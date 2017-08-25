<?php
/**
 * Created by PhpStorm.
 * User: justinsmith
 * Date: 2017/08/20
 * Time: 11:54 AM
 */

namespace App\Service;


use App\GalleryCategory;
use App\GalleryImage;

class GalleryService
{
    protected $galleryCategory;
    protected $galleryImage;
    function __construct(GalleryCategory $galleryCategory, GalleryImage $galleryImage)
    {
        $this->galleryCategory = $galleryCategory;
        $this->galleryImage = $galleryImage;
    }

    public function getAllCategories(){
        return $this->galleryCategory->all();
    }
}