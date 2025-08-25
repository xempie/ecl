<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the research page
     */
    public function research()
    {
        return view('research.index');
    }

    /**
     * Display the team page
     */
    public function team()
    {
        return view('team');
    }

    /**
     * Display the news page
     */
    public function news()
    {
        return view('news.index');
    }

    /**
     * Display the events page
     */
    public function events()
    {
        return view('events.index');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('contact');
    }
}