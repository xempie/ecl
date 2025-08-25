@php
$lists = [
    [
        'no' => '#tw001',
        'img' => 'assets/images/client/01.jpg',
        'title' => 'Howard Tanner',
        'phone' => '(+12)85-4521-7568',
        'amount' => '$253',
        'date' => '16th Aug 2025',
        'status' => 'Unpaid',
        'btn' => 'Preview',
        'btn1' => 'Print',
        'style' => 'bg-red-600/10 dark:bg-red-600/20 text-red-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'no' => '#tw002',
        'img' => 'assets/images/client/02.jpg',
        'title' => 'Wendy Filson',
        'phone' => '(+12)85-4521-7568',
        'amount' => '$482',
        'date' => '16th Aug 2025',
        'status' => 'Paid',
        'btn' => 'Preview',
        'btn1' => 'Print',
        'style' => 'bg-emerald-600/10 dark:bg-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'no' => '#tw003',
        'img' => 'assets/images/client/03.jpg',
        'title' => 'Faye Bridger',
        'phone' => '(+12)85-4521-7568',
        'amount' => '$546',
        'date' => '16th Aug 2025',
        'status' => 'Unpaid',
        'btn' => 'Preview',
        'btn1' => 'Print',
        'style' => 'bg-red-600/10 dark:bg-red-600/20 text-red-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'no' => '#tw004',
        'img' => 'assets/images/client/04.jpg',
        'title' => 'Ronald Curtis',
        'phone' => '(+12)85-4521-7568',
        'amount' => '$154',
        'date' => '16th Aug 2025',
        'status' => 'Paid',
        'btn' => 'Preview',
        'btn1' => 'Print',
        'style' => 'bg-emerald-600/10 dark:bg-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'no' => '#tw005',
        'img' => 'assets/images/client/05.jpg',
        'title' => 'Melissa Hibner',
        'phone' => '(+12)85-4521-7568',
        'amount' => '$458',
        'date' => '16th Aug 2025',
        'status' => 'Unpaid',
        'btn' => 'Preview',
        'btn1' => 'Print',
        'style' => 'bg-red-600/10 dark:bg-red-600/20 text-red-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'no' => '#tw006',
        'img' => 'assets/images/client/06.jpg',
        'title' => 'Randall Case',
        'phone' => '(+12)85-4521-7568',
        'amount' => '$548',
        'date' => '16th Aug 2025',
        'status' => 'Paid',
        'btn' => 'Preview',
        'btn1' => 'Print',
        'style' => 'bg-emerald-600/10 dark:bg-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'no' => '#tw007',
        'img' => 'assets/images/client/07.jpg',
        'title' => 'Jerry Morena',
        'phone' => '(+12)85-4521-7568',
        'amount' => '$658',
        'date' => '16th Aug 2025',
        'status' => 'Paid',
        'btn' => 'Preview',
        'btn1' => 'Print',
        'style' => 'bg-emerald-600/10 dark:bg-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ],
    [
        'no' => '#tw008',
        'img' => 'assets/images/client/08.jpg',
        'title' => 'Lester McNally',
        'phone' => '(+12)85-4521-7568',
        'amount' => '$457',
        'date' => '16th Aug 2025',
        'status' => 'Paid',
        'btn' => 'Preview',
        'btn1' => 'Print',
        'style' => 'bg-emerald-600/10 dark:bg-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1',
    ]
];
@endphp

@foreach ($lists as $item)
    <tr>
        <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">{{ $item['no'] }}</th>
        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
            <a href="#" class="hover:text-indigo-600">
                <div class="flex items-center">
                    <img src="{{ asset($item['img']) }}" class="size-10 rounded-full shadow-sm dark:shadow-gray-700" alt="">
                    <span class="ms-2 font-medium">{{ $item['title'] }}</span>
                </div>
            </a>
        </td>
        <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="text-slate-400">{{ $item['phone'] }}</span>
        </td>
        <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="text-slate-400">{{ $item['amount'] }}</span>
        </td>
        <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="text-slate-400">{{ $item['date'] }}</span>
        </td>
        <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="{{ $item['style'] }}">{{ $item['status'] }}</span>
        </td>
        <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
            <a href="{{ url('/invoice') }}" class="py-1 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">{{ $item['btn'] }}</a>
            <a href="#" class="py-1 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md ms-2">{{ $item['btn1'] }}</a>
        </td>
    </tr>
@endforeach