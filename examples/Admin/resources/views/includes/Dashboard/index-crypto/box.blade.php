@php
$boxs = [
    [
        'img' => 'assets/images/coin/kucoin.png',
        'title' => 'Kucoin',
        'name' => 'KCS',
        'percentage' => '+15.55%',
        'dollar' => '+$ 155',
        'price' => '$ 41245',
        'style' => 'text-emerald-600',
        'chart' => 'chart-1',
    ],
    [
        'img' => 'assets/images/coin/ethereum.png',
        'title' => 'Ethereum',
        'name' => 'ETS',
        'percentage' => '-25.01%',
        'dollar' => '-$ 524',
        'price' => '$ 1458',
        'style' => 'text-red-600',
        'chart' => 'chart-2',
    ],
    [
        'img' => 'assets/images/coin/monero.png',
        'title' => 'Monero',
        'name' => 'XMR',
        'percentage' => '+3.08%',
        'dollar' => '+$ 58',
        'price' => '$ 448',
        'style' => 'text-emerald-600',
        'chart' => 'chart-3',
    ],
    [
        'img' => 'assets/images/coin/litecoin.png',
        'title' => 'Litecoin',
        'name' => 'LTC',
        'percentage' => '-5.05%',
        'dollar' => '-$ 48',
        'price' => '$ 478',
        'style' => 'text-red-600',
        'chart' => 'chart-4',
    ],
    [
        'img' => 'assets/images/coin/blocknet.png',
        'title' => 'Blocknet',
        'name' => 'BLOCK',
        'percentage' => '-8.05%',
        'dollar' => '-$ 58',
        'price' => '$ 546',
        'style' => 'text-red-600',
        'chart' => 'chart-5',
    ],
    [
        'img' => 'assets/images/coin/bittorrent.png',
        'title' => 'Bittorrent',
        'name' => 'BTT',
        'percentage' => '+3.08%',
        'dollar' => '+$ 58',
        'price' => '$ 448',
        'style' => 'text-emerald-600',
        'chart' => 'chart-6',
    ]
];
@endphp

@foreach ($boxs as $item)
    <div class="relative overflow-hidden p-4 rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
        <div class="relative flex justify-between items-center mb-8 z-1">
            <div class="flex items-center">
                <img src="{{ asset($item['img']) }}" class="size-11 rounded-full shadow-sm dark:shadow-gray-700 p-1.5 me-1" alt="">
                <h6 class="mb-0 font-semibold text-lg ms-2">{{ $item['title'] }}</h6>
            </div>
            <span class="text-slate-400 font-semibold">{{ $item['name'] }}</span>
        </div>

        <div class="relative flex justify-between items-center font-semibold z-1">
            <span class="text-sm {{ $item['style'] }}">{{ $item['percentage'] }}</span>
            <span class="text-sm {{ $item['style'] }}">{{ $item['dollar'] }}</span>
            <span class="text-sm">{{ $item['price'] }}</span>
        </div>

        <div class="absolute p-4 inset-0 z-0 opacity-10">
            <div id="{{ $item['chart'] }}"></div>
        </div>
    </div>
@endforeach