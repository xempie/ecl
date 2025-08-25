@php
$sellers = [
    [
        'img' => 'assets/images/client/01.jpg',
        'title' => 'Robb Store',
        'items' => '450+ Items',
        'ratings' => '4.9(450)',
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'title' => 'Glowify',
        'items' => '320+ Items',
        'ratings' => '4.7(320)',
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'title' => 'ShopFusion',
        'items' => '487+ Items',
        'ratings' => '4.4(487)',
    ],
    [
        'img' => 'assets/images/client/04.jpg',
        'title' => 'TrendTrove',
        'items' => '564+ Items',
        'ratings' => '4.2(564)',
    ],
    [
        'img' => 'assets/images/client/05.jpg',
        'title' => 'EcomGrove',
        'items' => '452+ Items',
        'ratings' => '4.1(452)',
    ],
    [
        'img' => 'assets/images/client/06.jpg',
        'title' => 'SwiftCart',
        'items' => '785+ Items',
        'ratings' => '4.1(785)',
    ]
];
@endphp

@foreach ($sellers as $item)
    <tr class="border-t border-gray-100 dark:border-gray-800">
        <td class="px-4 py-3 text-start">
            <a href="" class="flex items-center hover:text-indigo-600">
                <img src="{{ asset($item['img']) }}" class="rounded-full shadow-sm dark:shadow-gray-700 size-8" alt="">
                <span class="ms-2">
                    <span class="block font-semibold">{{ $item['title'] }}</span>
                </span>
            </a>
        </td>

        <td class="px-4 py-3 text-center">
            <div>
                <a href="" class="bg-indigo-600 hover:bg-indigo-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Clothes</a>
                <a href="" class="bg-indigo-600 hover:bg-indigo-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Tools</a>
                <a href="" class="bg-indigo-600 hover:bg-indigo-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Bags</a>
            </div>
        </td>
        <td class="px-4 py-3 text-center">{{ $item['items'] }}</td>
        <td class="px-4 py-3 text-end font-semibold"><i class="mdi mdi-star text-amber-400"></i> {{ $item['ratings'] }}</td>
    </tr>
@endforeach