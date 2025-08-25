<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function show($title)
    {
        $properties = [
            [
                'id' => 1,
                'img' => 'assets/images/real/property/1.jpg',
                'title' => '10765 Hillshire Ave, Baton Rouge, LA 70810, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/real/property/2.jpg',
                'title' => '59345 STONEWALL DR, Plaquemine, LA 70764, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/real/property/3.jpg',
                'title' => '3723 SANDBAR DR, Addis, LA 70710, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/real/property/4.jpg',
                'title' => 'Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/real/property/5.jpg',
                'title' => '710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/real/property/6.jpg',
                'title' => '5133 MCLAIN WAY, Baton Rouge, LA 70809, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/real/property/7.jpg',
                'title' => '2141 Fiero Street, Baton Rouge, LA 70808',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/real/property/8.jpg',
                'title' => '9714 Inniswold Estates Ave, Baton Rouge, LA 70809',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/real/property/9.jpg',
                'title' => '1433 Beckenham Dr, Baton Rouge, LA 70808, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/real/property/10.jpg',
                'title' => '1574 Sharlo Ave, Baton Rouge, LA 70820, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/real/property/11.jpg',
                'title' => '2528 BOCAGE LAKE DR, Baton Rouge, LA 70809, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ],
            [
                'id' => 12,
                'img' => 'assets/images/real/property/12.jpg',
                'title' => '1533 NICHOLSON DR, Baton Rouge, LA 70802, USA',
                'sqf' => '8000sqf',
                'beds' => '4 Beds',
                'baths' => '4 Baths',
                'price' => '$5000',
                'rating' => '5.0(30)',
            ]
        ];

        // Find the course by ID
        $item = collect($properties)->first(function ($propertie) use ($title) {
            return Str::slug($propertie['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('property-detail', compact('item'));
    }
}