<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public function show($title)
    {
        $products = [
            [
                'id' => 1,
                'img' => 'assets/images/shop/items/s1.jpg',
                'title' => 'Branded T-Shirt',
                'price' => '$16.00',
                'tag' => 'New',
                'style' => 'bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/shop/items/s2.jpg',
                'title' => 'Shopping Bag',
                'price' => '$16.00',
                'tag' => 'Featured',
                'style' => 'bg-green-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/shop/items/s3.jpg',
                'title' => 'Elegent Watch',
                'price' => '$16.00',
                'tag' => 'false',
                'style' => '',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/shop/items/s4.jpg',
                'title' => 'Casual Shoes',
                'price' => '$16.00',
                'tag' => 'false',
                'style' => '',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/shop/items/s5.jpg',
                'title' => 'Earphones',
                'price' => '$16.00',
                'tag' => 'New',
                'style' => 'bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/shop/items/s6.jpg',
                'title' => 'Elegent Mug',
                'price' => '$16.00',
                'tag' => 'false',
                'style' => '',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/shop/items/s7.jpg',
                'title' => 'Sony Headphones',
                'price' => '$16.00',
                'tag' => 'false',
                'style' => '',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/shop/items/s8.jpg',
                'title' => 'Wooden Stools',
                'price' => '$16.00',
                'tag' => 'Sale',
                'style' => 'bg-blue-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/shop/items/s9.jpg',
                'title' => 'Branded T-Shirts',
                'price' => '$16.00',
                'tag' => 'Popular',
                'style' => 'bg-cyan-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/shop/items/s10.jpg',
                'title' => 'Shopping Bags',
                'price' => '$16.00',
                'tag' => 'Popular',
                'style' => 'bg-cyan-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/shop/items/s11.jpg',
                'title' => 'Sports Shoes',
                'price' => '$16.00',
                'tag' => 'Popular',
                'style' => 'bg-cyan-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
            ],
            [
                'id' => 12,
                'img' => 'assets/images/shop/items/s12.jpg',
                'title' => 'T-shirt',
                'price' => '$16.00',
                'tag' => 'Popular',
                'style' => 'bg-cyan-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
            ],
            [
                'id' => 13,
                'img' => 'assets/images/shop/items/s13.jpg',
                'title' => 'Wooden Chair',
                'price' => '$16.00',
            ],
            [
                'id' => 14,
                'img' => 'assets/images/shop/items/s14.jpg',
                'title' => 'Women Block Heels',
                'price' => '$16.00',
            ],
            [
                'id' => 15,
                'img' => 'assets/images/shop/items/s15.jpg',
                'title' => 'Shorts',
                'price' => '$16.00',
            ],
            [
                'id' => 16,
                'img' => 'assets/images/shop/items/s16.jpg',
                'title' => 'Masks',
                'price' => '$16.00',
            ]
        ];

        // Find the product by ID
        $item = collect($products)->first(function ($product) use ($title) {
            return Str::slug($product['title']) === $title;
        });

        // If product not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the product data to the view
        return view('shop-item-detail', compact('item'));
    }
}