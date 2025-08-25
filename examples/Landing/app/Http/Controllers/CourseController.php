<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function show($title)
    {
        $courses = [
            [
                'id' => 1,
                'img' => 'assets/images/course/c1.jpg',
                'img1' => 'assets/images/client/01.jpg',
                'name' => 'Calvin Carlo',
                'work' => 'Professor',
                'name1' => 'Digital Marketing',
                'title' => 'Starting SEO as your Home Based Business',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 2,
                'img' => 'assets/images/course/c2.jpg',
                'img1' => 'assets/images/client/02.jpg',
                'name' => 'Christa Smith',
                'work' => 'Professor',
                'name1' => 'Engineering',
                'title' => 'Java Programming Masterclass for Software',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 3,
                'img' => 'assets/images/course/c3.jpg',
                'img1' => 'assets/images/client/03.jpg',
                'name' => 'Jani Jangad',
                'work' => 'Professor',
                'name1' => 'Engineering',
                'title' => 'Microsoft Excel - Excel from Beginner to Advanced',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 4,
                'img' => 'assets/images/course/c4.jpg',
                'img1' => 'assets/images/client/04.jpg',
                'name' => 'John Cartwright',
                'work' => 'Professor',
                'name1' => 'Web Development',
                'title' => 'Vue - The Complete Guide (w/ Router, Composition API)',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 5,
                'img' => 'assets/images/course/c5.jpg',
                'img1' => 'assets/images/client/05.jpg',
                'name' => 'Sally Short',
                'work' => 'Professor',
                'name1' => 'Front-end Design',
                'title' => 'HTML, CSS, Javascripts, and Basic Knowledge about web design',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 6,
                'img' => 'assets/images/course/c6.jpg',
                'img1' => 'assets/images/client/06.jpg',
                'name' => 'William Benson',
                'work' => 'Professor',
                'name1' => 'Back-end Development',
                'title' => 'C Programming For Beginners - Master the C Language',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 7,
                'img' => 'assets/images/course/c7.jpg',
                'img1' => 'assets/images/client/02.jpg',
                'name' => 'Christa Smith',
                'work' => 'Professor',
                'name1' => 'Engineering',
                'title' => 'Java Programming Masterclass for Softwares',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 8,
                'img' => 'assets/images/course/c8.jpg',
                'img1' => 'assets/images/client/03.jpg',
                'name' => 'Jani Jangad',
                'work' => 'Professor',
                'name1' => 'Engineering',
                'title' => 'Microsoft Excels - Excel from Beginner to Advanced',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 9,
                'img' => 'assets/images/course/c9.jpg',
                'img1' => 'assets/images/client/04.jpg',
                'name' => 'John Cartwright',
                'work' => 'Professor',
                'name1' => 'Web Development',
                'title' => 'Vue - The Complete Guides (w/ Router, Composition API)',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ],
            [
                'id' => 10,
                'img' => 'assets/images/course/c10.jpg',
                'img1' => 'assets/images/client/05.jpg',
                'name' => 'Sally Short',
                'work' => 'Professor',
                'name1' => 'Front-end Design',
                'title' => 'HTML, CSS, Javascripts, and Basic Knowledges about web design',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'lectures' => "25 Lectures",
                'time' => "1h 30m",
                'see' => "3012",
                'price' => "$11",
            ]
        ];

        // Find the course by ID
        $item = collect($courses)->first(function ($course) use ($title) {
            return Str::slug($course['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('course-detail', compact('item'));
    }
}