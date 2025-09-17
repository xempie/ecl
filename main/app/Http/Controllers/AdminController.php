<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Publication;
use App\Models\Project;
use App\Models\Category;
use App\Models\User;
use App\Models\Contact;
use App\Models\NewsEvent;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver as ImagickDriver;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        // Calculate real statistics
        $stats = [
            'members' => [
                'total' => Member::count(),
                'this_month' => Member::whereMonth('created_at', now()->month)
                                    ->whereYear('created_at', now()->year)
                                    ->count(),
            ],
            'publications' => [
                'total' => Publication::count(),
                'this_quarter' => Publication::whereBetween('created_at', [
                    now()->startOfQuarter(),
                    now()->endOfQuarter()
                ])->count(),
            ],
            'projects' => [
                'total' => Project::count(),
                'active' => Project::where('status', 'active')->count(),
                'new_projects' => Project::whereMonth('created_at', now()->month)
                                        ->whereYear('created_at', now()->year)
                                        ->count(),
            ],
            'categories' => [
                'total' => Category::count(),
                'research_areas' => Category::whereIn('name', ['AI Research', 'AR Research', 'VR Research', 'HCI Research'])->count(),
            ],
            'contacts' => [
                'unread' => Contact::where('status', 'new')->count(),
                'today' => Contact::whereDate('created_at', today())->count(),
                'total' => Contact::count(),
            ]
        ];

        return view('admin.index', compact('stats'));
    }

    // Members Management
    public function members()
    {
        $members = Member::orderBy('lab_location')
                        ->orderBy('position_order')
                        ->orderBy('name')
                        ->paginate(20);
        return view('admin.members.index', compact('members'));
    }

    public function createMember()
    {
        return view('admin.members.create');
    }

    public function storeMember(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'nullable|email|unique:members,email',
            'phone' => 'nullable|string|max:50',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lab_location' => 'required|in:auckland,adelaide,director',
            'member_category' => 'required|string|max:20',
            'position_order' => 'nullable|integer',
            'status' => 'required|in:active,inactive,alumni',
            'social_linkedin' => 'nullable|url',
            'social_email' => 'nullable|email',
            'social_website' => 'nullable|url',
            'social_google_scholar' => 'nullable|url',
            'research_interests' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'achievements' => 'nullable|string',
            'is_featured' => 'boolean',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/team'), $imageName);
            $data['image'] = 'assets/images/team/' . $imageName;
        }

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        Member::create($data);

        return redirect()->route('admin.members')->with('success', 'Member created successfully.');
    }

    public function showMember(Member $member)
    {
        return view('admin.members.show', compact('member'));
    }

    public function editMember(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }

    public function updateMember(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'nullable|email|unique:members,email,' . $member->id,
            'phone' => 'nullable|string|max:50',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lab_location' => 'required|in:auckland,adelaide,director',
            'member_category' => 'required|string|max:20',
            'position_order' => 'nullable|integer',
            'status' => 'required|in:active,inactive,alumni',
            'social_linkedin' => 'nullable|url',
            'social_email' => 'nullable|email',
            'social_website' => 'nullable|url',
            'social_google_scholar' => 'nullable|url',
            'research_interests' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'achievements' => 'nullable|string',
            'is_featured' => 'boolean',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($member->image && file_exists(public_path($member->image))) {
                unlink(public_path($member->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/team'), $imageName);
            $data['image'] = 'assets/images/team/' . $imageName;
        }

        if ($member->name !== $data['name'] && empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $member->update($data);

        return redirect()->route('admin.members')->with('success', 'Member updated successfully.');
    }

    public function destroyMember(Member $member)
    {
        // Delete image if exists
        if ($member->image && file_exists(public_path($member->image))) {
            unlink(public_path($member->image));
        }
        
        $member->delete();

        return redirect()->route('admin.members')->with('success', 'Member deleted successfully.');
    }

    // Publications Management
    public function publications()
    {
        $publications = Publication::with('members')
                                  ->orderBy('year', 'desc')
                                  ->orderBy('created_at', 'desc')
                                  ->paginate(20);
        return view('admin.publications.index', compact('publications'));
    }

    public function createPublication()
    {
        $members = Member::ordered()->get(); // Get all members, not just active ones
        $categories = Category::active()->ordered()->get();
        $projects = Project::active()->ordered()->get(); // Get all active projects
        return view('admin.publications.create', compact('members', 'categories', 'projects'));
    }

    public function storePublication(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'authors' => 'required|string',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 5),
            'journal' => 'nullable|string|max:255',
            'conference' => 'nullable|string|max:255',
            'doi' => 'nullable|string|max:255',
            'url' => 'nullable|url',
            'download_url' => 'nullable|url',
            'abstract' => 'nullable|string',
            'type' => 'required|in:journal,conference,book_chapter,workshop,preprint',
            'status' => 'required|in:published,in_press,submitted,under_review',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'project_id' => 'nullable|exists:projects,id',
            'members' => 'nullable|array|max:10',
            'members.*' => 'exists:members,id',
            'categories' => 'nullable|array|max:5',
            'categories.*' => 'exists:categories,id',
        ]);

        $data = $request->except(['categories', 'members']); // Exclude relationship data

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '.jpg'; // Always save as JPG for consistency
            $imagePath = public_path('assets/images/publications/' . $imageName);
            
            // Ensure the directory exists
            if (!file_exists(dirname($imagePath))) {
                mkdir(dirname($imagePath), 0755, true);
            }
            
            // Simple file copy without image processing for now
            // This avoids the GD extension issue
            copy($imageFile, $imagePath);
            
            $data['image'] = 'assets/images/publications/' . $imageName;
        }

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $publication = Publication::create($data);

        // Attach members with order
        if ($request->has('members')) {
            $memberData = [];
            foreach ($request->members as $order => $memberId) {
                $memberData[$memberId] = ['order' => $order + 1];
            }
            $publication->members()->sync($memberData);
        }

        // Attach categories
        if ($request->has('categories')) {
            $publication->categories()->sync($request->categories);
        }

        return redirect()->route('admin.publications')->with('success', 'Publication created successfully.');
    }

    public function showPublication(Publication $publication)
    {
        $publication->load('members');
        return view('admin.publications.show', compact('publication'));
    }

    public function editPublication(Publication $publication)
    {
        $members = Member::active()->ordered()->get();
        $categories = Category::active()->ordered()->get();
        $projects = Project::active()->ordered()->get(); // Add missing projects variable
        $publication->load(['members', 'categories']);
        return view('admin.publications.edit', compact('publication', 'members', 'categories', 'projects'));
    }

    public function updatePublication(Request $request, Publication $publication)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'authors' => 'required|string',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 5),
            'journal' => 'nullable|string|max:255',
            'conference' => 'nullable|string|max:255',
            'doi' => 'nullable|string|max:255',
            'url' => 'nullable|url',
            'download_url' => 'nullable|url',
            'abstract' => 'nullable|string',
            'type' => 'required|in:journal,conference,book_chapter,workshop,preprint',
            'status' => 'required|in:published,in_press,submitted,under_review',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'members' => 'nullable|array|max:10',
            'members.*' => 'exists:members,id',
            'categories' => 'nullable|array|max:5',
            'categories.*' => 'exists:categories,id',
        ]);

        $data = $request->except(['categories', 'members']); // Exclude relationship data

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($publication->image && file_exists(public_path($publication->image))) {
                unlink(public_path($publication->image));
            }
            
            $imageFile = $request->file('image');
            $imageName = time() . '.jpg'; // Always save as JPG for consistency
            $imagePath = public_path('assets/images/publications/' . $imageName);
            
            // Ensure the directory exists
            if (!file_exists(dirname($imagePath))) {
                mkdir(dirname($imagePath), 0755, true);
            }
            
            // Simple file copy without image processing for now
            // This avoids the GD extension issue
            copy($imageFile, $imagePath);
            
            $data['image'] = 'assets/images/publications/' . $imageName;
        }

        if ($publication->title !== $data['title'] && empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $publication->update($data);

        // Sync members with order
        if ($request->has('members')) {
            $memberData = [];
            foreach ($request->members as $order => $memberId) {
                $memberData[$memberId] = ['order' => $order + 1];
            }
            $publication->members()->sync($memberData);
        } else {
            $publication->members()->detach();
        }

        // Sync categories
        if ($request->has('categories')) {
            $publication->categories()->sync($request->categories);
        } else {
            $publication->categories()->detach();
        }

        return redirect()->route('admin.publications')->with('success', 'Publication updated successfully.');
    }

    public function destroyPublication(Publication $publication)
    {
        // Delete image if exists
        if ($publication->image && file_exists(public_path($publication->image))) {
            unlink(public_path($publication->image));
        }
        
        $publication->delete();

        return redirect()->route('admin.publications')->with('success', 'Publication deleted successfully.');
    }

    // Research Projects Management
    public function projects()
    {
        $projects = Project::with('members')
                           ->orderBy('position_order', 'asc')
                           ->orderBy('created_at', 'desc')
                           ->paginate(20);
        return view('admin.projects.index', compact('projects'));
    }

    public function createProject()
    {
        $members = Member::ordered()->get();
        $categories = Category::active()->ordered()->get();
        return view('admin.projects.create', compact('members', 'categories'));
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:active,completed,on_hold',
            'project_type' => 'required|in:research,development,collaboration',
            'year' => 'nullable|integer|min:1900|max:' . (date('Y') + 5),
            'categories' => 'nullable|array|max:5',
            'categories.*' => 'exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'position_order' => 'nullable|integer',
            'members' => 'nullable|array|max:10',
            'members.*' => 'exists:members,id',
        ]);

        $data = $request->except(['categories', 'members']); // Exclude relationship data

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '.jpg';
            $imagePath = public_path('assets/images/projects/' . $imageName);
            
            // Ensure the directory exists
            if (!file_exists(dirname($imagePath))) {
                mkdir(dirname($imagePath), 0755, true);
            }
            
            // Simple file copy without image processing for now
            // This avoids the GD extension issue
            copy($imageFile, $imagePath);
            
            $data['image'] = 'assets/images/projects/' . $imageName;
        }

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $project = Project::create($data);

        // Attach members with order
        if ($request->has('members')) {
            $memberData = [];
            foreach ($request->members as $order => $memberId) {
                $memberData[$memberId] = ['order' => $order + 1];
            }
            $project->members()->sync($memberData);
        }

        // Attach categories
        if ($request->has('categories')) {
            $project->categories()->sync($request->categories);
        }

        return redirect()->route('admin.projects')->with('success', 'Project created successfully.');
    }

    public function showProject(Project $project)
    {
        $project->load('members');
        return view('admin.projects.show', compact('project'));
    }

    public function editProject(Project $project)
    {
        $members = Member::ordered()->get();
        $categories = Category::active()->ordered()->get();
        $project->load(['members', 'categories']);
        return view('admin.projects.edit', compact('project', 'members', 'categories'));
    }

    public function updateProject(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:active,completed,on_hold',
            'project_type' => 'required|in:research,development,collaboration',
            'year' => 'nullable|integer|min:1900|max:' . (date('Y') + 5),
            'categories' => 'nullable|array|max:5',
            'categories.*' => 'exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'position_order' => 'nullable|integer',
            'members' => 'nullable|array|max:10',
            'members.*' => 'exists:members,id',
        ]);

        $data = $request->except(['categories', 'members']); // Exclude relationship data

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }
            
            $imageFile = $request->file('image');
            $imageName = time() . '.jpg';
            $imagePath = public_path('assets/images/projects/' . $imageName);
            
            // Ensure the directory exists
            if (!file_exists(dirname($imagePath))) {
                mkdir(dirname($imagePath), 0755, true);
            }
            
            // Simple file copy without image processing for now
            // This avoids the GD extension issue
            copy($imageFile, $imagePath);
            
            $data['image'] = 'assets/images/projects/' . $imageName;
        }

        if ($project->title !== $data['title'] && empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $project->update($data);

        // Sync members with order
        if ($request->has('members')) {
            $memberData = [];
            foreach ($request->members as $order => $memberId) {
                $memberData[$memberId] = ['order' => $order + 1];
            }
            $project->members()->sync($memberData);
        } else {
            $project->members()->detach();
        }

        // Sync categories
        if ($request->has('categories')) {
            $project->categories()->sync($request->categories);
        } else {
            $project->categories()->detach();
        }

        return redirect()->route('admin.projects')->with('success', 'Project updated successfully.');
    }

    public function destroyProject(Project $project)
    {
        // Delete image if exists
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }
        
        $project->delete();

        return redirect()->route('admin.projects')->with('success', 'Project deleted successfully.');
    }

    // Categories Management
    public function categories()
    {
        $categories = Category::withCount(['publications', 'projects'])
                             ->orderBy('position_order', 'asc')
                             ->orderBy('name', 'asc')
                             ->paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.categories.create');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'color' => 'required|string|regex:/^#[a-fA-F0-9]{6}$/',
            'is_active' => 'boolean',
            'position_order' => 'nullable|integer|min:0',
        ]);

        $data = $request->all();
        
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        Category::create($data);

        return redirect()->route('admin.categories')->with('success', 'Category created successfully.');
    }

    public function showCategory(Category $category)
    {
        $category->load(['publications', 'projects']);
        return view('admin.categories.show', compact('category'));
    }

    public function editCategory(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function updateCategory(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'color' => 'required|string|regex:/^#[a-fA-F0-9]{6}$/',
            'is_active' => 'boolean',
            'position_order' => 'nullable|integer|min:0',
        ]);

        $data = $request->all();
        
        if ($category->name !== $data['name'] && empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $category->update($data);

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');
    }

    public function destroyCategory(Category $category)
    {
        // Check if category is in use
        $usageCount = $category->publications()->count() + $category->projects()->count();
        
        if ($usageCount > 0) {
            return redirect()->route('admin.categories')
                           ->with('error', "Cannot delete category '{$category->name}' because it is used by {$usageCount} publication(s) or project(s).");
        }
        
        $category->delete();

        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully.');
    }

    public function projectAreas()
    {
        return view('admin.project-areas');
    }

    public function projectStatus()
    {
        return view('admin.project-status');
    }

    // News Management
    public function news()
    {
        $news = NewsEvent::news()
                        ->with(['author', 'categories'])
                        ->orderBy('created_at', 'desc')
                        ->paginate(20);
        return view('admin.news.index', compact('news'));
    }

    public function createNews()
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('admin.news.create', compact('categories'));
    }

    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'status' => 'required|in:draft,published,scheduled,archived',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $data = $request->except(['categories']); // Exclude relationship data
        $data['type'] = 'news';
        $data['author_id'] = auth()->id();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('assets/images/news/') . $imageName;
            
            // Create directory if not exists
            if (!file_exists(public_path('assets/images/news/'))) {
                mkdir(public_path('assets/images/news/'), 0755, true);
            }
            
            $image->move(public_path('assets/images/news/'), $imageName);
            $data['featured_image'] = 'assets/images/news/' . $imageName;
        }

        $newsItem = NewsEvent::create($data);

        // Sync categories
        if ($request->has('categories')) {
            $newsItem->categories()->sync($request->categories);
        }

        return redirect()->route('admin.news')->with('success', 'News created successfully.');
    }

    public function showNews(NewsEvent $news)
    {
        $news->load(['author', 'categories']);
        return view('admin.news.show', compact('news'));
    }

    public function editNews(NewsEvent $news)
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        $news->load('categories');
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function updateNews(Request $request, NewsEvent $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'status' => 'required|in:draft,published,scheduled,archived',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $data = $request->all();

        if ($news->title !== $data['title'] && empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($news->featured_image && file_exists(public_path($news->featured_image))) {
                unlink(public_path($news->featured_image));
            }

            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('assets/images/news/') . $imageName;
            
            // Create directory if not exists
            if (!file_exists(public_path('assets/images/news/'))) {
                mkdir(public_path('assets/images/news/'), 0755, true);
            }
            
            $image->move(public_path('assets/images/news/'), $imageName);
            $data['featured_image'] = 'assets/images/news/' . $imageName;
        }

        $news->update($data);

        // Sync categories
        if ($request->has('categories')) {
            $news->categories()->sync($request->categories);
        } else {
            $news->categories()->detach();
        }

        return redirect()->route('admin.news')->with('success', 'News updated successfully.');
    }

    public function destroyNews(NewsEvent $news)
    {
        // Delete image if exists
        if ($news->featured_image && file_exists(public_path($news->featured_image))) {
            unlink(public_path($news->featured_image));
        }
        
        $news->delete();

        return redirect()->route('admin.news')->with('success', 'News deleted successfully.');
    }

    // Events Management
    public function events()
    {
        $events = NewsEvent::events()
                          ->with(['author', 'categories'])
                          ->orderBy('event_date', 'desc')
                          ->paginate(20);
        return view('admin.events.index', compact('events'));
    }

    public function createEvent()
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('admin.events.create', compact('categories'));
    }

    public function storeEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'status' => 'required|in:draft,published,scheduled,archived',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'required|date',
            'event_time' => 'nullable|string',
            'event_location' => 'nullable|string|max:255',
            'event_url' => 'nullable|url',
            'published_at' => 'nullable|date',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $data = $request->except(['categories']); // Exclude relationship data
        $data['type'] = 'event';
        $data['author_id'] = auth()->id();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('assets/images/events/') . $imageName;
            
            // Create directory if not exists
            if (!file_exists(public_path('assets/images/events/'))) {
                mkdir(public_path('assets/images/events/'), 0755, true);
            }
            
            $image->move(public_path('assets/images/events/'), $imageName);
            $data['featured_image'] = 'assets/images/events/' . $imageName;
        }

        $event = NewsEvent::create($data);

        // Sync categories
        if ($request->has('categories')) {
            $event->categories()->sync($request->categories);
        }

        return redirect()->route('admin.events')->with('success', 'Event created successfully.');
    }

    public function showEvent(NewsEvent $event)
    {
        $event->load(['author', 'categories']);
        return view('admin.events.show', compact('event'));
    }

    public function editEvent(NewsEvent $event)
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        $event->load('categories');
        return view('admin.events.edit', compact('event', 'categories'));
    }

    public function updateEvent(Request $request, NewsEvent $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'status' => 'required|in:draft,published,scheduled,archived',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'required|date',
            'event_time' => 'nullable|string',
            'event_location' => 'nullable|string|max:255',
            'event_url' => 'nullable|url',
            'published_at' => 'nullable|date',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $data = $request->all();

        if ($event->title !== $data['title'] && empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($event->featured_image && file_exists(public_path($event->featured_image))) {
                unlink(public_path($event->featured_image));
            }

            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('assets/images/events/') . $imageName;
            
            // Create directory if not exists
            if (!file_exists(public_path('assets/images/events/'))) {
                mkdir(public_path('assets/images/events/'), 0755, true);
            }
            
            $image->move(public_path('assets/images/events/'), $imageName);
            $data['featured_image'] = 'assets/images/events/' . $imageName;
        }

        $event->update($data);

        // Sync categories
        if ($request->has('categories')) {
            $event->categories()->sync($request->categories);
        } else {
            $event->categories()->detach();
        }

        return redirect()->route('admin.events')->with('success', 'Event updated successfully.');
    }

    public function destroyEvent(NewsEvent $event)
    {
        // Delete image if exists
        if ($event->featured_image && file_exists(public_path($event->featured_image))) {
            unlink(public_path($event->featured_image));
        }
        
        $event->delete();

        return redirect()->route('admin.events')->with('success', 'Event deleted successfully.');
    }

    // Contact Management
    public function contactMessages(Request $request)
    {
        $query = Contact::orderBy('created_at', 'desc');

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $contacts = $query->paginate(20);

        // Statistics
        $stats = [
            'total' => Contact::count(),
            'new' => Contact::where('status', 'new')->count(),
            'replied' => Contact::where('status', 'replied')->count(),
            'this_week' => Contact::where('created_at', '>=', now()->startOfWeek())->count(),
        ];

        return view('admin.contacts.index', compact('contacts', 'stats'));
    }

    public function showContactMessage(Contact $contact)
    {
        // Mark as read if it's new
        if ($contact->status === 'new') {
            $contact->update(['status' => 'read']);
        }

        $contact->load('repliedByUser');
        return view('admin.contacts.show', compact('contact'));
    }

    public function updateContactStatus(Request $request, Contact $contact)
    {
        $request->validate([
            'status' => 'required|in:new,read,replied,archived',
        ]);

        $updateData = ['status' => $request->status];

        if ($request->status === 'replied') {
            $updateData['replied_at'] = now();
            $updateData['replied_by'] = auth()->id();
        }

        $contact->update($updateData);

        return redirect()->back()->with('success', 'Contact status updated successfully.');
    }

    public function replyToContact(Request $request, Contact $contact)
    {
        $request->validate([
            'reply_message' => 'required|string|max:5000',
        ]);

        // TODO: Send email reply logic here
        // This would typically involve sending an actual email using Laravel's Mail facade

        $contact->update([
            'status' => 'replied',
            'replied_at' => now(),
            'replied_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Reply sent successfully.');
    }

    public function destroyContactMessage(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts')->with('success', 'Contact message deleted successfully.');
    }

    public function contactSettings()
    {
        return view('admin.contact-settings');
    }

    // Website Settings
    public function generalSettings()
    {
        return view('admin.settings-general');
    }

    public function homepageSettings()
    {
        return view('admin.settings-homepage');
    }

    public function aboutSettings()
    {
        return view('admin.settings-about');
    }

    public function socialMediaSettings()
    {
        return view('admin.settings-social-media');
    }

    // User Management
    public function users()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:user,admin,editor',
            'email_verified' => 'boolean',
            'send_welcome' => 'boolean',
        ]);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ];

        if ($request->email_verified) {
            $userData['email_verified_at'] = now();
        }

        $user = User::create($userData);

        // TODO: Send welcome email if requested
        // if ($request->send_welcome) {
        //     // Send welcome email logic here
        // }

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    public function showUser(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|in:user,admin,editor',
            'verify_email' => 'boolean',
        ]);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];

        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->password);
        }

        if ($request->verify_email && !$user->email_verified_at) {
            $userData['email_verified_at'] = now();
        }

        $user->update($userData);

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function destroyUser(User $user)
    {
        // Prevent deleting yourself
        if ($user->id === auth()->id()) {
            return redirect()->route('admin.users')->with('error', 'You cannot delete your own account.');
        }

        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

    public function rolesPermissions()
    {
        return view('admin.roles-permissions');
    }

    // Profile Management
    public function profile()
    {
        return view('admin.profile');
    }

    public function profileBilling()
    {
        return view('admin.profile-billing');
    }

    public function profilePayment()
    {
        return view('admin.profile-payment');
    }

    public function profileSocial()
    {
        return view('admin.profile-social');
    }

    public function profileNotification()
    {
        return view('admin.profile-notification');
    }

    public function profileSetting()
    {
        return view('admin.profile-setting');
    }
}