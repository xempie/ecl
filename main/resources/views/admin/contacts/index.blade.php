@extends('admin.layouts.main')

@section('title', 'Contact Messages')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Contact Messages</h5>
                <h6 class="text-slate-400 font-semibold">Manage inquiries from website visitors</h6>
            </div>

            <div class="flex items-center space-x-3">
                <!-- Filter Dropdown -->
                <div class="relative">
                    <select onchange="window.location.href=this.value" 
                            class="py-[7px] px-4 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-white hover:bg-gray-50 border-gray-200 text-gray-700 rounded-md">
                        <option value="{{ route('admin.contacts') }}">All Messages</option>
                        <option value="{{ route('admin.contacts', ['status' => 'new']) }}" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                        <option value="{{ route('admin.contacts', ['status' => 'read']) }}" {{ request('status') == 'read' ? 'selected' : '' }}>Read</option>
                        <option value="{{ route('admin.contacts', ['status' => 'replied']) }}" {{ request('status') == 'replied' ? 'selected' : '' }}>Replied</option>
                        <option value="{{ route('admin.contacts', ['status' => 'archived']) }}" {{ request('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mt-6">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="size-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center">
                            <i class="uil uil-envelope-alt text-xl"></i>
                        </div>
                    </div>
                    <div class="flex-grow ml-4">
                        <p class="text-sm font-medium text-gray-500 truncate">Total Messages</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['total'] ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="size-12 bg-yellow-100 text-yellow-600 rounded-lg flex items-center justify-center">
                            <i class="uil uil-eye text-xl"></i>
                        </div>
                    </div>
                    <div class="flex-grow ml-4">
                        <p class="text-sm font-medium text-gray-500 truncate">Unread</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['new'] ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="size-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center">
                            <i class="uil uil-check-circle text-xl"></i>
                        </div>
                    </div>
                    <div class="flex-grow ml-4">
                        <p class="text-sm font-medium text-gray-500 truncate">Replied</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['replied'] ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="size-12 bg-red-100 text-red-600 rounded-lg flex items-center justify-center">
                            <i class="uil uil-clock text-xl"></i>
                        </div>
                    </div>
                    <div class="flex-grow ml-4">
                        <p class="text-sm font-medium text-gray-500 truncate">This Week</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['this_week'] ?? 0 }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages Table -->
        <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
            <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                <div class="flex justify-between items-center">
                    <h6 class="text-lg font-semibold">
                        Contact Messages 
                        @if(request('status'))
                            - {{ ucfirst(request('status')) }} ({{ $contacts->total() }})
                        @else
                            ({{ $contacts->total() }})
                        @endif
                    </h6>
                    
                    <!-- Search -->
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <form method="GET" action="{{ route('admin.contacts') }}">
                                @if(request('status'))
                                    <input type="hidden" name="status" value="{{ request('status') }}">
                                @endif
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search messages..." 
                                    class="w-64 px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <button type="submit" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <i class="uil uil-search text-gray-400"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-0">
                @if($contacts->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th class="p-4 text-left font-semibold">Contact</th>
                                <th class="p-4 text-left font-semibold">Subject</th>
                                <th class="p-4 text-left font-semibold">Message</th>
                                <th class="p-4 text-left font-semibold">Status</th>
                                <th class="p-4 text-left font-semibold">Date</th>
                                <th class="p-4 text-center font-semibold min-w-[120px]">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 {{ $contact->status == 'new' ? 'bg-blue-50 dark:bg-blue-900/20' : '' }}">
                                <td class="p-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-gray-500 text-white rounded-full flex items-center justify-center text-sm font-semibold mr-3">
                                            {{ substr($contact->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900 dark:text-white">{{ $contact->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $contact->email }}</div>
                                            @if($contact->phone)
                                                <div class="text-xs text-gray-500">{{ $contact->phone }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <div class="text-sm text-gray-900 dark:text-white font-medium">{{ $contact->subject ?: 'No Subject' }}</div>
                                </td>
                                <td class="p-4">
                                    <div class="text-sm text-gray-600 dark:text-gray-300 max-w-md">
                                        {{ Str::limit($contact->message, 100) }}
                                    </div>
                                </td>
                                <td class="p-4">
                                    @php $badge = $contact->status_badge @endphp
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ $badge['color'] }}-100 text-{{ $badge['color'] }}-800">
                                        {{ $badge['text'] }}
                                    </span>
                                </td>
                                <td class="p-4">
                                    <div class="text-sm text-gray-900 dark:text-white">
                                        {{ $contact->created_at->format('M d, Y') }}
                                    </div>
                                    <div class="text-xs text-gray-500">
                                        {{ $contact->created_at->format('h:i A') }}
                                    </div>
                                </td>
                                <td class="p-4 text-center">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a href="{{ route('admin.contacts.show', $contact) }}" 
                                           class="inline-flex items-center px-2 py-1 bg-blue-100 hover:bg-blue-200 text-blue-700 text-xs rounded-md transition-colors">
                                            <i class="uil uil-eye mr-1"></i> View
                                        </a>
                                        <form method="POST" action="{{ route('admin.contacts.destroy', $contact) }}" class="inline-block" 
                                              onsubmit="return confirm('Are you sure you want to delete this message?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-2 py-1 bg-red-100 hover:bg-red-200 text-red-700 text-xs rounded-md transition-colors">
                                                <i class="uil uil-trash-alt mr-1"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="p-12 text-center">
                    <i class="uil uil-envelope-alt text-6xl text-gray-400 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No Messages Found</h3>
                    <p class="text-gray-500 mb-4">
                        @if(request('search') || request('status'))
                            No messages match your current filters.
                        @else
                            No contact messages have been received yet.
                        @endif
                    </p>
                </div>
                @endif
            </div>

            <!-- Pagination -->
            @if($contacts->hasPages())
            <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-700">
                {{ $contacts->links() }}
            </div>
            @endif
        </div>
    </div>
</div>

@endsection