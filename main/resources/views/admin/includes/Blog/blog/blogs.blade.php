@php
$blogs = [
    [
        'id' => 1,
        'img' => 'assets/images/blog/01.jpg',
        'title' => 'Design your apps in your own way',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 2,
        'img' => 'assets/images/blog/02.jpg',
        'title' => 'How apps is changing the IT world',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 3,
        'img' => 'assets/images/blog/03.jpg',
        'title' => 'Smartest Applications for Business',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 4,
        'img' => 'assets/images/blog/04.jpg',
        'title' => 'Mobile Marketing, Its Synthes and 2025 Offer Prognosis',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 5,
        'img' => 'assets/images/blog/05.jpg',
        'title' => 'Stop Worrying About Deadlines! We Got You Covered',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 6,
        'img' => 'assets/images/blog/06.jpg',
        'title' => 'Change Your Strategy: Find a Business Consultant',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 7,
        'img' => 'assets/images/blog/07.jpg',
        'title' => 'Everything About Financial Modeling',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 8,
        'img' => 'assets/images/blog/08.jpg',
        'title' => 'On the other hand we provide denounce',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($blogs as $item)
    <div class="relative rounded-md shadow-sm dark:shadow-gray-700 overflow-hidden bg-white dark:bg-slate-900">
        <img src="{{ asset($item['img']) }}" alt="">

        <div class="content p-6">
            <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
            
            <div class="mt-4">
                <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach