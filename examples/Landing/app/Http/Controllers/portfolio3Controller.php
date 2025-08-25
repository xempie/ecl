<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class portfolio3Controller extends Controller
{
    public function show($title)
    {
        $portfolios = [
            [
                'id' => 1,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'Mockup Collection',
                'name' => 'Abstract',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/portfolio/2.jpg',
                'title' => 'The Landscape House',
                'name' => 'Abstract',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/portfolio/3.jpg',
                'title' => 'New Build Family Home',
                'name' => 'Abstract',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'Private and Social Apartments',
                'name' => 'Abstract',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'Apartment Complex',
                'name' => 'Abstract',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/portfolio/6.jpg',
                'title' => 'Construction Engineering',
                'name' => 'Abstract',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/portfolio/7.jpg',
                'title' => 'The Blue Canton',
                'name' => 'Abstract',
                'groups' => '["designing"]',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'The Chrysler',
                'name' => 'Abstract',
                'groups' => '["development"]',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/portfolio/20.jpg',
                'title' => 'Purple Flatiron',
                'name' => 'Abstract',
                'groups' => '["photography"]',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/portfolio/21.jpg',
                'title' => 'Rustic Reunion',
                'name' => 'Abstract',
                'groups' => '["photography"]',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/portfolio/22.jpg',
                'title' => 'The Donald',
                'name' => 'Abstract',
                'groups' => '["branding"]',
            ],
            [
                'id' => 12,
                'img' => 'assets/images/portfolio/23.jpg',
                'title' => 'Red Tiny Hearst',
                'name' => 'Abstract',
                'groups' => '["branding"]',
            ]
        ];

        // Find the course by ID
        $item = collect($portfolios)->first(function ($portfolio) use ($title) {
            return Str::slug($portfolio['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('portfolio-detail-three', compact('item'));
    }
}