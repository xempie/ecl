@php
$orders = [
    [
        'img' => 'assets/images/shop/items/s1.jpg',
        'title' => 'Men T-shirt',
        'date' => '6th Aug',
        'qty' => '1',
        'price' => '$59',
        'status' => 'Completed',
        'payment' => 'Paid',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/shop/items/s2.jpg',
        'title' => 'School Bag',
        'date' => '6th Aug',
        'qty' => '1',
        'price' => '$46',
        'status' => 'Completed',
        'payment' => 'Unpaid',
        'style' => 'text-red-600',
    ],
    [
        'img' => 'assets/images/shop/items/s3.jpg',
        'title' => 'Luxurius Watch',
        'date' => '6th Aug',
        'qty' => '1',
        'price' => '$299',
        'status' => 'Completed',
        'payment' => 'Paid',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/shop/items/s4.jpg',
        'title' => 'Laptop Bag',
        'date' => '6th Aug',
        'qty' => '1',
        'price' => '$109',
        'status' => 'Completed',
        'payment' => 'Paid',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/shop/items/s5.jpg',
        'title' => 'Ladies Top',
        'date' => '6th Aug',
        'qty' => '1',
        'price' => '$69',
        'status' => 'Completed',
        'payment' => 'Paid',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/shop/items/s6.jpg',
        'title' => 'Ladies Crop',
        'date' => '6th Aug',
        'qty' => '1',
        'price' => '$79',
        'status' => 'Completed',
        'payment' => 'Paid',
        'style' => 'text-emerald-600',
    ]
];
@endphp

@foreach ($orders as $item)
    <tr class="border-t border-gray-100 dark:border-gray-800">
        <td class="px-4 py-3 text-start">
            <span class="flex items-center">
                <img src="{{ asset($item['img']) }}" class="rounded shadow-sm dark:shadow-gray-700 w-10" alt="">
                <span class="ms-3">
                    <span class="block font-semibold">{{ $item['title'] }}</span>
                </span>
            </span>
        </td>

        <td class="px-4 py-3 text-center">{{ $item['date'] }}</td>
        <td class="px-4 py-3 text-center">{{ $item['qty'] }}</td>
        <td class="px-4 py-3 text-center">{{ $item['price'] }}</td>
        <td class="px-4 py-3 text-center">{{ $item['status'] }}</td>
        <td class="px-4 py-3 text-end font-semibold {{ $item['style'] }}">{{ $item['payment'] }}</td>
    </tr>
@endforeach