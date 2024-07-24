<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\contact;
use App\Models\News;
use App\Models\ServicesLocation;
use App\Models\Sliders;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Sliders::all();
        $aboutUs = AboutUs::all()->first();
        $services = ServicesLocation::all();
        $tesimonials = Testimonials::all();
        $currentNews = News::latest()->take(3)->get();
        return view('frontend.components.Home.home', compact('sliders', 'aboutUs', 'services', 'tesimonials', 'currentNews'));
    }

    public function aboutUs()
    {
        $aboutUs = AboutUs::all()->first();
        $tesimonials = Testimonials::all();
        return view('frontend.components.About.aboutus', compact('aboutUs', 'tesimonials'));
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
