<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NftController extends Controller
{
    public function show($title)
    {
        $products = [
            [
                'id' => 1,
                'img' => 'assets/images/nft/items/1.jpg',
                'title' => 'Deep Sea Phantasy',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'true',
                'small' => 'auction-item-1',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/nft/items/2.jpg',
                'title' => 'CyberPrimal 042 LAN',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/nft/items/3.jpg',
                'title' => 'Crypto Egg Stamp #5',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/nft/items/4.jpg',
                'title' => 'Color Abstract Painting',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/nft/items/5.jpg',
                'title' => 'Liquid Forest Princess',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/nft/items/6.jpg',
                'title' => 'Spider Eyes Modern Art',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/nft/items/7.jpg',
                'title' => 'Synthwave Painting',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'true',
                'small' => 'auction-item-2',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/nft/items/8.jpg',
                'title' => 'Contemporary Abstract',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/nft/items/9.jpg',
                'title' => 'CyberPrimal 042 LANS',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
                'groups' => '["designing"]',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/nft/items/10.jpg',
                'title' => 'Crypto Egg Stamp #6',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
                'groups' => '["photography"]',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/nft/items/11.jpg',
                'title' => 'Color Abstract Paintings',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
                'groups' => '["development"]',
            ],
            [
                'id' => 12,
                'img' => 'assets/images/nft/items/12.jpg',
                'title' => 'Liquid Forest Princes',
                'name' => 'Place Bid',
                'ETH' => '20.5 ETH',
                'like' => '22',
                'span' => 'false',
                'small' => '',
                'groups' => '["branding"]',
            ]
        ];

        // Find the course by ID
        $item = collect($products)->first(function ($product) use ($title) {
            return Str::slug($product['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('nft-detail', compact('item'));
    }
}