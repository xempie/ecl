@extends('admin.layouts.main')

@section('title', 'Publications')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Publications Management</h5>
                <h6 class="text-slate-400 font-semibold">Manage research publications</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.publications.create') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                    <i class="uil uil-plus"></i> Add Publication
                </a>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md" style="border:1px solid #ccc">
            {{ session('success') }}
        </div>
        @endif

        <!-- Publications Table -->
        <div class="mt-6">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                    <h6 class="text-lg font-semibold">Publications ({{ $publications->total() }})</h6>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Publication</th>
                                <th scope="col" class="px-6 py-3">Type</th>
                                <th scope="col" class="px-6 py-3">Year</th>
                                <th scope="col" class="px-6 py-3">Featured</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($publications as $publication)
                            <tr class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location='{{ route('admin.publications.edit', $publication) }}'">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded overflow-hidden flex-shrink-0">
                                            <img src="{{ $publication->image_url }}" alt="{{ $publication->title }}" class="w-full h-full object-cover">
                                        </div>
                                        <div class="flex-grow min-w-0">
                                            <div class="font-medium text-gray-900 dark:text-white text-sm line-clamp-2">{{ $publication->title }}</div>
                                            <div class="text-xs text-gray-500 mt-1">{{ $publication->authors }}</div>
                                            @if($publication->journal)
                                            <div class="text-xs text-gray-500">{{ $publication->journal }}</div>
                                            @elseif($publication->conference)
                                            <div class="text-xs text-gray-500">{{ $publication->conference }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        @if($publication->type === 'journal') bg-blue-100 text-blue-800
                                        @elseif($publication->type === 'conference') bg-emerald-100 text-emerald-800
                                        @elseif($publication->type === 'book_chapter') bg-violet-100 text-violet-800
                                        @elseif($publication->type === 'workshop') bg-amber-100 text-amber-800
                                        @else bg-gray-100 text-gray-800
                                        @endif">
                                        {{ $publication->type_display }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-900 dark:text-white font-medium">{{ $publication->year }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    @if($publication->is_featured)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                        <i class="uil uil-star mr-1"></i> Featured
                                    </span>
                                    @else
                                    <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.publications.show', $publication) }}" class="text-blue-600 hover:text-blue-800 text-xl" title="View">
                                            <i class="uil uil-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.publications.edit', $publication) }}" class="text-indigo-600 hover:text-indigo-800 text-xl" title="Edit">
                                            <i class="uil uil-edit"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.publications.destroy', $publication) }}" class="inline"
                                              onsubmit="return confirm('Are you sure you want to delete this publication?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800 text-xl" title="Delete">
                                                <i class="uil uil-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                    No publications found. <a href="{{ route('admin.publications.create') }}" class="text-blue-600 hover:text-blue-800">Add the first publication</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($publications->hasPages())
                <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-800">
                    {{ $publications->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endpush