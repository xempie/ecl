@php
$gallerys = [
    [
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/7.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/20.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/21.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/9.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/22.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/23.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ]
];
@endphp

@foreach ($gallerys as $item)
    <div class="group relative block overflow-hidden rounded-md duration-500">
        <img src="{{ asset($item['img']) }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
        <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>

        <div class="content duration-500">
            <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                <a href="{{ asset($item['img']) }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
            </div>

            <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                <a href="" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
                <p class="text-slate-400 mb-0">{{ $item['name'] }}</p>
            </div>
        </div>
    </div>
@endforeach