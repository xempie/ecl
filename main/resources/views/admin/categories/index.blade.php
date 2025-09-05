@extends('admin.layouts.main')

@section('title', 'Categories')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Categories Management</h5>
                <h6 class="text-slate-400 font-semibold">Manage publication and project categories</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.categories.create') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                    <i class="uil uil-plus"></i> Add Category
                </a>
            </div>
        </div>

        <!-- Success/Error Messages -->
        @if(session('success'))
        <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
            {{ session('error') }}
        </div>
        @endif

        <!-- Categories Table -->
        <div class="mt-6">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                    <h6 class="text-lg font-semibold">Categories ({{ $categories->total() }})</h6>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Description</th>
                                <th scope="col" class="px-6 py-3">Usage</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Order</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 rounded-full mr-3 flex-shrink-0" style="background-color: {{ $category->color }}"></div>
                                        <div class="flex-grow min-w-0">
                                            <div class="font-medium text-gray-900 dark:text-white text-sm">{{ $category->name }}</div>
                                            <div class="text-xs text-gray-500">{{ $category->slug }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 dark:text-white">
                                        {{ $category->description ? Str::limit($category->description, 50) : '-' }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 dark:text-white">
                                        @if($category->publications_count > 0 || $category->projects_count > 0)
                                            <div class="flex space-x-2">
                                                @if($category->publications_count > 0)
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                    {{ $category->publications_count }} Publications
                                                </span>
                                                @endif
                                                @if($category->projects_count > 0)
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    {{ $category->projects_count }} Projects
                                                </span>
                                                @endif
                                            </div>
                                        @else
                                            <span class="text-gray-400">Not used</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    @if($category->is_active)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <i class="uil uil-check-circle mr-1"></i> Active
                                    </span>
                                    @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        <i class="uil uil-times-circle mr-1"></i> Inactive
                                    </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-900 dark:text-white font-medium">{{ $category->position_order }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.categories.show', $category) }}" class="text-blue-600 hover:text-blue-800" title="View">
                                            <i class="uil uil-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.categories.edit', $category) }}" class="text-indigo-600 hover:text-indigo-800" title="Edit">
                                            <i class="uil uil-edit"></i>
                                        </a>
                                        @if($category->publications_count == 0 && $category->projects_count == 0)
                                        <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" class="inline" 
                                              onsubmit="return confirm('Are you sure you want to delete this category?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800" title="Delete">
                                                <i class="uil uil-trash"></i>
                                            </button>
                                        </form>
                                        @else
                                        <span class="text-gray-400" title="Cannot delete category in use">
                                            <i class="uil uil-trash"></i>
                                        </span>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                    No categories found. <a href="{{ route('admin.categories.create') }}" class="text-blue-600 hover:text-blue-800">Add the first category</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($categories->hasPages())
                <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-800">
                    {{ $categories->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection