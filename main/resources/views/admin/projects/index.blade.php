@extends('admin.layouts.main')

@section('title', 'Research Projects')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Projects Management</h5>
                <h6 class="text-slate-400 font-semibold">Manage research projects</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.projects.create') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                    <i class="uil uil-plus"></i> Add Project
                </a>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md" style="border:1px solid #ccc">
            {{ session('success') }}
        </div>
        @endif

        <!-- Projects Table -->
        <div class="mt-6">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                    <h6 class="text-lg font-semibold">Projects ({{ $projects->total() }})</h6>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Project</th>
                                <th scope="col" class="px-6 py-3">Type</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Featured</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $project)
                            <tr class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location='{{ route('admin.projects.edit', $project) }}'">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded overflow-hidden flex-shrink-0">
                                            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                                        </div>
                                        <div class="flex-grow min-w-0">
                                            <div class="font-medium text-gray-900 dark:text-white text-sm line-clamp-2">{{ $project->title }}</div>
                                            <div class="text-xs text-gray-500 mt-1">{{ Str::limit($project->description, 100) }}</div>
                                            @if($project->funding_source)
                                            <div class="text-xs text-blue-600">{{ $project->funding_source }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        @if($project->project_type === 'research') bg-blue-100 text-blue-800
                                        @elseif($project->project_type === 'development') bg-emerald-100 text-emerald-800
                                        @else bg-violet-100 text-violet-800
                                        @endif">
                                        {{ $project->type_display }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($project->status === 'active') bg-green-100 text-green-800
                                        @elseif($project->status === 'completed') bg-gray-100 text-gray-800
                                        @else bg-yellow-100 text-yellow-800
                                        @endif">
                                        {{ $project->status_display }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    @if($project->is_featured)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                        <i class="uil uil-star mr-1"></i> Featured
                                    </span>
                                    @else
                                    <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.projects.show', $project) }}" class="text-blue-600 hover:text-blue-800 text-xl" title="View">
                                            <i class="uil uil-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-indigo-600 hover:text-indigo-800 text-xl" title="Edit">
                                            <i class="uil uil-edit"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.projects.destroy', $project) }}" class="inline"
                                              onsubmit="return confirm('Are you sure you want to delete this project?')">
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
                                    No projects found. <a href="{{ route('admin.projects.create') }}" class="text-blue-600 hover:text-blue-800">Add the first project</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($projects->hasPages())
                <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-800">
                    {{ $projects->links() }}
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