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
    public function publications(Request $request)
    {
        $query = Publication::with(['categories', 'members']);

        // Apply filters
        if ($request->filled('year')) {
            $query->where('year', $request->year);
        }

        if ($request->filled('topic')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('slug', $request->topic);
            });
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('authors', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('abstract', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('journal', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('conference', 'LIKE', '%' . $searchTerm . '%');
            });
        }

        // Apply sorting
        $query->orderBy('year', 'desc')
              ->orderBy('created_at', 'desc');

        $publications = $query->paginate(50)->appends($request->query());

        $categories = Category::active()->ordered()->get();

        return view('research.publications', compact('publications', 'categories'));
    }

    /**
     * Display the projects page
     */
    public function projects(Request $request)
    {
        $query = Project::with(['categories', 'members']); // Removed ->active() to show all projects

        // Apply topic filter (from research topic buttons)
        if ($request->filled('topic')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('slug', $request->topic);
            });
        }

        // Apply sorting
        $query->ordered();

        $projects = $query->paginate(12)->appends($request->query());

        $categories = Category::active()->ordered()->get();

        return view('research.projects', compact('projects', 'categories'));
    }

    /**
     * Display individual project detail page
     */
    public function projectDetail($slug)
    {
        $project = Project::where('slug', $slug)->with(['categories', 'members', 'publications'])->first();

        if (!$project) {
            abort(404);
        }

        // Get related projects from same categories
        $relatedProjects = collect();
        if ($project->categories && $project->categories->count() > 0) {
            $relatedProjects = Project::where('id', '!=', $project->id)
                ->whereHas('categories', function ($query) use ($project) {
                    $query->whereIn('categories.id', $project->categories->pluck('id'));
                })
                ->with(['categories', 'members'])
                ->ordered()
                ->limit(3)
                ->get();
        }

        return view('research.project-detail', compact('project', 'relatedProjects'));
    }

    /**
     * Display the alumni page
     */
    public function alumni()
    {
        $aucklandAlumni = Member::where('lab_location', 'auckland')->where('member_type', 'alumni')->active()->ordered()->get();
        $adelaideAlumni = Member::where('lab_location', 'adelaide')->where('member_type', 'alumni')->active()->ordered()->get();
        
        return view('team.alumni', compact('aucklandAlumni', 'adelaideAlumni'));
    }

    /**
     * Display the collaborators page
     */
    public function collaborators()
    {
        $collaborators = Member::where('member_type', 'collaborator')->active()->ordered()->get();
        
        return view('team.collaborators', compact('collaborators'));
    }

    /**
     * Display the virtual interns page
     */
    public function virtualInterns()
    {
        $virtualInterns = Member::where('member_type', 'virtual_intern')->active()->ordered()->get();
        
        return view('team.virtual-interns', compact('virtualInterns'));
    }

    /**
     * Display team member detail page
     */
    public function teamMember(Request $request, $slug)
    {
        $member = Member::where('slug', $slug)->active()->first();

        if (!$member) {
            abort(404);
        }

        // Get related publications with pagination (5 per page)
        $publications = $member->publications()
            ->with('categories')
            ->orderBy('year', 'desc')
            ->paginate(5, ['*'], 'publications')
            ->appends($request->query());

        // Get related projects with pagination (5 per page)
        $projects = $member->projects()
            ->with(['categories'])
            ->ordered()
            ->paginate(5, ['*'], 'projects')
            ->appends($request->query());

        return view('team.member-detail', compact('member', 'publications', 'projects'));
    }

}