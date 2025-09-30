@extends('admin.layouts.main')

@section('title', 'Team Members')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Members Management</h5>
                <h6 class="text-slate-400 font-semibold">Manage research team members</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.members.create') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                    <i class="uil uil-plus"></i> Add Member
                </a>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md" style="border:1px solid #ccc">
            {{ session('success') }}
        </div>
        @endif

        <!-- Members Table -->
        <div class="mt-6">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                    <h6 class="text-lg font-semibold">Team Members ({{ $members->total() }})</h6>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Member</th>
                                <th scope="col" class="px-6 py-3">Lab Location</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Order</th>
                                <th scope="col" class="px-6 py-3">Featured</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($members as $member)
                            <tr class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location='{{ route('admin.members.edit', $member) }}'">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full overflow-hidden">
                                            <img src="{{ $member->image_url }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900 dark:text-white">{{ $member->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $member->title }}</div>
                                            @if($member->email)
                                            <div class="text-sm text-gray-500">{{ $member->email }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        @if($member->lab_location === 'auckland') bg-blue-100 text-blue-800
                                        @elseif($member->lab_location === 'adelaide') bg-emerald-100 text-emerald-800
                                        @else bg-violet-100 text-violet-800
                                        @endif">
                                        {{ ucfirst($member->lab_location) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-900 dark:text-white">{{ $member->member_category }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        @if($member->status === 'active') bg-green-100 text-green-800
                                        @elseif($member->status === 'inactive') bg-yellow-100 text-yellow-800
                                        @else bg-gray-100 text-gray-800
                                        @endif">
                                        {{ ucfirst($member->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-900 dark:text-white">{{ $member->position_order }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    @if($member->is_featured)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                        <i class="uil uil-star mr-1"></i> Featured
                                    </span>
                                    @else
                                    <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4 text-center" onclick="event.stopPropagation()">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a href="{{ route('admin.members.show', $member) }}" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-blue-600/5 hover:bg-blue-600 border border-blue-600/10 hover:border-blue-600 text-blue-600 hover:text-white rounded-md">
                                            <i class="uil uil-eye text-[16px]"></i>
                                        </a>
                                        <a href="{{ route('admin.members.edit', $member) }}" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-amber-600/5 hover:bg-amber-600 border border-amber-600/10 hover:border-amber-600 text-amber-600 hover:text-white rounded-md">
                                            <i class="uil uil-edit text-[16px]"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.members.destroy', $member) }}" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this member?')">
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
                                <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                                    No members found. <a href="{{ route('admin.members.create') }}" class="text-blue-600 hover:text-blue-800">Add the first member</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($members->hasPages())
                <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-800">
                    {{ $members->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection