@php
$sales = [
    [
        'icon' => 'bookmark',
        'icon1' => 'uil uil-arrow-growth',
        'title' => 'Total Sales',
        'dollar' => '$',
        'price' => '35214',
        'target' => '48575',
        'percentage' => '3.84%',
        'today' => '+$1245 today',
        'style' => 'text-emerald-600',
    ],
    [
        'icon' => 'users',
        'icon1' => 'uil uil-arrow-growth',
        'title' => 'Total Users',
        'dollar' => '',
        'price' => '4231',
        'target' => '5134',
        'percentage' => '3.84%',
        'today' => '+35 today',
        'style' => 'text-emerald-600',
    ],
    [
        'icon' => 'package',
        'icon1' => 'uil uil-arrow-growth',
        'title' => 'Total Orders',
        'dollar' => '',
        'price' => '5135',
        'target' => '7546',
        'percentage' => '3.84%',
        'today' => '+124 today',
        'style' => 'text-emerald-600',
    ],
    [
        'icon' => 'rotate-cw',
        'icon1' => 'uil uil-chart-down',
        'title' => 'Refunds',
        'dollar' => '',
        'price' => '112',
        'target' => '485',
        'percentage' => '5.76%',
        'today' => '4 today',
        'style' => 'text-red-600',
    ]
];
@endphp

@foreach ($sales as $item)
    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
        <div class="p-5">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center">
                    <span class="flex justify-center items-center rounded-md size-8 min-w-[32px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow-sm shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                        <i data-feather="{{ $item['icon'] }}" class="size-4"></i>
                    </span>

                    <span class="font-semibold block ms-3">{{ $item['title'] }}</span>
                </div>

                <div class="dropdown inline-block relative">
                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle inline-flex text-[20px] text-center text-slate-400 rounded-full" type="button">
                        <i data-feather="more-horizontal" class="size-5"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute end-0 m-0 mt-1 z-10 w-28 rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                        <ul class="py-2 text-start" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="" class="block text-sm py-0.5 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">Today</a>
                            </li>
                            <li>
                                <a href="" class="block text-sm py-0.5 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">Weekly</a>
                            </li>
                            <li>
                                <a href="" class="block text-sm py-0.5 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">Monthly</a>
                            </li>
                            <li>
                                <a href="" class="block text-sm py-0.5 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <span class="text-2xl font-semibold block mb-1">{{ $item['dollar'] }} <span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['price'] }}</span></span>

            <span class="{{ $item['style'] }} text-sm ms-1 font-semibold"><i class="{{ $item['icon1'] }}"></i> {{ $item['percentage'] }} <span class="text-slate-400">{{ $item['today'] }}</span></span>
        </div>

        <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
            <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
        </div>
    </div>
@endforeach