@php
$events = [
    [
        'title' => 'Metting',
    ],
    [
        'title' => 'Operations',
    ],
    [
        'title' => 'Lunch',
    ],
    [
        'title' => 'Conference',
    ],
    [
        'title' => 'Business Metting',
    ]
];
@endphp

@foreach ($events as $item)
    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event m-1 cursor-pointer bg-indigo-600">
        <div class="fc-event-main py-1 px-2">{{ $item['title'] }}</div>
    </div>
@endforeach