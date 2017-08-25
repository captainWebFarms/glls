<?php

namespace App\Http\Controllers;

use App\GalleryCategory;
use App\Service\GalleryService;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    protected $galleryService;
    function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;

    }

    public function index(){
        $galleryCategories = $this-> galleryService->getAllCategories();
        foreach ($galleryCategories as $galleryCategory){
            $galleryCategory->galleryImages;
        }
        $galleryImages = $galleryCategories->first()->galleryImages ;
//        return $galleryImages;
        return view('gallery', compact('galleryCategories', 'galleryImages'));
    }
    
    public function fetchCategoryImages($id){
        return GalleryCategory::whereId($id)->first()->galleryImages;
    }
    //
}
