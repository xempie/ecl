@php
$visitors = [
    [
        'icon' => 'users',
        'icon1' => 'uil uil-chart-down',
        'title' => 'Total Visitors',
        'number' => '42205',
        'target' => '45890',
        'percentage' => '0.5%',
        'style' => 'text-red-600 text-sm ms-1 font-semibold',
        'span' => '',
        'span1' => '',
    ],
    [
        'icon' => 'dollar-sign',
        'icon1' => 'uil uil-arrow-growth',
        'title' => 'Revenue',
        'number' => '35214',
        'target' => '48575',
        'percentage' => '3.84%',
        'style' => 'text-emerald-600 text-sm ms-1 font-semibold',
        'span' => '$',
        'span1' => '',
    ],
    [
        'icon' => 'shopping-cart',
        'icon1' => 'uil uil-arrow-growth',
        'title' => 'Orders',
        'number' => '3402',
        'target' => '4800',
        'percentage' => '1.46%',
        'style' => 'text-emerald-600 text-sm ms-1 font-semibold',
        'span' => '',
        'span1' => '+',
    ],
    [
        'icon' => 'shopping-bag',
        'icon1' => 'uil uil-analysis',
        'title' => 'Items',
        'number' => '23',
        'target' => '145',
        'percentage' => '0.0%',
        'style' => 'text-slate-400 text-sm ms-1 font-semibold',
        'span' => '',
        'span1' => '',
    ],
    [
        'icon' => 'dollar-sign',
        'icon1' => 'uil uil-arrow-growth',
        'title' => 'Expenses',
        'number' => '22135',
        'target' => '24351',
        'percentage' => '1.6%',
        'style' => 'text-emerald-600 text-sm ms-1 font-semibold',
        'span' => '$',
        'span1' => '',
    ]
];
@endphp

@foreach ($visitors as $item)
    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
        <div class="p-5 flex items-center">
            <span class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow-sm shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                <i data-feather="{{ $item['icon'] }}" class="size-5"></i>
            </span>

            <span class="ms-3">
                <span class="text-slate-400 font-semibold block">{{ $item['title'] }}</span>
                <span class="flex items-center justify-between mt-1">
                    <span class="text-xl font-semibold">{{ $item['span'] }}<span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['span1'] }}</span>
                    <span class="{{ $item['style'] }}"><i class="{{ $item['icon1'] }}"></i> {{ $item['percentage'] }}</span>
                </span>
            </span>
        </div>

        <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
            <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
        </div>
    </div>
@endforeach