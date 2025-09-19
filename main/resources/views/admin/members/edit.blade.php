@extends('admin.layouts.main')

@section('title', 'Edit Member')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Edit Member</h5>
                <h6 class="text-slate-400 font-semibold">Update {{ $member->name }}'s profile</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.members') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 hover:bg-gray-200 border-gray-200 text-gray-700 rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Members
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="mt-6">
            <form method="POST" action="{{ route('admin.members.update', $member) }}" enctype="multipart/form-data" class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                @csrf
                @method('PUT')

                <!-- Main Information -->
                <div class="lg:col-span-2">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-6">Basic Information</h6>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $member->name) }}" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Slug -->
                            <div>
                                <label for="slug" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">SEO Slug</label>
                                <input type="text" id="slug" name="slug" value="{{ old('slug', $member->slug) }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('slug')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                                <p class="text-sm text-gray-500 mt-1">Leave empty to auto-generate from name</p>
                            </div>

                            <!-- Title -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title/Position *</label>
                                <select id="title" name="title" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <option value="">Select Position</option>
                                    @foreach(\App\Models\Member::getPositions() as $key => $value)
                                        <option value="{{ $key }}" {{ old('title', $member->title) === $key ? 'selected' : '' }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email and Phone -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email', $member->email) }}"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Phone</label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone', $member->phone) }}"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    @error('phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Bio -->
                            <div>
                                <label for="bio" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Biography</label>
                                <textarea id="bio" name="bio" rows="4"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('bio', $member->bio) }}</textarea>
                                @error('bio')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Research Information -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mt-6">
                        <h6 class="text-lg font-semibold mb-6">Research Information</h6>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Research Interests -->
                            <div>
                                <label for="research_interests" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Research Interests</label>
                                <textarea id="research_interests" name="research_interests" rows="3"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('research_interests', $member->research_interests) }}</textarea>
                                @error('research_interests')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Qualifications -->
                            <div>
                                <label for="qualifications" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Qualifications</label>
                                <textarea id="qualifications" name="qualifications" rows="3"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('qualifications', $member->qualifications) }}</textarea>
                                @error('qualifications')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Achievements -->
                            <div>
                                <label for="achievements" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Achievements</label>
                                <textarea id="achievements" name="achievements" rows="3"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('achievements', $member->achievements) }}</textarea>
                                @error('achievements')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mt-6">
                        <h6 class="text-lg font-semibold mb-6">Social Media & Links</h6>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- LinkedIn -->
                            <div>
                                <label for="social_linkedin" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">LinkedIn Profile</label>
                                <input type="url" id="social_linkedin" name="social_linkedin" value="{{ old('social_linkedin', $member->social_linkedin) }}"
                                    placeholder="https://linkedin.com/in/username"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('social_linkedin')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Social Email -->
                            <div>
                                <label for="social_email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Public Email</label>
                                <input type="email" id="social_email" name="social_email" value="{{ old('social_email', $member->social_email) }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('social_email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Website -->
                            <div>
                                <label for="social_website" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Personal Website</label>
                                <input type="url" id="social_website" name="social_website" value="{{ old('social_website', $member->social_website) }}"
                                    placeholder="https://yourwebsite.com"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('social_website')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Google Scholar -->
                            <div>
                                <label for="social_google_scholar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Google Scholar Profile</label>
                                <input type="url" id="social_google_scholar" name="social_google_scholar" value="{{ old('social_google_scholar', $member->social_google_scholar) }}"
                                    placeholder="https://scholar.google.com/citations?user=XXXXXXX"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('social_google_scholar')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Current Image -->
                    @if($member->image)
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mb-6">
                        <h6 class="text-lg font-semibold mb-4">Current Image</h6>
                        <img src="{{ $member->image_url }}" alt="{{ $member->name }}" class="w-32 h-32 rounded-lg object-cover mx-auto">
                    </div>
                    @endif

                    <!-- Image Upload -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mb-6">
                        <h6 class="text-lg font-semibold mb-4">{{ $member->image ? 'Update' : 'Upload' }} Profile Image</h6>
                        <div class="space-y-4">
                            <div class="relative">
                                <input type="file" id="image" name="image" accept="image/*" class="sr-only">
                                <label for="image" class="cursor-pointer inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600">
                                    <i class="uil uil-upload mr-2"></i>
                                    Choose Image File
                                </label>
                                <span id="file-name-edit" class="ml-3 text-sm text-gray-500">No file selected</span>
                            </div>
                            @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-sm text-gray-500">Upload a square image for best results. Max size: 2MB</p>

                            <script>
                                document.getElementById('image').addEventListener('change', function(e) {
                                    const fileName = e.target.files[0] ? e.target.files[0].name : 'No file selected';
                                    document.getElementById('file-name-edit').textContent = fileName;
                                });
                            </script>
                        </div>
                    </div>

                    <!-- Member Settings -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 mb-6">
                        <h6 class="text-lg font-semibold mb-4">Member Settings</h6>

                        <!-- Lab Location -->
                        <div class="mb-4">
                            <label for="lab_location" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Lab Location *</label>
                            <select id="lab_location" name="lab_location" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <option value="">Select Lab</option>
                                <option value="auckland" {{ old('lab_location', $member->lab_location) === 'auckland' ? 'selected' : '' }}>Auckland Lab</option>
                                <option value="adelaide" {{ old('lab_location', $member->lab_location) === 'adelaide' ? 'selected' : '' }}>Adelaide Lab</option>
                                <option value="director" {{ old('lab_location', $member->lab_location) === 'director' ? 'selected' : '' }}>Director</option>
                            </select>
                            @error('lab_location')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        <!-- Position Order -->
                        <div class="mb-4">
                            <label for="position_order" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Display Order</label>
                            <input type="number" id="position_order" name="position_order" value="{{ old('position_order', $member->position_order) }}" min="0"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @error('position_order')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-sm text-gray-500 mt-1">Lower numbers appear first</p>
                        </div>

                        <!-- Featured Member -->
                        <div class="flex items-center">
                            <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $member->is_featured) ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="is_featured" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Featured Member</label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <button type="submit" 
                            class="w-full py-3 px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                            <i class="uil uil-check"></i> Update Member
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection