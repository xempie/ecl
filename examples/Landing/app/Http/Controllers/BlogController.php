<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function show($title)
    {
        $blogs = [
            [
                'id' => 1,
                'img' => 'assets/images/blog/01.jpg',
                'title' => 'Design your apps in your own way',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'data' => ".3s",
            ],
            [
                'id' => 2,
                'img' => 'assets/images/blog/02.jpg',
                'title' => 'How apps is changing the IT world',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'data' => ".5s",
            ],
            [
                'id' => 3,
                'img' => 'assets/images/blog/03.jpg',
                'title' => 'Smartest Applications for Business',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
                'data' => ".7s",
            ],
            [
                'id' => 4,
                'img' => 'assets/images/nft/items/21.jpg',
                'title' => 'Mindfulness Activities for Kids & Toddlers with NFT',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 5,
                'img' => 'assets/images/nft/items/22.jpg',
                'title' => 'Save Thousands Of Lives Through This NFT',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 6,
                'img' => 'assets/images/nft/items/23.jpg',
                'title' => 'A place where technology meets craftsmanship',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 7,
                'img' => 'assets/images/hotel/b1.jpg',
                'title' => 'Design your apps in your own ways',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 8,
                'img' => 'assets/images/hotel/b2.jpg',
                'title' => 'How apps is changing the IT worlds',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 9,
                'img' => 'assets/images/hotel/b3.jpg',
                'title' => 'Smartest Applications for Businesss',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 10,
                'img' => 'assets/images/cafe/b1.jpg',
                'title' => 'Best Coffee Shops In The State You Should Know',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 11,
                'img' => 'assets/images/cafe/b2.jpg',
                'title' => 'The Culture And Coffee Customs Nowadays',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 12,
                'img' => 'assets/images/cafe/b3.jpg',
                'title' => 'Best Cup Of Drinks For Your Break Today',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 13,
                'img' => 'assets/images/gym/blog1.jpg',
                'title' => 'How to Maximize Time Spent at the Gym',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 14,
                'img' => 'assets/images/gym/blog2.jpg',
                'title' => 'Today is the Best Day to Start Training',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 15,
                'img' => 'assets/images/gym/blog3.jpg',
                'title' => 'Simple Condition for all Around Fitness',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 16,
                'img' => 'assets/images/spa/b1.jpg',
                'title' => 'Hiking for health in Peru',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 17,
                'img' => 'assets/images/spa/b2.jpg',
                'title' => 'Sisley Spa opens at Miramar',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 18,
                'img' => 'assets/images/spa/b3.jpg',
                'title' => 'Top 5 Tips for Choosing a Day Spa',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 19,
                'img' => 'assets/images/cleaner/1.jpg',
                'title' => 'Design your app in your own way',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 20,
                'img' => 'assets/images/cleaner/2.jpg',
                'title' => 'How app is changing the IT world',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 21,
                'img' => 'assets/images/cleaner/3.jpg',
                'title' => 'Smartest Application for Business',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 22,
                'img' => 'assets/images/solar/project/7.jpg',
                'title' => 'ReNew’s Solar Manufacturing Plant: Setting in Sustainable Innovation',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 23,
                'img' => 'assets/images/solar/project/8.jpg',
                'title' => 'Women Empowerment: Key to Addressing Climate Change',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 24,
                'img' => 'assets/images/solar/project/9.jpg',
                'title' => 'ReNew Solar Manufacturing: Fueling Global Decarbonization Dreams',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 25,
                'img' => 'assets/images/blog/04.jpg',
                'title' => 'Mobile Marketing, Its Synthes and 2025 Offer Prognosis',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 26,
                'img' => 'assets/images/blog/05.jpg',
                'title' => 'Stop Worrying About Deadlines! We Got You Covered',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 27,
                'img' => 'assets/images/blog/06.jpg',
                'title' => 'Change Your Strategy: Find a Business Consultant',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 28,
                'img' => 'assets/images/blog/07.jpg',
                'title' => 'Everything About Financial Modeling',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 29,
                'img' => 'assets/images/blog/08.jpg',
                'title' => 'On the other hand we provide denounce',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 30,
                'img' => 'assets/images/blog/09.jpg',
                'title' => 'How app is changing the IT worlds',
                'groups' => '["tech"]',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 31,
                'img' => 'assets/images/blog/10.jpg',
                'title' => 'Smartest Application for Busines',
                'groups' => '["tech"]',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 32,
                'img' => 'assets/images/blog/11.jpg',
                'title' => 'Stop Worrying Abouts Deadlines! We Got You Covered',
                'groups' => '["tech"]',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 33,
                'img' => 'assets/images/blog/12.jpg',
                'title' => 'Change Your Strategy: Find a Business Consultants',
                'groups' => '["lifestyle"]',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 34,
                'img' => 'assets/images/food/blog/1.jpg',
                'title' => 'Everything About Financial Modelings',
                'groups' => '["food"]',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 35,
                'img' => 'assets/images/blog/13.jpg',
                'title' => 'On the other hand we provide denounces',
                'groups' => '["lifestyle"]',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 36,
                'img' => 'assets/images/blog/14.jpg',
                'title' => 'Design your apps in yours own way',
                'groups' => '["business"]',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 37,
                'img' => 'assets/images/food/blog/2.jpg',
                'title' => 'How apps is changings the IT world',
                'groups' => '["food"]',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 38,
                'img' => 'assets/images/blog/02.jpg',
                'title' => 'Take a break through the countryside',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 39,
                'img' => 'assets/images/blog/03.jpg',
                'title' => 'These 10 sea destinations are surprises',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 40,
                'img' => 'assets/images/blog/04.jpg',
                'title' => 'A photographer perfect day in Colorado',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 41,
                'img' => 'assets/images/blog/05.jpg',
                'title' => 'This is the world most beautiful beach',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 42,
                'img' => 'assets/images/blog/06.jpg',
                'title' => 'Travel will change you for the better',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 43,
                'img' => 'assets/images/blog/07.jpg',
                'title' => 'Greek beyond Athene: Where to go next',
                'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
            ],
            [
                'id' => 44,
                'img' => 'assets/images/blog/08.jpg',
                'title' => 'This mountain will make you reborn',
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

        // Return the view and pass the blog data to the view
        return view('blog-detail', compact('item'));
    }
}