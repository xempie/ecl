<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function show(Request $request, $title)
    {
        $blogs = [
            [
                'id' => 1,
                'img' => 'assets/images/blog/01.jpg',
                'title' => 'Design your apps in your own way',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 2,
                'img' => 'assets/images/blog/02.jpg',
                'title' => 'How apps is changing the IT world',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 3,
                'img' => 'assets/images/blog/03.jpg',
                'title' => 'Smartest Applications for Business',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 4,
                'img' => 'assets/images/blog/04.jpg',
                'title' => 'Mobile Marketing, Its Synthes and 2025 Offer Prognosis',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 5,
                'img' => 'assets/images/blog/05.jpg',
                'title' => 'Stop Worrying About Deadlines! We Got You Covered',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 6,
                'img' => 'assets/images/blog/06.jpg',
                'title' => 'Change Your Strategy: Find a Business Consultant',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 7,
                'img' => 'assets/images/blog/07.jpg',
                'title' => 'Everything About Financial Modeling',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 8,
                'img' => 'assets/images/blog/08.jpg',
                'title' => 'On the other hand we provide denounce',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ]
        ];

        // Find the blog by ID
        $item = collect($blogs)->first(function ($blog) use ($title) {
            return Str::slug($blog['title']) === $title;
        });

        // If blog not found, return 404 error
        if (!$item) {
            abort(404);
        }

        $Spage = $request->query('spage', 'side');

        // Return the view and pass the blog data to the view
        return view('blog-detail', compact('item', 'Spage'));
    }
}