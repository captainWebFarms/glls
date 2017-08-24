<?php

namespace App\Http\Controllers;

use App\Discription;
use App\News;
use App\Page;
use App\Popup;
use App\Product;
use App\ProductName;
use App\ProductRange;
use App\Text;
use App\Company;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getTitleAndImage($id)
    {
        return Page::whereId($id)->first();
    }

    public function getAllText($id)
    {
        return Text::wherePageId($id)->first();
    }

    public function getProductRange()
    {
        return ProductRange::get();
    }

    public function getProductName()
    {
        return ProductName::get();
    }

    public function getProductInfo()
    {
        return Product::get();
    }

    public function getDescription()
    {
        return Discription::get();
    }
    public function getNews(){
//        $users = DB::table('users')
//            ->orderBy('name', 'desc')
//            ->get();
        return News::orderBy('created_at')->get();

    }
    public function getPopups(){
        return Popup::get();
    }
    public function getCompanies(){
        return Company::get();
    }
    public function index()
    {
        $page = $this->getTitleAndImage(1);
        $text = $this->getAllText(1);

        $popup = $this->getPopups();
        $companies = $this->getCompanies();
//    return $page;
        return view('welcome', compact('page', 'text', 'popup', 'companies'));

    }

    public function about()
    {
        $page = $this->getTitleAndImage(3);

        return view('about', ['page' => $page]);
    }

    public function product()
    {
        $page = $this->getTitleAndImage(2);
        $text = $this->getAllText(2);
        $range = $this->getProductRange();
        $name = $this->getProductName();
        $product = $this->getProductInfo();
        $description = $this->getDescription();
        

        return view('products', compact('page', 'text', 'range', 'name', 'product', 'description'));
    }

    public function gallery()
    {
        $page = $this->getTitleAndImage(4);

        return view('gallery', ['page' => $page]);
    }

    public function news()
    {
        $news = $this->getNews();
        $page = $this->getTitleAndImage(5);
        
        return view("news", compact('page', 'news'));
    }

    public function find()
    {
        $page = $this->getTitleAndImage(6);
        $popup = $this->getPopups();
        $companies = $this->getCompanies();

        return view('findDistributor', compact('page', 'popup', 'companies'));
    }

    public function login()
    {
        $page = $this->getTitleAndImage(7);

        return view('distributorsLogin', ['page' => $page]);
    }

    public function contact()
    {
        $page = $this->getTitleAndImage(9);

        return view('contact', ['page' => $page]);
    }

    public function backend()
    {
        $page = $this->getTitleAndImage(8);

        return view('distributorsBackend', ['page' => $page]);
    }


    public function request()
    {
        $page = $this->getTitleAndImage(10);

        return view('request', ['page' => $page]);
    }


}
