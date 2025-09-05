@extends('admin.layouts.main')

@section('title', 'Contact Message Details')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Contact Message Details</h5>
                <h6 class="text-slate-400 font-semibold">Message from {{ $contact->name }}</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.contacts') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 hover:bg-gray-200 border-gray-200 text-gray-700 rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Messages
                </a>
            </div>
        </div>

        <!-- Message Details -->
        <div class="mt-6 grid lg:grid-cols-3 grid-cols-1 gap-6">
            <!-- Main Message Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Message Content -->
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                    <!-- Header -->
                    <div class="flex items-start justify-between mb-6 pb-6 border-b border-gray-100 dark:border-gray-700">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center text-lg font-bold mr-4">
                                {{ substr($contact->name, 0, 1) }}
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white">{{ $contact->name }}</h4>
                                <p class="text-gray-600 dark:text-gray-400">{{ $contact->email }}</p>
                                @if($contact->phone)
                                    <p class="text-sm text-gray-500">{{ $contact->phone }}</p>
                                @endif
                            </div>
                        </div>
                        @php $badge = $contact->status_badge @endphp
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-{{ $badge['color'] }}-100 text-{{ $badge['color'] }}-800">
                            {{ $badge['text'] }}
                        </span>
                    </div>

                    <!-- Subject -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subject</label>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $contact->subject ?: 'No Subject' }}</h3>
                    </div>

                    <!-- Message Content -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">Message</label>
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4">
                            <div class="text-gray-900 dark:text-white whitespace-pre-wrap">{{ $contact->message }}</div>
                        </div>
                    </div>

                    <!-- Reply Section -->
                    @if($contact->replied_at)
                        <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-700 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <i class="uil uil-check-circle text-green-600 mr-2"></i>
                                <span class="font-medium text-green-800 dark:text-green-400">Replied</span>
                            </div>
                            <p class="text-sm text-green-700 dark:text-green-300">
                                Replied by {{ $contact->repliedByUser->name ?? 'Unknown' }} on {{ $contact->replied_at->format('M d, Y \a\t g:i A') }}
                            </p>
                        </div>
                    @else
                        <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-700 rounded-lg p-4">
                            <h4 class="font-medium text-blue-800 dark:text-blue-400 mb-3">Quick Reply</h4>
                            <form method="POST" action="{{ route('admin.contacts.reply', $contact) }}">
                                @csrf
                                <div class="space-y-3">
                                    <div>
                                        <textarea name="reply_message" rows="4" placeholder="Type your reply here..."
                                                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm rounded-md transition-colors">
                                            <i class="uil uil-message mr-2"></i> Send Reply
                                        </button>
                                        <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" 
                                           class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white text-sm rounded-md transition-colors">
                                            <i class="uil uil-envelope mr-2"></i> Reply via Email
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Message Info -->
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                    <h6 class="text-lg font-semibold mb-4">Message Information</h6>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-2 border-b border-gray-100 dark:border-gray-700">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Message ID</span>
                            <span class="text-sm text-gray-900 dark:text-white">#{{ $contact->id }}</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-100 dark:border-gray-700">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Received</span>
                            <span class="text-sm text-gray-900 dark:text-white">{{ $contact->created_at->format('M d, Y g:i A') }}</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-100 dark:border-gray-700">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Status</span>
                            @php $badge = $contact->status_badge @endphp
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-{{ $badge['color'] }}-100 text-{{ $badge['color'] }}-800">
                                {{ $badge['text'] }}
                            </span>
                        </div>
                        @if($contact->ip_address)
                        <div class="flex justify-between items-center py-2 border-b border-gray-100 dark:border-gray-700">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-400">IP Address</span>
                            <span class="text-sm text-gray-900 dark:text-white font-mono">{{ $contact->ip_address }}</span>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                    <h6 class="text-lg font-semibold mb-4">Quick Actions</h6>
                    
                    <div class="space-y-3">
                        @if($contact->status !== 'read')
                        <form method="POST" action="{{ route('admin.contacts.update-status', $contact) }}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="read">
                            <button type="submit" class="w-full flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 rounded-md transition-colors">
                                <i class="uil uil-eye mr-2"></i> Mark as Read
                            </button>
                        </form>
                        @endif

                        @if($contact->status !== 'replied')
                        <form method="POST" action="{{ route('admin.contacts.update-status', $contact) }}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="replied">
                            <button type="submit" class="w-full flex items-center px-4 py-2 text-sm font-medium text-green-600 bg-green-50 hover:bg-green-100 rounded-md transition-colors">
                                <i class="uil uil-check-circle mr-2"></i> Mark as Replied
                            </button>
                        </form>
                        @endif

                        @if($contact->status !== 'archived')
                        <form method="POST" action="{{ route('admin.contacts.update-status', $contact) }}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="archived">
                            <button type="submit" class="w-full flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-gray-50 hover:bg-gray-100 rounded-md transition-colors">
                                <i class="uil uil-archive mr-2"></i> Archive Message
                            </button>
                        </form>
                        @endif

                        <a href="mailto:{{ $contact->email }}" 
                           class="w-full flex items-center px-4 py-2 text-sm font-medium text-indigo-600 bg-indigo-50 hover:bg-indigo-100 rounded-md transition-colors">
                            <i class="uil uil-envelope mr-2"></i> Send Email
                        </a>

                        <form method="POST" action="{{ route('admin.contacts.destroy', $contact) }}" 
                              onsubmit="return confirm('Are you sure you want to delete this message?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full flex items-center px-4 py-2 text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-md transition-colors">
                                <i class="uil uil-trash-alt mr-2"></i> Delete Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection