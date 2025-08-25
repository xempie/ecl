<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobController extends Controller
{
    public function show($title)
    {
        $candidates = [
            [
                'id' => 1,
                'img' => 'assets/images/client/01.jpg',
                'title' => 'Calvin Carlo',
                'name' => 'Web Designer',
                'location' => 'India',
                'price' => '3300/mo',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/client/02.jpg',
                'title' => 'Steven Townsend',
                'name' => 'Web Designer',
                'location' => 'London',
                'price' => '3300/mo',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/client/03.jpg',
                'title' => 'Tiffany Betancourt',
                'name' => 'Web Designer',
                'location' => 'India',
                'price' => '3300/mo',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/client/04.jpg',
                'title' => 'Jacqueline Burns',
                'name' => 'Web Designer',
                'location' => 'London',
                'price' => '3300/mo',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/client/05.jpg',
                'title' => 'Mari Harrington',
                'name' => 'Web Designer',
                'location' => 'India',
                'price' => '3300/mo',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/client/06.jpg',
                'title' => 'Floyd Glasgow',
                'name' => 'Web Designer',
                'location' => 'London',
                'price' => '3300/mo',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/client/07.jpg',
                'title' => 'Donna Schultz',
                'name' => 'Web Designer',
                'location' => 'India',
                'price' => '3300/mo',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/client/08.jpg',
                'title' => 'Joshua Morris',
                'name' => 'Web Designer',
                'location' => 'London',
                'price' => '3300/mo',
            ]
        ];

        // Find the candidate by ID
        $item = collect($candidates)->first(function ($candidate) use ($title) {
            return Str::slug($candidate['title']) === $title;
        });

        // If candidate not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the candidate data to the view
        return view('page-job-candidate-detail', compact('item'));
    }
}