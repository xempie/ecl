@php
$navmenus = [
    [
        'icon' => 'uil uil-dashboard',
        'title' => 'Profile',
        'link' => url('/profile'),
    ],
    [
        'icon' => 'uil uil-diary-alt',
        'title' => 'Billing Info',
        'link' => url('/profile-billing'),
    ],
    [
        'icon' => 'uil uil-credit-card',
        'title' => 'Payment',
        'link' => url('/profile-payment'),
    ],
    [
        'icon' => 'uil uil-process',
        'title' => 'Social Profile',
        'link' => url('/profile-social'),
    ],
    [
        'icon' => 'uil uil-bell',
        'title' => 'Notifications',
        'link' => url('/profile-notification'),
    ],
    [
        'icon' => 'uil uil-setting',
        'title' => 'Settings',
        'link' => url('/profile-setting'),
    ],
    [
        'icon' => 'uil uil-power',
        'title' => 'Sign Out',
        'link' => url('/auth-lock-screen'),
    ]
];
@endphp

@foreach ($navmenus as $item)
    <li class="navbar-item account-menu">
        <a href="{{ $item['link'] }}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
            <span class="me-2 text-[18px] mb-0"><i class="{{ $item['icon'] }}"></i></span>
            <h6 class="mb-0 font-semibold">{{ $item['title'] }}</h6>
        </a>
    </li>
@endforeach