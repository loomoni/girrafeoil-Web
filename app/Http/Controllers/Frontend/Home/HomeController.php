<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.components.Home.home');
    }

    public function aboutUs()
    {
        return view('frontend.components.About.aboutus');
    }

    public function services()
    {
        return view('frontend.components.Services.services');
    }

    public function news()
    {
        return view('frontend.components.News.news');
    }

    public function newsDetails()
    {
        return view('frontend.components.News.newsDetails');
    }

    public function contactUs()
    {
        return view('frontend.components.Contact.contactUs');
    }
}
