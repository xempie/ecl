@extends('admin.layouts.main')

@section('title', 'Edit User')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Edit User</h5>
                <h6 class="text-slate-400 font-semibold">Update {{ $user->name }}'s account</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.users') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 hover:bg-gray-200 border-gray-200 text-gray-700 rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Users
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="mt-6">
            <form method="POST" action="{{ route('admin.users.update', $user) }}" class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                @csrf
                @method('PUT')

                <!-- Main Information -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Basic User Info -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-6">User Details</h6>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">New Password</label>
                                <input type="password" id="password" name="password"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                                <p class="text-sm text-gray-500 mt-1">Leave blank to keep current password</p>
                            </div>

                            <!-- Confirm Password -->
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Confirm New Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('password_confirmation')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Sidebar -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Account Info -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-4">Account Info</h6>
                        
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <span class="text-sm text-gray-600 dark:text-gray-400">ID:</span>
                                <span class="text-sm font-medium text-gray-900 dark:text-white ml-2">{{ $user->id }}</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-600 dark:text-gray-400">Created:</span>
                                <span class="text-sm font-medium text-gray-900 dark:text-white ml-2">{{ $user->created_at->format('M d, Y') }}</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-600 dark:text-gray-400">Last Updated:</span>
                                <span class="text-sm font-medium text-gray-900 dark:text-white ml-2">{{ $user->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- User Settings -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-4">User Settings</h6>

                        <!-- Role -->
                        <div class="mb-4">
                            <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Role *</label>
                            <select id="role" name="role" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <option value="user" {{ old('role', $user->role ?? 'user') === 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ old('role', $user->role ?? 'user') === 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="editor" {{ old('role', $user->role ?? 'user') === 'editor' ? 'selected' : '' }}>Editor</option>
                            </select>
                            @error('role')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Verification Status -->
                        <div class="mb-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Email Status:</span>
                                @if($user->email_verified_at)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <i class="uil uil-check-circle mr-1"></i> Verified
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <i class="uil uil-clock mr-1"></i> Unverified
                                    </span>
                                @endif
                            </div>
                            @if(!$user->email_verified_at)
                            <div class="mt-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="verify_email" name="verify_email" value="1"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="verify_email" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Mark email as verified</label>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <button type="submit" 
                            class="w-full py-3 px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                            <i class="uil uil-check"></i> Update User
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection