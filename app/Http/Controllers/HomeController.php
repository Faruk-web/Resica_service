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
    public function ielts()
    {
        return view('front.coaching.ielts');
    }
    public function pte()
    {
        return view('front.coaching.pte');
    }
    public function businessVisa()
    {
        return view('front.visa.business_visa');
    }
    public function australia()
    {
        return view('front.country.australia');
    }
    public function canada()
    {
        return view('front.country.canada');
    }
    public function uk()
    {
        return view('front.country.uk');
    }
    public function usa()
    {
        return view('front.country.usa');
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
