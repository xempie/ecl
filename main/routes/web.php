<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Main pages
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/research', [HomeController::class, 'research'])->name('research');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news/{slug}', [HomeController::class, 'newsDetail'])->name('news.detail');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::match(['GET', 'POST'], '/contact', [HomeController::class, 'contact'])->name('contact');
Route::match(['GET', 'POST'], '/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/join-us', function () {
    return view('join-us');
})->name('join-us');

// Research subpages
Route::get('/research/projects', [HomeController::class, 'projects'])->name('research.projects');
Route::get('/research/projects/{project}', [HomeController::class, 'projectDetail'])->name('research.project.detail');

Route::get('/research/publications', [HomeController::class, 'publications'])->name('research.publications');

Route::get('/research/areas', function () {
    return view('research.areas');
})->name('research.areas');

// Team subpages
Route::get('/team/alumni', [HomeController::class, 'alumni'])->name('team.alumni');
Route::get('/team/collaborators', [HomeController::class, 'collaborators'])->name('team.collaborators');
Route::get('/team/virtual-interns', [HomeController::class, 'virtualInterns'])->name('team.virtual-interns');

// Team member detail pages
Route::get('/team/{member}', [HomeController::class, 'teamMember'])->name('team.member');

// Lab Admin Panel Routes
Route::prefix('labadmin')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    // Members Management Routes
    Route::get('/members', [App\Http\Controllers\AdminController::class, 'members'])->name('admin.members');
    Route::get('/members/create', [App\Http\Controllers\AdminController::class, 'createMember'])->name('admin.members.create');
    Route::post('/members', [App\Http\Controllers\AdminController::class, 'storeMember'])->name('admin.members.store');
    Route::get('/members/{member}', [App\Http\Controllers\AdminController::class, 'showMember'])->name('admin.members.show');
    Route::get('/members/{member}/edit', [App\Http\Controllers\AdminController::class, 'editMember'])->name('admin.members.edit');
    Route::put('/members/{member}', [App\Http\Controllers\AdminController::class, 'updateMember'])->name('admin.members.update');
    Route::delete('/members/{member}', [App\Http\Controllers\AdminController::class, 'destroyMember'])->name('admin.members.destroy');

    // Publications Management Routes
    Route::get('/publications', [App\Http\Controllers\AdminController::class, 'publications'])->name('admin.publications');
    Route::get('/publications/create', [App\Http\Controllers\AdminController::class, 'createPublication'])->name('admin.publications.create');
    Route::post('/publications', [App\Http\Controllers\AdminController::class, 'storePublication'])->name('admin.publications.store');
    Route::get('/publications/{publication}', [App\Http\Controllers\AdminController::class, 'showPublication'])->name('admin.publications.show');
    Route::get('/publications/{publication}/edit', [App\Http\Controllers\AdminController::class, 'editPublication'])->name('admin.publications.edit');
    Route::put('/publications/{publication}', [App\Http\Controllers\AdminController::class, 'updatePublication'])->name('admin.publications.update');
    Route::delete('/publications/{publication}', [App\Http\Controllers\AdminController::class, 'destroyPublication'])->name('admin.publications.destroy');

    // Research Projects Management Routes
    Route::get('/projects', [App\Http\Controllers\AdminController::class, 'projects'])->name('admin.projects');
    Route::get('/projects/create', [App\Http\Controllers\AdminController::class, 'createProject'])->name('admin.projects.create');
    Route::post('/projects', [App\Http\Controllers\AdminController::class, 'storeProject'])->name('admin.projects.store');
    Route::get('/projects/{project}', [App\Http\Controllers\AdminController::class, 'showProject'])->name('admin.projects.show');
    Route::get('/projects/{project}/edit', [App\Http\Controllers\AdminController::class, 'editProject'])->name('admin.projects.edit');
    Route::put('/projects/{project}', [App\Http\Controllers\AdminController::class, 'updateProject'])->name('admin.projects.update');
    Route::delete('/projects/{project}', [App\Http\Controllers\AdminController::class, 'destroyProject'])->name('admin.projects.destroy');

    // Categories Management Routes
    Route::get('/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/categories/create', [App\Http\Controllers\AdminController::class, 'createCategory'])->name('admin.categories.create');
    Route::post('/categories', [App\Http\Controllers\AdminController::class, 'storeCategory'])->name('admin.categories.store');
    Route::get('/categories/{category}', [App\Http\Controllers\AdminController::class, 'showCategory'])->name('admin.categories.show');
    Route::get('/categories/{category}/edit', [App\Http\Controllers\AdminController::class, 'editCategory'])->name('admin.categories.edit');
    Route::put('/categories/{category}', [App\Http\Controllers\AdminController::class, 'updateCategory'])->name('admin.categories.update');
    Route::delete('/categories/{category}', [App\Http\Controllers\AdminController::class, 'destroyCategory'])->name('admin.categories.destroy');

    // News Management Routes
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class, [
        'as' => 'admin',
        'names' => [
            'index' => 'admin.news.index',
            'create' => 'admin.news.create',
            'store' => 'admin.news.store',
            'show' => 'admin.news.show',
            'edit' => 'admin.news.edit',
            'update' => 'admin.news.update',
            'destroy' => 'admin.news.destroy',
        ]
    ]);
    Route::patch('/news/{news}/toggle-featured', [App\Http\Controllers\Admin\NewsController::class, 'toggleFeatured'])->name('admin.news.toggleFeatured');

    // Events Management Routes
    Route::get('/events', [App\Http\Controllers\AdminController::class, 'events'])->name('admin.events');
    Route::get('/events/create', [App\Http\Controllers\AdminController::class, 'createEvent'])->name('admin.events.create');
    Route::post('/events', [App\Http\Controllers\AdminController::class, 'storeEvent'])->name('admin.events.store');
    Route::get('/events/{event}', [App\Http\Controllers\AdminController::class, 'showEvent'])->name('admin.events.show');
    Route::get('/events/{event}/edit', [App\Http\Controllers\AdminController::class, 'editEvent'])->name('admin.events.edit');
    Route::put('/events/{event}', [App\Http\Controllers\AdminController::class, 'updateEvent'])->name('admin.events.update');
    Route::delete('/events/{event}', [App\Http\Controllers\AdminController::class, 'destroyEvent'])->name('admin.events.destroy');

    // Contact Management Routes
    Route::get('/contact-messages', [App\Http\Controllers\AdminController::class, 'contactMessages'])->name('admin.contacts');
    Route::get('/contact-messages/{contact}', [App\Http\Controllers\AdminController::class, 'showContactMessage'])->name('admin.contacts.show');
    Route::patch('/contact-messages/{contact}/status', [App\Http\Controllers\AdminController::class, 'updateContactStatus'])->name('admin.contacts.update-status');
    Route::post('/contact-messages/{contact}/reply', [App\Http\Controllers\AdminController::class, 'replyToContact'])->name('admin.contacts.reply');
    Route::delete('/contact-messages/{contact}', [App\Http\Controllers\AdminController::class, 'destroyContactMessage'])->name('admin.contacts.destroy');
    Route::get('/contact-settings', [App\Http\Controllers\AdminController::class, 'contactSettings'])->name('admin.contact-settings');

    // Website Settings Routes
    Route::get('/settings/general', [App\Http\Controllers\AdminController::class, 'generalSettings'])->name('admin.settings.general');
    Route::get('/settings/homepage', [App\Http\Controllers\AdminController::class, 'homepageSettings'])->name('admin.settings.homepage');
    Route::get('/settings/about', [App\Http\Controllers\AdminController::class, 'aboutSettings'])->name('admin.settings.about');
    Route::get('/settings/social-media', [App\Http\Controllers\AdminController::class, 'socialMediaSettings'])->name('admin.settings.social-media');

    // User Management Routes
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
    Route::get('/users/create', [App\Http\Controllers\AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/users', [App\Http\Controllers\AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/users/{user}', [App\Http\Controllers\AdminController::class, 'showUser'])->name('admin.users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{user}', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\AdminController::class, 'destroyUser'])->name('admin.users.destroy');
    Route::get('/roles-permissions', [App\Http\Controllers\AdminController::class, 'rolesPermissions'])->name('admin.roles-permissions');

    // Profile Management Routes  
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/profile-billing', [App\Http\Controllers\AdminController::class, 'profileBilling'])->name('admin.profile-billing');
    Route::get('/profile-payment', [App\Http\Controllers\AdminController::class, 'profilePayment'])->name('admin.profile-payment');
    Route::get('/profile-social', [App\Http\Controllers\AdminController::class, 'profileSocial'])->name('admin.profile-social');
    Route::get('/profile-notification', [App\Http\Controllers\AdminController::class, 'profileNotification'])->name('admin.profile-notification');
    Route::get('/profile-setting', [App\Http\Controllers\AdminController::class, 'profileSetting'])->name('admin.profile-setting');
});

// Authentication Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout')->middleware('auth');