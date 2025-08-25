<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class portfolio2Controller extends Controller
{
    public function show($title)
    {
        $portfolios = [
            [
                'id' => 1,
                'img' => 'assets/images/portfolio/10.jpg',
                'title' => 'Iphone mockup',
                'name' => 'Branding',
                'groups' => '["branding"]',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/portfolio/2.jpg',
                'title' => 'The Blue Canton',
                'name' => 'Branding',
                'groups' => '["designing"]',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/portfolio/11.jpg',
                'title' => 'The Chrysler',
                'name' => 'Branding',
                'groups' => '["photography"]',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/portfolio/13.jpg',
                'title' => 'Purple Flatiron',
                'name' => 'Branding',
                'groups' => '["branding"]',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/portfolio/6.jpg',
                'title' => 'Rustic Reunion',
                'name' => 'Branding',
                'groups' => '["branding"]',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/portfolio/7.jpg',
                'title' => 'The Red Freedom',
                'name' => 'Branding',
                'groups' => '["designing"]',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/portfolio/14.jpg',
                'title' => 'The Donald',
                'name' => 'Branding',
                'groups' => '["development"]',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/12.jpg',
                'title' => 'Red Tiny Hearst',
                'name' => 'Branding',
                'groups' => '["development"]',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'List of benifits',
                'name' => 'Branding',
                'groups' => '["development"]',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/portfolio/9.jpg',
                'title' => 'listio properties',
                'name' => 'Branding',
                'groups' => '["development"]',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'says about',
                'name' => 'Branding',
                'groups' => '["branding"]',
            ],
            [
                'id' => 12,
                'img' => 'assets/images/portfolio/15.jpg',
                'title' => 'listio propertie',
                'name' => 'Branding',
                'groups' => '["designing"]',
            ],
            [
                'id' => 13,
                'img' => 'assets/images/portfolio/16.jpg',
                'title' => 'say abouts',
                'name' => 'Branding',
                'groups' => '["development"]',
            ],
            [
                'id' => 14,
                'img' => 'assets/images/portfolio/3.jpg',
                'title' => 'The Blue Cantons',
                'name' => 'Branding',
            ],
            [
                'id' => 15,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'The Projects',
                'name' => 'Branding',
            ],
            [
                'id' => 16,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'The Brand',
                'name' => 'Branding',
            ],
            [
                'id' => 17,
                'img' => 'assets/images/portfolio/20.jpg',
                'title' => 'Latest Projects',
                'name' => 'Branding',
            ],
            [
                'id' => 18,
                'img' => 'assets/images/portfolio/21.jpg',
                'title' => 'The Book',
                'name' => 'Branding',
            ],
            [
                'id' => 19,
                'img' => 'assets/images/portfolio/22.jpg',
                'title' => 'coffee',
                'name' => 'Branding',
            ],
            [
                'id' => 20,
                'img' => 'assets/images/portfolio/23.jpg',
                'title' => 'The Leafs',
                'name' => 'Branding',
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
        return view('portfolio-detail-two', compact('item'));
    }
}