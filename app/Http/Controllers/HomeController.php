<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.home');
    }
    public function pages()
    {
        return view('front.page.page');
    }
    public function blogs()
    {
        return view('front.blog.blog');
    }
    public function blogDetails()
    {
        return view('front.blog.blog_details');
    }
    public function andis()
    {
        return view('front.coaching.andis');
    }
    public function pricing()
    {
        return view('front.coaching.pricing');
    }
    public function booklets()
    {
        return view('front.visa.booklets');
    }
    public function fags()
    {
        return view('front.country.fags');
    }
    public function daily()
    {
        return view('front.assist.daily');
    }
    public function travel()
    {
        return view('front.assist.travel');
    }
    public function support()
    {
        return view('front.assist.support');
    }
    public function participation()
    {
        return view('front.assist.participation');
    }
    public function activities()
    {
        return view('front.assist.activities');
    }
    public function sleepover()
    {
        return view('front.assist.sleepover');
    }
    public function coordination()
    {
        return view('front.assist.coordination');
    }
    public function about()
    {
        return view('front.about.about');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }


}
