<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }

    public function blog()
    {
        return view('site.blog');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function portfolio()
    {
        return view('site.portfolio');
    }

    public function service()
    {
        return view('site.service');
    }

    public function team()
    {
        return view('site.team');
    }
}
