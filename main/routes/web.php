<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Main pages
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/research', [HomeController::class, 'research'])->name('research');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');

// Research subpages
Route::get('/research/projects', function () {
    return view('research.projects');
})->name('research.projects');

Route::get('/research/publications', function () {
    return view('research.publications');
})->name('research.publications');

Route::get('/research/areas', function () {
    return view('research.areas');
})->name('research.areas');

// Team subpages
Route::get('/team/faculty', function () {
    return view('team.faculty');
})->name('team.faculty');

Route::get('/team/students', function () {
    return view('team.students');
})->name('team.students');

Route::get('/team/collaborators', function () {
    return view('team.collaborators');
})->name('team.collaborators');

// Admin placeholder
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');