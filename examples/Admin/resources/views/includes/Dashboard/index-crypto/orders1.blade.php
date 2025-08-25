@php
$orders = [
    [
        'name' => 'Buy',
        'title' => 'Bitcoin',
        'title1' => 'Success',
        'spend' => '$ 45,456',
        'recieved' => '0.00956BTC',
        'style' => 'bg-emerald-600 inline-block text-white text-[12px] font-bold px-2.5 rounded',
        'class' => 'bg-emerald-600/10 text-emerald-600',
        'class1' => 'rounded shadow-sm p-3',
    ],
    [
        'name' => 'Sell',
        'title' => 'Blocknet',
        'title1' => 'Pending',
        'spend' => '$ 45,456',
        'recieved' => '0.00956BTC',
        'style' => 'bg-red-600 text-white inline-block text-[12px] font-bold px-2.5 rounded',
        'class' => 'bg-red-600/10 text-red-600',
        'class1' => 'rounded shadow-sm p-3 mt-3',
    ],
    [
        'name' => 'Sell',
        'title' => 'Litecoin',
        'title1' => 'Progress',
        'spend' => '$ 45,456',
        'recieved' => '0.00956BTC',
        'style' => 'bg-red-600 text-white inline-block text-[12px] font-bold px-2.5 rounded',
        'class' => 'bg-cyan-500/10 text-cyan-500',
        'class1' => 'rounded shadow-sm p-3 mt-3',
    ],
    [
        'name' => 'Buy',
        'title' => 'Kucoin',
        'title1' => 'Success',
        'spend' => '$ 45,456',
        'recieved' => '0.00956BTC',
        'style' => 'bg-emerald-600 inline-block text-white text-[12px] font-bold px-2.5 rounded',
        'class' => 'bg-emerald-600/10 text-emerald-600',
        'class1' => 'rounded shadow-sm p-3 mt-3',
    ]
];
@endphp

@foreach ($orders as $item)
    <div class="{{ $item['class1'] }}">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <span class="{{ $item['style'] }}">{{ $item['name'] }}</span> 
                <h6 class="font-semibold mb-0 ms-2">{{ $item['title'] }}</h6>
            </div>

            <span class="{{ $item['class'] }} inline-block text-[12px] font-bold px-2.5 rounded">{{ $item['title1'] }}</span>
        </div>

        <div class="flex items-center mt-6">
            <div class="">
                <h6 class="text-slate-400 mb-0">Spend</h6>
                <h6 class="mb-0">{{ $item['spend'] }}</h6>
            </div>

            <div class="ms-3">
                <h6 class="text-slate-400 mb-0">Recieved</h6>
                <h6 class="mb-0">{{ $item['recieved'] }}</h6>
            </div>
        </div>
    </div>
@endforeach