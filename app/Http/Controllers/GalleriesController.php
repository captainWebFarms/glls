<?php

namespace App\Http\Controllers;

use App\GalleryCategory;
use App\Page;
use App\Service\GalleryService;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    protected $galleryService;
    protected $page;
    function __construct(GalleryService $galleryService, Page $page)
    {
        $this->galleryService = $galleryService;
        $this->page = $page;
    }

    public function index(){
        $page = $this->page->whereId(4)->first();
//        return $page->imageSmall;
        $galleryCategories = $this-> galleryService->getAllCategories();
        foreach ($galleryCategories as $galleryCategory){
            $galleryCategory->galleryImages;
        }
        $galleryImages = $galleryCategories->first()->galleryImages ;
//        return $galleryImages;
        return view('gallery', compact('page', 'galleryCategories', 'galleryImages'));
    }
    
    public function fetchCategoryImages($id){
        return GalleryCategory::whereId($id)->first()->galleryImages;
    }
    //
}
