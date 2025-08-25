<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageJobController extends Controller
{
    public function show($title)
    {
        $jobs = [
            [
                'id' => 1,
                'img' => 'assets/images/client/facebook-logo-2019.png',
                'title' => 'Software Engineering',
                'name' => "Facebook Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Full Time",
                'price' => "$950 - $1100/mo",
                'location' => "Australia",
            ],
            [
                'id' => 2,
                'img' => 'assets/images/client/google-logo.png',
                'title' => 'Web Developer',
                'name' => "Google Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Remote",
                'price' => "$2500 - $2600/mo",
                'location' => "America",
            ],
            [
                'id' => 3,
                'img' => 'assets/images/client/linkedin.png',
                'title' => 'UX/UI Designer',
                'name' => "Linkedin Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Freelance",
                'price' => "$3500 - $3600/mo",
                'location' => "Canada",
            ],
            [
                'id' => 4,
                'img' => 'assets/images/client/skype.png',
                'title' => 'Human Resource(HR)',
                'name' => "Skype Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Part Time",
                'price' => "$2000 - $2500/mo",
                'location' => "UK",
            ],
            [
                'id' => 5,
                'img' => 'assets/images/client/spotify.png',
                'title' => 'Web Designer',
                'name' => "Spotify Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Full Time",
                'price' => "$1500 - $1600/mo",
                'location' => "China",
            ],
            [
                'id' => 6,
                'img' => 'assets/images/client/telegram.png',
                'title' => 'Graphic Designer',
                'name' => "Telegram Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Part Time",
                'price' => "$500 - $600/mo",
                'location' => "India",
            ],
            [
                'id' => 7,
                'img' => 'assets/images/client/circle-logo.png',
                'title' => 'Senior Web Developer',
                'name' => "Circle CI Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Full Time",
                'price' => "$950 - $1100/mo",
                'location' => "Australia",
            ],
            [
                'id' => 8,
                'img' => 'assets/images/client/lenovo-logo.png',
                'title' => 'Front-End Developer',
                'name' => "Lenovo Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Remote",
                'price' => "$2500 - $2600/mo",
                'location' => "America",
            ],
            [
                'id' => 9,
                'img' => 'assets/images/client/shree-logo.png',
                'title' => 'Back-End Developer',
                'name' => "Shreethemes Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Freelance",
                'price' => "$3500 - $3600/mo",
                'location' => "Canada",
            ],
            [
                'id' => 10,
                'img' => 'assets/images/client/snapchat.png',
                'title' => 'Data Entry',
                'name' => "Snapchat Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Part Time",
                'price' => "$2000 - $2500/mo",
                'location' => "UK",
            ],
            [
                'id' => 11,
                'img' => 'assets/images/client/android.png',
                'title' => 'Android Developer',
                'name' => "Android Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Full Time",
                'price' => "$1500 - $1600/mo",
                'location' => "China",
            ],
            [
                'id' => 12,
                'img' => 'assets/images/client/shree-logo.png',
                'title' => 'Sketch Designer',
                'name' => "Shreethemes Ltd.",
                'days' => "Posted 3 Days ago",
                'time' => "Part Time",
                'price' => "$500 - $600/mo",
                'location' => "India",
            ]
        ];

        // Find the course by ID
        $item = collect($jobs)->first(function ($job) use ($title) {
            return Str::slug($job['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('page-job-detail', compact('item'));
    }
}