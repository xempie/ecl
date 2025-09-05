@extends('admin.layouts.main')

@section('title', 'View Member')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Member Details</h5>
                <h6 class="text-slate-400 font-semibold">{{ $member->name }}</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.members.edit', $member) }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                    <i class="uil uil-edit"></i> Edit Member
                </a>
                <a href="{{ route('admin.members') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 hover:bg-gray-200 border-gray-200 text-gray-700 rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Members
                </a>
            </div>
        </div>

        <!-- Member Profile -->
        <div class="mt-6">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                <!-- Profile Card -->
                <div class="lg:col-span-1">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <!-- Profile Image -->
                        <div class="text-center mb-6">
                            <img src="{{ $member->image_url }}" alt="{{ $member->name }}" class="w-32 h-32 rounded-lg object-cover mx-auto mb-4">
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">{{ $member->name }}</h4>
                            <p class="text-blue-600 font-medium">{{ $member->title }}</p>
                            
                            <!-- Status Badges -->
                            <div class="flex justify-center space-x-2 mt-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    @if($member->lab_location === 'auckland') bg-blue-100 text-blue-800
                                    @elseif($member->lab_location === 'adelaide') bg-emerald-100 text-emerald-800
                                    @else bg-violet-100 text-violet-800
                                    @endif">
                                    {{ ucfirst($member->lab_location) }} Lab
                                </span>
                                
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    @if($member->status === 'active') bg-green-100 text-green-800
                                    @elseif($member->status === 'inactive') bg-yellow-100 text-yellow-800
                                    @else bg-gray-100 text-gray-800
                                    @endif">
                                    {{ ucfirst($member->status) }}
                                </span>
                            </div>

                            @if($member->is_featured)
                            <div class="mt-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    <i class="uil uil-star mr-1"></i> Featured Member
                                </span>
                            </div>
                            @endif
                        </div>

                        <!-- Contact Information -->
                        <div class="space-y-4">
                            @if($member->email)
                            <div class="flex items-center">
                                <i class="uil uil-envelope text-gray-400 mr-3"></i>
                                <a href="mailto:{{ $member->email }}" class="text-blue-600 hover:text-blue-800">{{ $member->email }}</a>
                            </div>
                            @endif

                            @if($member->phone)
                            <div class="flex items-center">
                                <i class="uil uil-phone text-gray-400 mr-3"></i>
                                <span class="text-gray-600">{{ $member->phone }}</span>
                            </div>
                            @endif

                            @if($member->social_linkedin)
                            <div class="flex items-center">
                                <i class="uil uil-linkedin text-gray-400 mr-3"></i>
                                <a href="{{ $member->social_linkedin }}" target="_blank" class="text-blue-600 hover:text-blue-800">LinkedIn Profile</a>
                            </div>
                            @endif

                            @if($member->social_website)
                            <div class="flex items-center">
                                <i class="uil uil-globe text-gray-400 mr-3"></i>
                                <a href="{{ $member->social_website }}" target="_blank" class="text-blue-600 hover:text-blue-800">Personal Website</a>
                            </div>
                            @endif

                            @if($member->social_google_scholar)
                            <div class="flex items-center">
                                <i class="uil uil-graduation-cap text-gray-400 mr-3"></i>
                                <a href="{{ $member->social_google_scholar }}" target="_blank" class="text-blue-600 hover:text-blue-800">Google Scholar</a>
                            </div>
                            @endif

                            @if($member->social_email)
                            <div class="flex items-center">
                                <i class="uil uil-at text-gray-400 mr-3"></i>
                                <a href="mailto:{{ $member->social_email }}" class="text-blue-600 hover:text-blue-800">{{ $member->social_email }}</a>
                            </div>
                            @endif
                        </div>

                        <!-- Member Settings -->
                        <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <h6 class="text-sm font-semibold text-gray-900 dark:text-white mb-3">Member Settings</h6>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Category:</span>
                                    <span class="text-gray-900 dark:text-white">{{ $member->member_category }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Display Order:</span>
                                    <span class="text-gray-900 dark:text-white">{{ $member->position_order }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Slug:</span>
                                    <span class="text-gray-900 dark:text-white font-mono text-xs">{{ $member->slug }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Details -->
                <div class="lg:col-span-2">
                    <!-- Biography -->
                    @if($member->bio)
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mb-6">
                        <h6 class="text-lg font-semibold mb-4">Biography</h6>
                        <div class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {!! nl2br(e($member->bio)) !!}
                        </div>
                    </div>
                    @endif

                    <!-- Research Interests -->
                    @if($member->research_interests)
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mb-6">
                        <h6 class="text-lg font-semibold mb-4">Research Interests</h6>
                        <div class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {!! nl2br(e($member->research_interests)) !!}
                        </div>
                    </div>
                    @endif

                    <!-- Qualifications -->
                    @if($member->qualifications)
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mb-6">
                        <h6 class="text-lg font-semibold mb-4">Qualifications</h6>
                        <div class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {!! nl2br(e($member->qualifications)) !!}
                        </div>
                    </div>
                    @endif

                    <!-- Achievements -->
                    @if($member->achievements)
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mb-6">
                        <h6 class="text-lg font-semibold mb-4">Achievements</h6>
                        <div class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {!! nl2br(e($member->achievements)) !!}
                        </div>
                    </div>
                    @endif

                    <!-- Member History -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-4">Member History</h6>
                        <div class="text-gray-600 dark:text-gray-300 text-sm space-y-2">
                            <div class="flex justify-between">
                                <span>Created:</span>
                                <span>{{ $member->created_at->format('M d, Y \a\t g:i A') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Last Updated:</span>
                                <span>{{ $member->updated_at->format('M d, Y \a\t g:i A') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Public Profile:</span>
                                <a href="{{ url('/team/' . $member->slug) }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                    View Public Profile <i class="uil uil-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="mt-6 flex justify-center space-x-4">
            <a href="{{ route('admin.members.edit', $member) }}" class="py-3 px-8 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                <i class="uil uil-edit"></i> Edit Member
            </a>
            <form method="POST" action="{{ route('admin.members.destroy', $member) }}" class="inline" 
                  onsubmit="return confirm('Are you sure you want to delete this member? This action cannot be undone.')">
                @csrf
                @method('DELETE')
                <button type="submit" class="py-3 px-8 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-red-600 hover:bg-red-700 border-red-600 text-white rounded-md">
                    <i class="uil uil-trash"></i> Delete Member
                </button>
            </form>
        </div>
    </div>
</div>

@endsection