<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class portfolio1Controller extends Controller
{
    public function show($title)
    {
        $projects = [
            [
                'id' => 1,
                'img' => 'assets/images/construction/1.jpg',
                'title' => 'Serenity Apartments',
                'name' => "Branding",
            ],
            [
                'id' => 2,
                'img' => 'assets/images/construction/2.jpg',
                'title' => 'The Landscape House',
                'name' => "Mockup",
            ],
            [
                'id' => 3,
                'img' => 'assets/images/construction/3.jpg',
                'title' => 'New Build Family Home',
                'name' => "Abstract",
            ],
            [
                'id' => 4,
                'img' => 'assets/images/construction/4.jpg',
                'title' => 'Private and Social Apartments',
                'name' => "Books",
            ],
            [
                'id' => 5,
                'img' => 'assets/images/construction/5.jpg',
                'title' => 'Apartment Complex',
                'name' => "V-card",
            ],
            [
                'id' => 6,
                'img' => 'assets/images/construction/6.jpg',
                'title' => 'Construction Engineering',
                'name' => "Photography",
            ],
            [
                'id' => 7,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'Mockup Collection',
                'name' => "Abstract",
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/2.jpg',
                'title' => 'The Blue Canton',
                'name' => "Abstract",
            ],
            [
                'id' => 9,
                'img' => 'assets/images/portfolio/3.jpg',
                'title' => 'The Chrysler',
                'name' => "Abstract",
            ],
            [
                'id' => 10,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'Purple Flatiron',
                'name' => "Abstract",
            ],
            [
                'id' => 11,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'Rustic Reunion',
                'name' => "Abstract",
            ],
            [
                'id' => 12,
                'img' => 'assets/images/portfolio/6.jpg',
                'title' => 'The Red Freedom',
                'name' => "Abstract",
            ],
            [
                'id' => 13,
                'img' => 'assets/images/portfolio/7.jpg',
                'title' => 'The Donald',
                'name' => "Abstract",
            ],
            [
                'id' => 14,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'Red Tiny Hearst',
                'name' => "Abstract",
            ],
            [
                'id' => 15,
                'img' => 'assets/images/portfolio/01.jpg',
                'title' => 'Iphone mockup',
                'name' => 'Branding',
                'groups' => '["branding"]',
            ],
            [
                'id' => 16,
                'img' => 'assets/images/portfolio/02.jpg',
                'title' => 'Mockup Collections',
                'name' => 'Mockup',
                'groups' => '["designing"]',
            ],
            [
                'id' => 17,
                'img' => 'assets/images/portfolio/03.jpg',
                'title' => 'Abstract images',
                'name' => 'Abstract',
                'groups' => '["photography"]',
            ],
            [
                'id' => 18,
                'img' => 'assets/images/portfolio/04.jpg',
                'title' => 'Yellow bg with Books',
                'name' => 'Books',
                'groups' => '["development"]',
            ],
            [
                'id' => 19,
                'img' => 'assets/images/portfolio/05.jpg',
                'title' => 'Company V-card',
                'name' => 'V-card',
                'groups' => '["branding"]',
            ],
            [
                'id' => 20,
                'img' => 'assets/images/portfolio/06.jpg',
                'title' => 'Mockup box with paints',
                'name' => 'Photography',
                'groups' => '["branding"]',
            ],
            [
                'id' => 21,
                'img' => 'assets/images/portfolio/07.jpg',
                'title' => 'Coffee cup',
                'name' => 'Cups',
                'groups' => '["designing"]',
            ],
            [
                'id' => 22,
                'img' => 'assets/images/portfolio/08.jpg',
                'title' => 'Pen and article',
                'name' => 'Article',
                'groups' => '["development"]',
            ],
            [
                'id' => 23,
                'img' => 'assets/images/portfolio/09.jpg',
                'title' => 'White mockup box',
                'name' => 'Color',
                'groups' => '["photography"]',
            ],
            [
                'id' => 24,
                'img' => 'assets/images/portfolio/010.jpg',
                'title' => 'Logo Vectors',
                'name' => 'Logos',
                'groups' => '["photography"]',
            ],
            [
                'id' => 25,
                'img' => 'assets/images/portfolio/011.jpg',
                'title' => 'Black and white T-shirt',
                'name' => 'Clothes',
                'groups' => '["branding"]',
            ],
            [
                'id' => 26,
                'img' => 'assets/images/portfolio/012.jpg',
                'title' => 'Yellow bg with cellphone',
                'name' => 'Cellphone',
                'groups' => '["branding"]',
            ]
        ];

        // Find the course by ID
        $item = collect($projects)->first(function ($project) use ($title) {
            return Str::slug($project['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('portfolio-detail-one', compact('item'));
    }
}