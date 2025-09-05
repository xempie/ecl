<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Member;
use App\Models\Publication;
use App\Models\Project;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display the homepage
     */
    public function index()
    {
        $featuredPublications = Publication::with(['categories', 'members'])
            ->featured()
            ->published()
            ->orderBy('year', 'desc')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        $recentProjects = Project::with(['categories', 'members'])
            ->active()
            ->featured()
            ->ordered()
            ->limit(6)
            ->get();

        return view('index', compact('featuredPublications', 'recentProjects'));
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
        $director = Member::where('lab_location', 'director')->active()->featured()->first();
        $aucklandMembers = Member::where('lab_location', 'auckland')->active()->ordered()->get();
        $adelaideMembers = Member::where('lab_location', 'adelaide')->active()->ordered()->get();
        
        return view('team', compact('director', 'aucklandMembers', 'adelaideMembers'));
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

    /**
     * Display the publications page
     */
    public function publications()
    {
        $publications = Publication::with(['categories', 'members'])
            ->active()
            ->orderBy('year', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        $categories = Category::active()->ordered()->get();

        return view('research.publications', compact('publications', 'categories'));
    }

    /**
     * Display the projects page
     */
    public function projects()
    {
        $projects = Project::with(['categories', 'members'])
            ->active()
            ->ordered()
            ->paginate(12);

        $categories = Category::active()->ordered()->get();

        return view('research.projects', compact('projects', 'categories'));
    }

    /**
     * Display team member detail page
     */
    public function teamMember($slug)
    {
        $member = Member::where('slug', $slug)->active()->first();
        
        if (!$member) {
            abort(404);
        }

        // Get related publications and projects
        $publications = $member->publications()->with('categories')->orderBy('year', 'desc')->limit(10)->get();
        $projects = $member->projects()->active()->ordered()->limit(5)->get();
        
        return view('team.member-detail', compact('member', 'publications', 'projects'));
    }

}