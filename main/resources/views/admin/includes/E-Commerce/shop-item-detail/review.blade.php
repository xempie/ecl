@php
$reviews = [
    [
        'img' => 'assets/images/client/01.jpg',
        'title' => 'Calvin Carlo',
        'date' => '6th May 2025 at 01:25 pm',
        'desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
        'style' => '',
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'title' => 'Calvin Carlo',
        'date' => '6th May 2025 at 01:25 pm',
        'desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
        'style' => 'mt-8',
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'title' => 'Calvin Carlo',
        'date' => '6th May 2025 at 01:25 pm',
        'desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
        'style' => 'mt-8',
    ],
    [
        'img' => 'assets/images/client/04.jpg',
        'title' => 'Calvin Carlo',
        'date' => '6th May 2025 at 01:25 pm',
        'desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
        'style' => 'mt-8',
    ]
];
@endphp

@foreach ($reviews as $item)
    <div class="{{ $item['style'] }}">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset($item['img']) }}" class="size-11 rounded-full shadow" alt="">

                <div class="ms-3 flex-1">
                    <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">{{ $item['title'] }}</a>
                    <p class="text-sm text-slate-400">{{ $item['date'] }}</p>
                </div>
            </div>

            <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
        </div>
        <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow-sm dark:shadow-gray-700 mt-6">
            <ul class="list-none inline-block text-orange-400">
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline text-slate-400 font-semibold">5.0</li>
            </ul>

            <p class="text-slate-400 italic">" {{ $item['desc'] }} "</p>
        </div>
    </div>
@endforeach