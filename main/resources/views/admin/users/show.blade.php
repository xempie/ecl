@extends('admin.layouts.main')

@section('title', 'User Details')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">User Details</h5>
                <h6 class="text-slate-400 font-semibold">{{ $user->name }} profile information</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.users.edit', $user) }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                    <i class="uil uil-edit"></i> Edit User
                </a>
                <a href="{{ route('admin.users') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 hover:bg-gray-200 border-gray-200 text-gray-700 rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Users
                </a>
            </div>
        </div>

        <!-- User Profile -->
        <div class="mt-6 grid lg:grid-cols-3 grid-cols-1 gap-6">
            <!-- Main Profile Info -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Basic Information -->
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                    <h6 class="text-lg font-semibold mb-6">Basic Information</h6>
                    
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mr-4">
                            {{ substr($user->name, 0, 1) }}
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">{{ $user->name }}</h4>
                            <p class="text-gray-600 dark:text-gray-400">{{ $user->email }}</p>
                            @if($user->email_verified_at)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 mt-1">
                                    <i class="uil uil-check-circle mr-1"></i> Email Verified
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 mt-1">
                                    <i class="uil uil-clock mr-1"></i> Email Pending Verification
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">User ID</label>
                            <p class="text-gray-900 dark:text-white font-medium">{{ $user->id }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Role</label>
                            <p class="text-gray-900 dark:text-white font-medium capitalize">{{ $user->role ?? 'User' }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Member Since</label>
                            <p class="text-gray-900 dark:text-white font-medium">{{ $user->created_at->format('F j, Y') }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Last Updated</label>
                            <p class="text-gray-900 dark:text-white font-medium">{{ $user->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Account Activity -->
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                    <h6 class="text-lg font-semibold mb-6">Account Activity</h6>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-gray-700">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center mr-3">
                                    <i class="uil uil-user-plus text-sm"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">Account Created</p>
                                    <p class="text-sm text-gray-500">User account was created</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">{{ $user->created_at->format('M j, Y g:i A') }}</span>
                        </div>
                        
                        @if($user->email_verified_at)
                        <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-gray-700">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mr-3">
                                    <i class="uil uil-check-circle text-sm"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">Email Verified</p>
                                    <p class="text-sm text-gray-500">Email address was verified</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">{{ $user->email_verified_at->format('M j, Y g:i A') }}</span>
                        </div>
                        @endif
                        
                        <div class="flex items-center justify-between py-3">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-gray-100 text-gray-600 rounded-full flex items-center justify-center mr-3">
                                    <i class="uil uil-edit text-sm"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">Last Updated</p>
                                    <p class="text-sm text-gray-500">Profile was last modified</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">{{ $user->updated_at->format('M j, Y g:i A') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Quick Actions -->
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                    <h6 class="text-lg font-semibold mb-4">Quick Actions</h6>
                    
                    <div class="space-y-3">
                        <a href="{{ route('admin.users.edit', $user) }}" 
                           class="w-full flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 rounded-md transition-colors">
                            <i class="uil uil-edit mr-2"></i> Edit User
                        </a>
                        
                        @if(!$user->email_verified_at)
                        <button type="button" 
                                class="w-full flex items-center px-4 py-2 text-sm font-medium text-green-600 bg-green-50 hover:bg-green-100 rounded-md transition-colors">
                            <i class="uil uil-envelope-check mr-2"></i> Send Verification Email
                        </button>
                        @endif
                        
                        <button type="button" 
                                class="w-full flex items-center px-4 py-2 text-sm font-medium text-yellow-600 bg-yellow-50 hover:bg-yellow-100 rounded-md transition-colors">
                            <i class="uil uil-key-skeleton mr-2"></i> Reset Password
                        </button>
                        
                        @if($user->id !== auth()->id())
                        <button type="button" onclick="confirmDelete()" 
                                class="w-full flex items-center px-4 py-2 text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-md transition-colors">
                            <i class="uil uil-trash-alt mr-2"></i> Delete User
                        </button>
                        
                        <form id="delete-form" method="POST" action="{{ route('admin.users.destroy', $user) }}" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                        @endif
                    </div>
                </div>

                <!-- Account Statistics -->
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                    <h6 class="text-lg font-semibold mb-4">Account Statistics</h6>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Days Active</span>
                            <span class="text-sm font-semibold text-gray-900 dark:text-white">{{ $user->created_at->diffInDays(now()) }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Account Status</span>
                            <span class="text-sm font-semibold text-green-600">Active</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Email Status</span>
                            @if($user->email_verified_at)
                                <span class="text-sm font-semibold text-green-600">Verified</span>
                            @else
                                <span class="text-sm font-semibold text-yellow-600">Pending</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function confirmDelete() {
    if (confirm('Are you sure you want to delete this user? This action cannot be undone.')) {
        document.getElementById('delete-form').submit();
    }
}
</script>

@endsection