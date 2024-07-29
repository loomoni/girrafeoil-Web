<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\contact;
use App\Models\News;
use App\Models\ServicesLocation;
use App\Models\Sliders;
use App\Models\Team;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Sliders::all();
        $aboutUs = AboutUs::all()->first();
        $services = ServicesLocation::all();
        $testimonials = Testimonials::all();
        $currentNews = News::latest()->take(3)->get();
        return view('frontend.components.Home.home', compact('sliders', 'aboutUs', 'services', 'testimonials', 'currentNews'));
    }

    public function aboutUs()
    {
        $aboutUs = AboutUs::all()->first();
        $testimonials = Testimonials::all();
        $Team = Team::all();
        return view('frontend.components.About.aboutus', compact('aboutUs', 'testimonials', 'Team'));
    }

    public function services()
    {
        $services = ServicesLocation::all();
        $testimonials = Testimonials::all();
        return view('frontend.components.Services.services', compact('services', 'testimonials'));
    }

    public function news()
    {
        $news = News::all();
        return view('frontend.components.News.news', compact('news'));
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
