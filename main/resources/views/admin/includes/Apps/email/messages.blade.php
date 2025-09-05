@php
$messages = [
    [
        'icon' => 'mdi mdi-star-outline text-[18px] text-slate-400 align-middle',
        'title' => 'Calvin Carlo',
        'subject' => 'Techwind Customization',
        'time' => '03:05PM',
    ],
    [
        'icon' => 'mdi mdi-star-outline text-[18px] text-slate-400 align-middle',
        'title' => 'Madeleine Jackson',
        'subject' => 'User-friendly value-added application 😊',
        'time' => '12:00PM',
    ],
    [
        'icon' => 'mdi mdi-star text-[18px] text-yellow-500 align-middle',
        'title' => 'Sherrie Miller',
        'subject' => 'Focused impactful open system 📷 😃',
        'time' => '8hours ago',
    ],
    [
        'icon' => 'mdi mdi-star-outline text-[18px] text-slate-400 align-middle',
        'title' => 'John Belgrave',
        'subject' => 'Profound systemic alliance 🎉 🎊',
        'time' => '20hours ago',
    ],
    [
        'icon' => 'mdi mdi-star-outline text-[18px] text-slate-400 align-middle',
        'title' => 'Jimmy Bojorquez',
        'subject' => 'Organized value-added model',
        'time' => '15th August 2025',
    ],
    [
        'icon' => 'mdi mdi-star-outline text-[18px] text-slate-400 align-middle',
        'title' => 'Louise Stewart',
        'subject' => 'Waterfall Model Update',
        'time' => '10th August 2025',
    ],
    [
        'icon' => 'mdi mdi-star-outline text-[18px] text-slate-400 align-middle',
        'title' => 'Kelly Hair',
        'subject' => 'Company Report',
        'time' => '8th August 2025',
    ],
    [
        'icon' => 'mdi mdi-star text-[18px] text-yellow-500 align-middle',
        'title' => 'Ester Casella',
        'subject' => 'Theme Update',
        'time' => '7th August 2025',
    ],
    [
        'icon' => 'mdi mdi-star text-[18px] text-yellow-500 align-middle',
        'title' => 'Richard Benavides',
        'subject' => 'Your product has been updated!',
        'time' => '5th August 2025',
    ],
    [
        'icon' => 'mdi mdi-star-outline text-[18px] text-slate-400 align-middle',
        'title' => 'Calvin Hudson',
        'subject' => 'ThemeForest Sale',
        'time' => '1st August 2025',
    ]
];
@endphp

@foreach ($messages as $item)
    <tr>
        <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="firstcheck">
        </th>
        <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
            <a href=""><i class="{{ $item['icon'] }}"></i></a>
        </td>
        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
            <a href="javascript:void(0)" class="font-semibold hover:text-indigo-600" onclick="emailpreview.showModal()">{{ $item['title'] }}</a>
        </td>
        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="text-slate-400">{{ $item['subject'] }}</span>
        </td>
        <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
            <span class="text-slate-400">{{ $item['time'] }}</span>
        </td>
    </tr>
@endforeach