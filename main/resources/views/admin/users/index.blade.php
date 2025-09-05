@extends('admin.layouts.main')

@section('title', 'Users')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Users Management</h5>
                <h6 class="text-slate-400 font-semibold">Manage system users and their access</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.users.create') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                    <i class="uil uil-plus"></i> Add New User
                </a>
            </div>
        </div>

        <!-- Users Table -->
        <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
            <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                <div class="flex justify-between items-center">
                    <h6 class="text-lg font-semibold">Users ({{ $users->total() }})</h6>
                    
                    <!-- Search -->
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <input type="text" placeholder="Search users..." 
                                class="w-64 px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="uil uil-search text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-0">
                @if($users->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th class="p-4 text-left font-semibold">User</th>
                                <th class="p-4 text-left font-semibold">Email</th>
                                <th class="p-4 text-left font-semibold">Verified</th>
                                <th class="p-4 text-left font-semibold">Created</th>
                                <th class="p-4 text-left font-semibold">Last Login</th>
                                <th class="p-4 text-center font-semibold min-w-[120px]">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                                <td class="p-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-semibold mr-3">
                                            {{ substr($user->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900 dark:text-white">{{ $user->name }}</div>
                                            <div class="text-sm text-gray-500">ID: {{ $user->id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <div class="text-sm text-gray-900 dark:text-white">{{ $user->email }}</div>
                                </td>
                                <td class="p-4">
                                    @if($user->email_verified_at)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            <i class="uil uil-check-circle mr-1"></i> Verified
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            <i class="uil uil-clock mr-1"></i> Pending
                                        </span>
                                    @endif
                                </td>
                                <td class="p-4">
                                    <div class="text-sm text-gray-900 dark:text-white">
                                        {{ $user->created_at->format('M d, Y') }}
                                    </div>
                                    <div class="text-xs text-gray-500">
                                        {{ $user->created_at->format('h:i A') }}
                                    </div>
                                </td>
                                <td class="p-4">
                                    <div class="text-sm text-gray-500">
                                        {{ $user->updated_at->diffForHumans() }}
                                    </div>
                                </td>
                                <td class="p-4 text-center">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a href="{{ route('admin.users.show', $user) }}" 
                                           class="inline-flex items-center px-2 py-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs rounded-md transition-colors">
                                            <i class="uil uil-eye mr-1"></i> View
                                        </a>
                                        <a href="{{ route('admin.users.edit', $user) }}" 
                                           class="inline-flex items-center px-2 py-1 bg-blue-100 hover:bg-blue-200 text-blue-700 text-xs rounded-md transition-colors">
                                            <i class="uil uil-edit mr-1"></i> Edit
                                        </a>
                                        @if($user->id !== auth()->id())
                                        <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="inline-block" 
                                              onsubmit="return confirm('Are you sure you want to delete this user? This action cannot be undone.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-2 py-1 bg-red-100 hover:bg-red-200 text-red-700 text-xs rounded-md transition-colors">
                                                <i class="uil uil-trash-alt mr-1"></i> Delete
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="p-12 text-center">
                    <i class="uil uil-users-alt text-6xl text-gray-400 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No Users Found</h3>
                    <p class="text-gray-500 mb-4">Get started by creating your first user account.</p>
                    <a href="{{ route('admin.users.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm rounded-md transition-colors">
                        <i class="uil uil-plus mr-2"></i> Add New User
                    </a>
                </div>
                @endif
            </div>

            <!-- Pagination -->
            @if($users->hasPages())
            <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-700">
                {{ $users->links() }}
            </div>
            @endif
        </div>
    </div>
</div>

@endsection