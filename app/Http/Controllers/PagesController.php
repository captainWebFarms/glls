<?php

namespace App\Http\Controllers;

use App\Page;
use App\Text;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getTitleAndImage($id)
    {
        return Page::whereId($id)->first();
    }
    public function getAllText($id){
        return Text::wherePageId($id)->get();
    }
    public function index()
    {
        $page = $this->getTitleAndImage(1);
        $text = $this->getAllText(1);

        return view('welcome', compact('page', 'text'));

    }

    public function about()
    {
        $page = $this->getTitleAndImage(2);

        return view('about', ['page' => $page]);
    }

    public function product()
    {
        $page = $this->getTitleAndImage(3);

        return view('products', ['page' => $page]);
    }

    public function gallery()
    {
        $page = $this->getTitleAndImage(4);

        return view('gallery', ['page' => $page]);
    }

    public function news()
    {
        $page = $this->getTitleAndImage(5);
        return view("news", ['page' => $page]);
    }

    public function find()
    {
        $page = $this->getTitleAndImage(6);

        return view('findDistributor', ['page' => $page]);
    }

    public function login()
    {
        $page = $this->getTitleAndImage(7);

        return view('distributorsLogin', ['page' => $page]);
    }

    public function contact()
    {
        $page = $this->getTitleAndImage(8);

        return view('contact', ['page' => $page]);
    }

    public function backend()
    {
        $page = $this->getTitleAndImage(9);

        return view('distributorsBackend', ['page' => $page]);
    }


    public function request()
    {
        $page = $this->getTitleAndImage(10);

        return view('request', ['page' => $page]);
    }


}
