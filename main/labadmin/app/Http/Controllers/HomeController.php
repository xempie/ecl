<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('index', compact('Spage'));
    }

    public function indexCrypto(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('index-crypto', compact('Spage'));
    }

    public function indexEcommerce(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('index-ecommerce', compact('Spage'));
    }

    public function indexDark(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('index-dark', compact('Spage'));
    }

    public function indexRtl(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('index-rtl', compact('Spage'));
    }

    public function indexDarkRtl(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('index-dark-rtl', compact('Spage'));
    }
    
    public function indexSidebarLight(Request $request)
    {
        $Spage = $request->query('spage', 'side2');
        return view('index-sidebar-light', compact('Spage'));
    }
    
    public function indexSidebarColored(Request $request)
    {
        $Spage = $request->query('spage', 'side3');
        return view('index-sidebar-colored', compact('Spage'));
    }

    public function chat(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('chat', compact('Spage'));
    }
    
    public function email(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('email', compact('Spage'));
    }

    public function calendar(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('calendar', compact('Spage'));
    }

    public function profile(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('profile', compact('Spage'));
    }

    public function profileBilling(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('profile-billing', compact('Spage'));
    }

    public function profilePayment(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('profile-payment', compact('Spage'));
    }

    public function profileSocial(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('profile-social', compact('Spage'));
    }

    public function profileNotification(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('profile-notification', compact('Spage'));
    }

    public function profileSetting(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('profile-setting', compact('Spage'));
    }

    public function blog(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('blog', compact('Spage'));
    }

    public function blogDetail(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('blog-detail', compact('Spage'));
    }

    public function shop(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('shop', compact('Spage'));
    }

    public function shopItemDetail(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('shop-item-detail', compact('Spage'));
    }

    public function shopCart(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('shop-cart', compact('Spage'));
    }

    public function checkout(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('checkout', compact('Spage'));
    }

    public function galleryOne(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('gallery-one', compact('Spage'));
    }

    public function galleryTwo(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('gallery-two', compact('Spage'));
    }

    public function starter(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('starter', compact('Spage'));
    }

    public function faqs(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('faqs', compact('Spage'));
    }

    public function pricing(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('pricing', compact('Spage'));
    }

    public function team(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('team', compact('Spage'));
    }

    public function privacy(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('privacy', compact('Spage'));
    }

    public function terms(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('terms', compact('Spage'));
    }

    public function uiComponents(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('ui-components', compact('Spage'));
    }

    public function emailConfirmation()
    {
        return view('email-confirmation');  
    }

    public function emailPasswordReset()
    {
        return view('email-password-reset');  
    }

    public function emailAlert()
    {
        return view('email-alert');  
    }

    public function emailInvoices()
    {
        return view('email-invoices');  
    }
    
    public function invoiceList(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('invoice-list', compact('Spage'));
    }
    
    public function invoice(Request $request)
    {
        $Spage = $request->query('spage', 'side');
        return view('invoice', compact('Spage'));
    }

    public function authLogin()
    {
        return view('auth-login');  
    }

    public function authSignup()
    {
        return view('auth-signup');  
    }

    public function authSignupSuccess()
    {
        return view('auth-signup-success');  
    }

    public function authRePassword()
    {
        return view('auth-re-password');  
    }

    public function authLockScreen()
    {
        return view('auth-lock-screen');  
    }

    public function comingsoon()
    {
        return view('comingsoon');  
    }

    public function maintenance()
    {
        return view('maintenance');  
    }

    public function error()
    {
        return view('error');  
    }

    public function thankyou()
    {
        return view('thankyou');  
    }

}
