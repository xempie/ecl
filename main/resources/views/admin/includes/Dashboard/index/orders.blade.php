@php
$orders = [
    [
        'number' => '01',
        'id' => '#tw001',
        'date' => '10th Aug 2025',
        'price' => '$253',
        'status' => 'Delivered',
        'style' => 'bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'number' => '02',
        'id' => '#tw002',
        'date' => '13th Aug 2025',
        'price' => '$123',
        'status' => 'New Order',
        'style' => 'bg-indigo-600/10 dark:bg-indigo-600/20 border border-indigo-600/10 dark:border-indigo-600/20 text-indigo-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'number' => '03',
        'id' => '#tw003',
        'date' => '18th Aug 2025',
        'price' => '$245',
        'status' => 'Return',
        'style' => 'bg-red-600/10 dark:bg-red-600/20 border border-red-600/10 dark:border-red-600/20 text-red-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'number' => '04',
        'id' => '#tw004',
        'date' => '21st Aug 2025',
        'price' => '$157',
        'status' => 'Cancel',
        'style' => 'bg-gray-500/5 border border-gray-500/5 text-gray-500 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'number' => '05',
        'id' => '#tw005',
        'date' => '22nd Aug 2025',
        'price' => '$62',
        'status' => 'New Order',
        'style' => 'bg-indigo-600/10 dark:bg-indigo-600/20 border border-indigo-600/10 dark:border-indigo-600/20 text-indigo-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'number' => '06',
        'id' => '#tw006',
        'date' => '23rd Aug 2025',
        'price' => '$456',
        'status' => 'Delivered',
        'style' => 'bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'number' => '07',
        'id' => '#tw007',
        'date' => '24th Aug 2025',
        'price' => '$478',
        'status' => 'Delivered',
        'style' => 'bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ]
];
@endphp

@foreach ($orders as $item)
    <tr>
        <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">{{ $item['number'] }}</th>
        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">{{ $item['id'] }}</td>
        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="text-slate-400">{{ $item['date'] }}</span>
        </td>
        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="text-slate-400">{{ $item['price'] }}</span>
        </td>
        <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="{{ $item['style'] }}">{{ $item['status'] }}</span>
        </td>
    </tr>
@endforeach