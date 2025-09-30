@extends('admin.layouts.main')

@section('title', 'Events')

@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Events Management</h5>
                <h6 class="text-slate-400 font-semibold">Manage lab events and activities</h6>
            </div>

            <div class="flex items-center">
                <a href="{{ route('admin.events.create') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-purple-600/5 hover:bg-purple-600 border-purple-600/10 hover:border-purple-600 text-purple-600 hover:text-white rounded-md">
                    <i class="uil uil-plus"></i> Add Event
                </a>
            </div>
        </div>

        @if(session('success'))
        <div class="mt-4 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg">
            <p class="text-green-600 dark:text-green-400 text-sm">{{ session('success') }}</p>
        </div>
        @endif

        <!-- Events List -->
        <div class="mt-6">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-start">
                        <thead class="text-base">
                            <tr class="border-b border-gray-100 dark:border-gray-800">
                                <th class="text-start font-semibold text-[15px] py-3 px-4">Event</th>
                                <th class="text-start font-semibold text-[15px] py-3 px-4">Status</th>
                                <th class="text-start font-semibold text-[15px] py-3 px-4">Event Date</th>
                                <th class="text-start font-semibold text-[15px] py-3 px-4">Location</th>
                                <th class="text-center font-semibold text-[15px] py-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($events as $event)
                            <tr class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location='{{ route('admin.events.edit', $event) }}'">
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-4">
                                        @if($event->featured_image)
                                            <img src="{{ asset($event->featured_image) }}" class="size-10 rounded-md" alt="">
                                        @else
                                            <div class="size-10 bg-purple-100 rounded-md flex items-center justify-center">
                                                <i class="uil uil-calendar-alt text-purple-600"></i>
                                            </div>
                                        @endif
                                        <div class="flex-grow min-w-0">
                                            <div class="font-medium text-gray-900 dark:text-white text-sm line-clamp-2">{{ $event->title }}</div>
                                            <div class="text-xs text-gray-500 mt-1">{{ Str::limit($event->excerpt, 50) }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    @php
                                        $statusColors = [
                                            'draft' => 'bg-yellow-100 text-yellow-800',
                                            'published' => 'bg-green-100 text-green-800',
                                            'scheduled' => 'bg-blue-100 text-blue-800',
                                            'archived' => 'bg-gray-100 text-gray-800',
                                        ];
                                    @endphp
                                    <span class="px-2 py-1 text-xs rounded-full {{ $statusColors[$event->status] ?? $statusColors['draft'] }}">
                                        {{ ucfirst($event->status) }}
                                    </span>
                                </td>
                                <td class="py-3 px-4">
                                    @if($event->event_date)
                                        <div>
                                            <div class="font-semibold">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</div>
                                            @if($event->event_time)
                                                <div class="text-sm text-slate-400">{{ $event->event_time }}</div>
                                            @endif
                                        </div>
                                    @else
                                        <span class="text-slate-400">No date set</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4">{{ $event->event_location ?: 'TBD' }}</td>
                                <td class="py-3 px-4 text-center" onclick="event.stopPropagation()">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a href="{{ route('admin.events.show', $event) }}" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-blue-600/5 hover:bg-blue-600 border border-blue-600/10 hover:border-blue-600 text-blue-600 hover:text-white rounded-md">
                                            <i class="uil uil-eye text-[16px]"></i>
                                        </a>
                                        <a href="{{ route('admin.events.edit', $event) }}" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-amber-600/5 hover:bg-amber-600 border border-amber-600/10 hover:border-amber-600 text-amber-600 hover:text-white rounded-md">
                                            <i class="uil uil-edit text-[16px]"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.events.destroy', $event) }}" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this event?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-red-600/5 hover:bg-red-600 border border-red-600/10 hover:border-red-600 text-red-600 hover:text-white rounded-md">
                                                <i class="uil uil-trash text-[16px]"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-slate-400">
                                    No events found. <a href="{{ route('admin.events.create') }}" class="text-purple-600 hover:underline">Create your first event</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($events->hasPages())
                <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-800">
                    {{ $events->links() }}
                </div>
                @endif
            </div>
        </div>
        <!-- End Content -->
    </div>
</div>
@endsection