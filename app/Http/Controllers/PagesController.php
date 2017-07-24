<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getTitleAndImage($id)
    {
        return Page::whereId($id)->first();
    }

    public function index()
    {
        $page = $this->getTitleAndImage(2);
       
        return view('welcome', ['page' => $page]);

    }

    public function contact()
    {
        return view("contact");
    }

    public function gallery()
    {
        return view("gallery");
    }

    public function news()
    {
        return view("news");
    }

    public function login()
    {
        return view("distributorsLogin");
    }

    public function backend()
    {
        return view("distributorsBackend");
    }

    public function find()
    {
        return view("findDistributor");
    }

    public function request()
    {
        return view("request");
    }
}
