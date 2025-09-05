@php
$gallerys = [
    [
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["photography"]',
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/7.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/9.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["photography"]',
    ],
    [
        'img' => 'assets/images/portfolio/21.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["photography"]',
    ],
    [
        'img' => 'assets/images/portfolio/20.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/22.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["photography"]',
    ],
    [
        'img' => 'assets/images/portfolio/23.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
];
@endphp

@foreach ($gallerys as $item)
    <div class="lg:w-1/5 md:w-1/2 p-3 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md duration-500">
            <a href="{{ asset($item['img']) }}" class="lightbox duration-500 group-hover:scale-105" title="">
                <img src="{{ asset($item['img']) }}" class="" alt="work-image">
            </a>
            <div class="absolute -bottom-52 group-hover:bottom-2 start-2 end-2 duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow-sm dark:shadow-gray-700">
                <a href="" class="hover:text-indigo-600 text-lg duration-500 font-medium">{{ $item['title'] }}</a>
                <h6 class="text-slate-400">{{ $item['name'] }}</h6>
            </div>
        </div>
    </div>
@endforeach