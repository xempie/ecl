@php
$products = [
    [
        'img' => 'assets/images/shop/items/s7.jpg',
        'title' => 'Headphone',
        'price' => '$120',
        'stock' => '345',
        'orders' => '60',
    ],
    [
        'img' => 'assets/images/shop/items/s8.jpg',
        'title' => 'Ladies Purse',
        'price' => '$450',
        'stock' => '600',
        'orders' => '48',
    ],
    [
        'img' => 'assets/images/shop/items/s13.jpg',
        'title' => 'Wooden Chairs',
        'price' => '$500',
        'stock' => '350',
        'orders' => '46',
    ],
    [
        'img' => 'assets/images/shop/items/s14.jpg',
        'title' => 'Laptop Clarks',
        'price' => '$650',
        'stock' => '780',
        'orders' => '40',
    ],
    [
        'img' => 'assets/images/shop/items/s5.jpg',
        'title' => 'Ladies Top',
        'price' => '$45',
        'stock' => '550',
        'orders' => '39',
    ],
    [
        'img' => 'assets/images/shop/items/s6.jpg',
        'title' => 'Ladies Crop',
        'price' => '$69',
        'stock' => '80',
        'orders' => '35',
    ]
];
@endphp

@foreach ($products as $item)
    <tr class="border-t border-gray-100 dark:border-gray-800">
        <td class="px-4 py-3 text-start">
            <span class="flex items-center">
                <img src="{{ asset($item['img']) }}" class="rounded shadow-sm dark:shadow-gray-700 w-10" alt="">
                <span class="ms-3">
                    <span class="block font-semibold">{{ $item['title'] }}</span>
                </span>
            </span>
        </td>

        <td class="px-4 py-3 text-center">{{ $item['price'] }}</td>
        <td class="px-4 py-3 text-center">{{ $item['stock'] }}</td>
        <td class="px-4 py-3 text-end">{{ $item['orders'] }}</td>
    </tr>
@endforeach