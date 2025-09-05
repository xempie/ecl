<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

// Lab Admin Dashboard
Route::get('/', [HomeController::class, 'index']);

// Team Management Routes
Route::get('/team-members', [HomeController::class, 'teamMembers']);
Route::get('/team-members/create', [HomeController::class, 'createTeamMember']);
Route::get('/team-members/{id}', [HomeController::class, 'showTeamMember']);
Route::get('/team-members/{id}/edit', [HomeController::class, 'editTeamMember']);
Route::get('/team-roles', [HomeController::class, 'teamRoles']);

// Publications Management Routes
Route::get('/publications', [HomeController::class, 'publications']);
Route::get('/publications/create', [HomeController::class, 'createPublication']);
Route::get('/publications/{id}', [HomeController::class, 'showPublication']);
Route::get('/publications/{id}/edit', [HomeController::class, 'editPublication']);
Route::get('/publication-categories', [HomeController::class, 'publicationCategories']);

// Research Projects Management Routes
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/projects/create', [HomeController::class, 'createProject']);
Route::get('/projects/{id}', [HomeController::class, 'showProject']);
Route::get('/projects/{id}/edit', [HomeController::class, 'editProject']);
Route::get('/project-areas', [HomeController::class, 'projectAreas']);
Route::get('/project-status', [HomeController::class, 'projectStatus']);

// News & Events Management Routes
Route::get('/news', [HomeController::class, 'news']);
Route::get('/news/create', [HomeController::class, 'createNews']);
Route::get('/news/{id}', [HomeController::class, 'showNews']);
Route::get('/news/{id}/edit', [HomeController::class, 'editNews']);
Route::get('/events', [HomeController::class, 'events']);
Route::get('/events/create', [HomeController::class, 'createEvent']);
Route::get('/events/{id}', [HomeController::class, 'showEvent']);
Route::get('/events/{id}/edit', [HomeController::class, 'editEvent']);

// Contact Management Routes
Route::get('/contact-messages', [HomeController::class, 'contactMessages']);
Route::get('/contact-settings', [HomeController::class, 'contactSettings']);

// Website Settings Routes
Route::get('/settings/general', [HomeController::class, 'generalSettings']);
Route::get('/settings/homepage', [HomeController::class, 'homepageSettings']);
Route::get('/settings/about', [HomeController::class, 'aboutSettings']);
Route::get('/settings/social-media', [HomeController::class, 'socialMediaSettings']);

// User Management Routes
Route::get('/users', [HomeController::class, 'users']);
Route::get('/users/create', [HomeController::class, 'createUser']);
Route::get('/users/{id}', [HomeController::class, 'showUser']);
Route::get('/users/{id}/edit', [HomeController::class, 'editUser']);
Route::get('/roles-permissions', [HomeController::class, 'rolesPermissions']);

// Keep original profile routes for admin user
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/profile-billing', [HomeController::class, 'profileBilling']);
Route::get('/profile-payment', [HomeController::class, 'profilePayment']);
Route::get('/profile-social', [HomeController::class, 'profileSocial']);
Route::get('/profile-notification', [HomeController::class, 'profileNotification']);
Route::get('/profile-setting', [HomeController::class, 'profileSetting']);

Route::get('/blog-detail', [HomeController::class, 'blogDetail']);
Route::get('/blog-detail/{title}', [BlogController::class, 'show'])->name('blog-detail');

Route::get('/shop', [HomeController::class, 'shop']);

Route::get('/shop-item-detail', [HomeController::class, 'shopItemDetail']);
Route::get('/shop-item-detail/{title}', [ProductController::class, 'show'])->name('shop-item-detail');

Route::get('/shop-cart', [HomeController::class, 'shopCart']);
Route::get('/checkout', [HomeController::class, 'checkout']);

Route::get('/gallery-one', [HomeController::class, 'galleryOne']);
Route::get('/gallery-two', [HomeController::class, 'galleryTwo']);

Route::get('/starter', [HomeController::class, 'starter']);
Route::get('/faqs', [HomeController::class, 'faqs']);
Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/terms', [HomeController::class, 'terms']);

Route::get('/ui-components', [HomeController::class, 'uiComponents']);

Route::get('/email-confirmation', [HomeController::class, 'emailConfirmation']);
Route::get('/email-password-reset', [HomeController::class, 'emailPasswordReset']);
Route::get('/email-alert', [HomeController::class, 'emailAlert']);
Route::get('/email-invoices', [HomeController::class, 'emailInvoices']);

Route::get('/invoice-list', [HomeController::class, 'invoiceList']);
Route::get('/invoice', [HomeController::class, 'invoice']);

Route::get('/auth-login', [HomeController::class, 'authLogin']);
Route::get('/auth-signup', [HomeController::class, 'authSignup']);
Route::get('/auth-signup-success', [HomeController::class, 'authSignupSuccess']);
Route::get('/auth-re-password', [HomeController::class, 'authRePassword']);
Route::get('/auth-lock-screen', [HomeController::class, 'authLockScreen']);

Route::get('/comingsoon', [HomeController::class, 'comingsoon']);
Route::get('/maintenance', [HomeController::class, 'maintenance']);
Route::get('/error', [HomeController::class, 'error']);
Route::get('/thankyou', [HomeController::class, 'thankyou']);