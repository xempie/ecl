@php
$watchlists = [
    [
        'img' => 'assets/images/coin/bitcoin.png',
        'title' => 'BTC',
        'price' => '$34587',
        'chg' => '-$745',
        'chg%' => '-2.5%',
        'style' => 'text-red-600',
    ],
    [
        'img' => 'assets/images/coin/litecoin.png',
        'title' => 'LTC',
        'price' => '$216',
        'chg' => '+$.264',
        'chg%' => '+.264%',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/coin/auroracoin.png',
        'title' => 'ARC',
        'price' => '$452',
        'chg' => '-$1.9',
        'chg%' => '-1.9%',
        'style' => 'text-red-600',
    ],
    [
        'img' => 'assets/images/coin/coinye.png',
        'title' => 'CNY',
        'price' => '$154',
        'chg' => '+$1.05',
        'chg%' => '+1.05%',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/coin/ethereum.png',
        'title' => 'ETH',
        'price' => '$854',
        'chg' => '+$1.705',
        'chg%' => '+1.705%',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/coin/potcoin.png',
        'title' => 'PTC',
        'price' => '$548',
        'chg' => '-$3.2',
        'chg%' => '-3.2%',
        'style' => 'text-red-600',
    ],
    [
        'img' => 'assets/images/coin/zcash.png',
        'title' => 'ZCC',
        'price' => '$965',
        'chg' => '+$1.465',
        'chg%' => '+1.465%',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/coin/primecoin.png',
        'title' => 'XPM',
        'price' => '$4875',
        'chg' => '-$1.08',
        'chg%' => '-1.08%',
        'style' => 'text-red-600',
    ],
    [
        'img' => 'assets/images/coin/blocknet.png',
        'title' => 'BLOCK',
        'price' => '$478',
        'chg' => '+$2.8',
        'chg%' => '+2.8%',
        'style' => 'text-emerald-600',
    ],
    [
        'img' => 'assets/images/coin/kucoin.png',
        'title' => 'KCS',
        'price' => '$545',
        'chg' => '+$1.5',
        'chg%' => '+1.5%',
        'style' => 'text-emerald-600',
    ]
];
@endphp

@foreach ($watchlists as $item)
    <tr class="border-t border-gray-100 dark:border-gray-700">
        <td class="p-4"><a href="" class="flex items-center hover:text-indigo-600 font-semibold"><img src="{{ asset($item['img']) }}" class="size-11 rounded-full shadow-sm dark:shadow-gray-700 p-1.5 me-1" alt=""> {{ $item['title'] }}</a></td>
        <td class="p-4 text-center">{{ $item['price'] }}</td>
        <td class="p-4 text-center {{ $item['style'] }}">{{ $item['chg'] }}</td>
        <td class="p-4 text-end {{ $item['style'] }}">{{ $item['chg%'] }}</td>
    </tr>
@endforeach