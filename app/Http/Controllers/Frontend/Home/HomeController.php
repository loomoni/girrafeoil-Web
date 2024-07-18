<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Sliders::all();
        return view('frontend.components.Home.home', compact('sliders'));
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
        $contact = contact::all()->first();
        return view('frontend.components.Contact.contactUs', compact('contact'));
    }
}
