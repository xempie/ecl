@php
$items = [
    [
        'icon' => 'uil uil-arrow-growth',
        'title' => 'Techwind',
        'price' => '$4120',
        'progress' => '5.5%',
        'style' => 'text-emerald-600 text-sm ms-1 font-semibold',
    ],
    [
        'icon' => 'uil uil-chart-down',
        'title' => 'Landrick',
        'price' => '$5648',
        'progress' => '15.8%',
        'style' => 'text-red-600 text-sm ms-1 font-semibold',
    ],
    [
        'icon' => 'uil uil-arrow-growth',
        'title' => 'Hously',
        'price' => '$456',
        'progress' => '1.3%',
        'style' => 'text-emerald-600 text-sm ms-1 font-semibold',
    ],
    [
        'icon' => 'uil uil-chart-down',
        'title' => 'Jobstack',
        'price' => '$546',
        'progress' => '1.54%',
        'style' => 'text-red-600 text-sm ms-1 font-semibold',
    ],
    [
        'icon' => 'uil uil-chart-down',
        'title' => 'Giglink',
        'price' => '$124',
        'progress' => '8.5%',
        'style' => 'text-red-600 text-sm ms-1 font-semibold',
    ],
    [
        'icon' => 'uil uil-arrow-growth',
        'title' => 'Upwind',
        'price' => '$1545',
        'progress' => '6.4%',
        'style' => 'text-emerald-600 text-sm ms-1 font-semibold',
    ],
    [
        'icon' => 'uil uil-chart-down',
        'title' => 'Fronter',
        'price' => '$1215',
        'progress' => '4.8%',
        'style' => 'text-red-600 text-sm ms-1 font-semibold',
    ],
    [
        'icon' => 'uil uil-arrow-growth',
        'title' => 'Doctris',
        'price' => '$2321',
        'progress' => '4.1%',
        'style' => 'text-emerald-600 text-sm ms-1 font-semibold',
    ]
];
@endphp

@foreach ($items as $item)
    <tr>
        <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">{{ $item['title'] }}</th>
        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">{{ $item['price'] }}</td>
        <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="{{ $item['style'] }}"><i class="{{ $item['icon'] }}"></i> {{ $item['progress'] }}</span>
        </td>
    </tr>
@endforeach