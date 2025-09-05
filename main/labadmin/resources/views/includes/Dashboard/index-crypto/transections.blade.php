@php
$transections = [
    [
        'title' => 'Buy',
        'assets' => 'BTC',
        'date' => '25th Nov 25',
        'amount' => '$350',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Progress',
        'style' => 'bg-emerald-600',
        'class' => 'bg-cyan-500/10 text-cyan-500',
    ],
    [
        'title' => 'Sell',
        'assets' => 'BTC',
        'date' => '25th Nov 25',
        'amount' => '1.45 BTC',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Pending',
        'style' => 'bg-red-600',
        'class' => 'bg-red-600/10 text-red-600',
    ],
    [
        'title' => 'Sell',
        'assets' => 'LTC',
        'date' => '25th Nov 25',
        'amount' => '1.45 LTC',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Success',
        'style' => 'bg-red-600',
        'class' => 'bg-emerald-600/10 text-emerald-600',
    ],
    [
        'title' => 'Buy',
        'assets' => 'ARC',
        'date' => '25th Nov 25',
        'amount' => '$350',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Pending',
        'style' => 'bg-emerald-600',
        'class' => 'bg-red-600/10 text-red-600',
    ],
    [
        'title' => 'Sell',
        'assets' => 'CNY',
        'date' => '25th Nov 25',
        'amount' => '1.45 CNY',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Success',
        'style' => 'bg-red-600',
        'class' => 'bg-emerald-600/10 text-emerald-600',
    ],
    [
        'title' => 'Buy',
        'assets' => 'ETH',
        'date' => '25th Nov 25',
        'amount' => '$350',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Progress',
        'style' => 'bg-emerald-600',
        'class' => 'bg-cyan-500/10 text-cyan-500',
    ],
    [
        'title' => 'Sell',
        'assets' => 'PTC',
        'date' => '25th Nov 25',
        'amount' => '1.45 PTC',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Pending',
        'style' => 'bg-red-600',
        'class' => 'bg-red-600/10 text-red-600',
    ],
    [
        'title' => 'Sell',
        'assets' => 'ZCC',
        'date' => '25th Nov 25',
        'amount' => '1.45 ZCC',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Success',
        'style' => 'bg-red-600',
        'class' => 'bg-emerald-600/10 text-emerald-600',
    ],
    [
        'title' => 'Buy',
        'assets' => 'XPM',
        'date' => '25th Nov 25',
        'amount' => '$350',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Success',
        'style' => 'bg-emerald-600',
        'class' => 'bg-emerald-600/10 text-emerald-600',
    ],
    [
        'title' => 'Buy',
        'assets' => 'BLOCK',
        'date' => '25th Nov 25',
        'amount' => '$350',
        'wallet' => 'qhut0...hfteh45',
        'status' => 'Progress',
        'style' => 'bg-emerald-600',
        'class' => 'bg-cyan-500/10 text-cyan-500',
    ]
];
@endphp

@foreach ($transections as $item)
    <tr>
        <td class="px-4 pt-3 text-start"><span class="{{ $item['style'] }} inline-block text-white text-[12px] font-bold px-2.5 rounded">{{ $item['title'] }}</span></td>
        <td class="px-4 pt-3 text-center">{{ $item['assets'] }}</td>
        <td class="px-4 pt-3 text-center">{{ $item['date'] }}</td>
        <td class="px-4 pt-3 text-center">{{ $item['amount'] }}</td>
        <td class="px-4 pt-3 text-center text-indigo-600">{{ $item['wallet'] }}</td>
        <td class="px-4 pt-3 text-end text-red-600"><span class="{{ $item['class'] }} inline-block text-[12px] font-bold px-2.5 rounded">{{ $item['status'] }}</span></td>
    </tr>
@endforeach