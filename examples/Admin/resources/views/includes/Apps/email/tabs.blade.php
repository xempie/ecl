@php
$tabs = [
    [
        'icon' => 'uil uil-inbox me-1',
        'title' => 'Inbox',
        'id' => 'index-tab',
        'target' => '#index',
        'controls' => 'index',
        'selected' => 'true',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full hover:text-indigo-600 duration-500 text-start',
    ],
    [
        'icon' => 'uil uil-envelope-star me-1',
        'title' => 'Starred',
        'id' => 'stared-tab',
        'target' => '#stared',
        'controls' => 'stared',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'uil uil-envelope-times me-1',
        'title' => 'Spam',
        'id' => 'spam-tab',
        'target' => '#spam',
        'controls' => 'spam',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'uil uil-envelope-upload me-1',
        'title' => 'Sent',
        'id' => 'sent-tab',
        'target' => '#sent',
        'controls' => 'sent',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'uil uil-envelope-edit me-1',
        'title' => 'Drafts',
        'id' => 'draft-tab',
        'target' => '#draft',
        'controls' => 'draft',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'uil uil-trash me-1',
        'title' => 'Delete',
        'id' => 'delete-tab',
        'target' => '#delete',
        'controls' => 'delete',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'uil uil-notes me-1',
        'title' => 'Notes',
        'id' => 'note-tab',
        'target' => '#note',
        'controls' => 'note',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ]
];
@endphp

@foreach ($tabs as $item)
    <li role="presentation">
        <button class="{{ $item['style'] }}" id="{{ $item['id'] }}" data-tabs-target="{{ $item['target'] }}" type="button" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}"><i class="{{ $item['icon'] }}"></i> {{ $item['title'] }}</button>
    </li>
@endforeach