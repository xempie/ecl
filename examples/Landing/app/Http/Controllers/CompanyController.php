<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    public function show($title)
    {
        $companies = [
            [
                'id' => 1,
                'img' => 'assets/images/client/circle-logo.png',
                'title' => 'CircleCI',
                'location' => 'U.S.A.',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/client/android.png',
                'title' => 'Android',
                'location' => 'Australia',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/client/facebook-logo-2019.png',
                'title' => 'Facebook',
                'location' => 'America',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/client/google-logo.png',
                'title' => 'Google',
                'location' => 'Canada',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/client/lenovo-logo.png',
                'title' => 'Lenovo',
                'location' => 'India',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/client/linkedin.png',
                'title' => 'Linkedin',
                'location' => 'Greece',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/client/shree-logo.png',
                'title' => 'Shreethemes',
                'location' => 'Germany',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/client/skype.png',
                'title' => 'Skype',
                'location' => 'Australia',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/client/snapchat.png',
                'title' => 'Snapchat',
                'location' => 'America',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/client/spotify.png',
                'title' => 'Spotify',
                'location' => 'Canada',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/client/telegram.png',
                'title' => 'Telegram',
                'location' => 'India',
            ],
            [
                'id' => 12,
                'img' => 'assets/images/client/whatsapp.png',
                'title' => 'Whatsapp',
                'location' => 'India',
            ]
        ];

        // Find the companie by ID
        $item = collect($companies)->first(function ($companie) use ($title) {
            return Str::slug($companie['title']) === $title;
        });

        // If companie not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the companie data to the view
        return view('page-job-company-detail', compact('item'));
    }
}