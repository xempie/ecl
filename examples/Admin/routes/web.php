<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/index-crypto', [HomeController::class, 'indexCrypto']);
Route::get('/index-ecommerce', [HomeController::class, 'indexEcommerce']);

Route::get('/index-dark', [HomeController::class, 'indexDark']);
Route::get('/index-rtl', [HomeController::class, 'indexRtl']);
Route::get('/index-dark-rtl', [HomeController::class, 'indexDarkRtl']);
Route::get('/index-sidebar-light', [HomeController::class, 'indexSidebarLight']);
Route::get('/index-sidebar-colored', [HomeController::class, 'indexSidebarColored']);

Route::get('/chat', [HomeController::class, 'chat']);
Route::get('/email', [HomeController::class, 'email']);
Route::get('/calendar', [HomeController::class, 'calendar']);

Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/profile-billing', [HomeController::class, 'profileBilling']);
Route::get('/profile-payment', [HomeController::class, 'profilePayment']);
Route::get('/profile-social', [HomeController::class, 'profileSocial']);
Route::get('/profile-notification', [HomeController::class, 'profileNotification']);
Route::get('/profile-setting', [HomeController::class, 'profileSetting']);

Route::get('/blog', [HomeController::class, 'blog']);

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