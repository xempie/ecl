@extends('admin.layouts.main')

@section('title', 'Add New Publication')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Add New Publication</h5>
                <h6 class="text-slate-400 font-semibold">Create a new research publication</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.publications') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 hover:bg-gray-200 border-gray-200 text-gray-700 rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Publications
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="mt-6">
            <form method="POST" action="{{ route('admin.publications.store') }}" enctype="multipart/form-data" class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                @csrf

                <!-- Main Information -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Basic Publication Info -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-6">Publication Details</h6>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Title -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title *</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Authors -->
                            <div>
                                <label for="authors" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Authors *</label>
                                <textarea id="authors" name="authors" rows="2" required
                                    placeholder="List all authors as they appear in the publication (e.g., Smith, J., Johnson, M., Brown, K.)"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('authors') }}</textarea>
                                @error('authors')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                                <p class="text-sm text-gray-500 mt-1">This is for display purposes. Select lab members below to link them to this publication.</p>
                            </div>

                            <!-- Abstract -->
                            <div>
                                <label for="abstract" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Abstract</label>
                                <textarea id="abstract" name="abstract" rows="4"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('abstract') }}</textarea>
                                @error('abstract')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Publication Venue -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="journal" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Journal</label>
                                    <input type="text" id="journal" name="journal" value="{{ old('journal') }}"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    @error('journal')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="conference" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Conference</label>
                                    <input type="text" id="conference" name="conference" value="{{ old('conference') }}"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    @error('conference')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Year -->
                            <div class="grid md:grid-cols-1 gap-4">
                                <div>
                                    <label for="year" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Year *</label>
                                    <input type="number" id="year" name="year" value="{{ old('year', date('Y')) }}" required min="1900" max="{{ date('Y') + 5 }}"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    @error('year')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- DOI -->
                            <div>
                                <label for="doi" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">DOI</label>
                                <input type="text" id="doi" name="doi" value="{{ old('doi') }}"
                                    placeholder="10.1000/xyz123"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('doi')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Publication URL -->
                            <div>
                                <label for="url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Publication URL</label>
                                <input type="url" id="url" name="url" value="{{ old('url') }}"
                                    placeholder="https://example.com/paper"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('url')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Download URL -->
                            <div>
                                <label for="download_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Download URL</label>
                                <input type="url" id="download_url" name="download_url" value="{{ old('download_url') }}"
                                    placeholder="https://example.com/paper.pdf"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('download_url')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Sidebar -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Image Upload -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-4">Publication Image</h6>
                        <div class="space-y-4">
                            <div class="relative">
                                <input type="file" id="image" name="image" accept="image/*" class="sr-only">
                                <label for="image" class="cursor-pointer inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600">
                                    <i class="uil uil-upload mr-2"></i>
                                    Choose Image File
                                </label>
                                <span id="file-name-publication" class="ml-3 text-sm text-gray-500">No file selected</span>
                            </div>
                            @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-sm text-gray-500">Upload an image for the publication. Will be cropped to square and resized to 200x200px. Max size: 2MB</p>

                            <script>
                                document.getElementById('image').addEventListener('change', function(e) {
                                    const fileName = e.target.files[0] ? e.target.files[0].name : 'No file selected';
                                    document.getElementById('file-name-publication').textContent = fileName;
                                });
                            </script>
                        </div>
                    </div>

                    <!-- Lab Members Contributions -->
                    <div class="relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6" style="overflow: visible;">
                        <h6 class="text-lg font-semibold mb-6">Lab Members Contributions</h6>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Select up to 10 lab members who contributed to this publication.</p>

                        <!-- Member Search Container -->
                        <div class="relative mb-4" style="z-index: 1000;">
                            <!-- Member Search Input -->
                            <div class="relative">
                                <input type="text" id="member-search" placeholder="Search lab members..."
                                    class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <i class="uil uil-search text-gray-400"></i>
                                </div>
                            </div>

                            <!-- Search Results Dropdown -->
                            <div id="search-results" class="hidden absolute w-full mt-1 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-lg max-h-60 overflow-y-auto" style="z-index: 9999;">
                                <!-- Search results will appear here -->
                            </div>
                        </div>
                        
                        <!-- Selected Members (Tags) -->
                        <div id="selected-members" class="flex flex-wrap gap-2 mb-4 min-h-[40px]">
                            <!-- Selected member tags will appear here -->
                        </div>
                        
                        <!-- Debug Info -->
                        <div class="text-sm text-gray-500 mb-2">
                            Total members available: {{ $members->count() }}
                            @if($members->count() > 0)
                                ({{ $members->first()->name }} and others)
                            @endif
                        </div>
                        
                        <!-- Hidden inputs for form submission -->
                        <div id="member-inputs">
                            <!-- Hidden inputs will be added here -->
                        </div>
                    </div>

                    <!-- Publication Settings -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-4">Publication Settings</h6>

                        <!-- Type -->
                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Type *</label>
                            <select id="type" name="type" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @foreach(\App\Models\Publication::getPublicationTypes() as $key => $value)
                                    <option value="{{ $key }}" {{ old('type') === $key ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            @error('type')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        <!-- Related Project -->
                        <div class="mb-4">
                            <label for="project_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Related Project</label>
                            <select id="project_id" name="project_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <option value="">Select a project (optional)</option>
                                @forelse($projects as $project)
                                    <option value="{{ $project->id }}" {{ old('project_id') == $project->id ? 'selected' : '' }}>
                                        {{ $project->title }}
                                    </option>
                                @empty
                                    <option value="" disabled>No projects available</option>
                                @endforelse
                            </select>
                            @error('project_id')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-sm text-gray-500 mt-1">Link this publication to a research project (optional)</p>
                        </div>

                        <!-- Research Topics -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Research Topics</label>
                            <div class="space-y-2 max-h-40 overflow-y-auto border border-gray-300 dark:border-gray-600 rounded-md p-3">
                                @forelse($categories as $category)
                                    <div class="flex items-center">
                                        <input type="checkbox" id="category_{{ $category->id }}" name="categories[]" value="{{ $category->id }}"
                                            {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="category_{{ $category->id }}" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                            {{ $category->name }}
                                            @if($category->description)
                                                <span class="text-xs text-gray-500 block">{{ $category->description }}</span>
                                            @endif
                                        </label>
                                    </div>
                                @empty
                                    <p class="text-sm text-gray-500">No research topics available. <a href="{{ route('admin.categories.create') }}" class="text-blue-600 hover:text-blue-800">Create one</a></p>
                                @endforelse
                            </div>
                            @error('categories')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-sm text-gray-500 mt-1">Select up to 5 research topics for this publication</p>
                        </div>

                        <!-- Featured Publication -->
                        <div class="flex items-center">
                            <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="is_featured" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Featured Publication</label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <button type="submit" 
                            class="w-full py-3 px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                            <i class="uil uil-check"></i> Create Publication
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
console.log('Script loaded!');

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded - starting member search functionality');
    
    const memberSearch = document.getElementById('member-search');
    const searchResults = document.getElementById('search-results');
    const selectedMembers = document.getElementById('selected-members');
    const memberInputs = document.getElementById('member-inputs');
    
    console.log('Elements found:', {
        memberSearch: !!memberSearch,
        searchResults: !!searchResults,
        selectedMembers: !!selectedMembers,
        memberInputs: !!memberInputs
    });
    
    if (!memberSearch || !searchResults || !selectedMembers || !memberInputs) {
        console.error('Required elements not found!');
        return;
    }
    
    let selectedMemberIds = [];
    
    // Get members data from Laravel  
    const allMembers = {!! json_encode($members->map(function($member) {
        return [
            'id' => $member->id,
            'name' => $member->name,
            'title' => $member->title ?? ''
        ];
    })) !!};
    
    console.log('Members loaded:', allMembers.length, allMembers);
    
    // Search functionality
    memberSearch.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        console.log('Search query:', query);
        
        if (query.length === 0) {
            searchResults.classList.add('hidden');
            return;
        }
        
        const filteredMembers = allMembers.filter(member => 
            !selectedMemberIds.includes(member.id) && 
            (member.name.toLowerCase().includes(query) || member.title.toLowerCase().includes(query))
        );
        
        console.log('Filtered members:', filteredMembers.length);
        displaySearchResults(filteredMembers);
    });
    
    // Show all members when clicking on search input
    memberSearch.addEventListener('focus', function() {
        if (this.value.length === 0) {
            const availableMembers = allMembers.filter(member => !selectedMemberIds.includes(member.id));
            displaySearchResults(availableMembers);
        }
    });
    
    // Hide search results when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('#member-search') && !e.target.closest('#search-results')) {
            searchResults.classList.add('hidden');
        }
    });
    
    function displaySearchResults(members) {
        searchResults.innerHTML = '';
        
        if (members.length === 0) {
            searchResults.innerHTML = '<div class="p-3 text-gray-500 text-sm">No members found</div>';
        } else {
            members.slice(0, 10).forEach(member => { // Show max 10 results
                const div = document.createElement('div');
                div.className = 'p-3 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer border-b border-gray-100 dark:border-gray-600 last:border-b-0';
                div.innerHTML = `
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-semibold mr-3">
                            ${member.name.substring(0, 1).toUpperCase()}
                        </div>
                        <div>
                            <div class="font-medium text-sm text-gray-900 dark:text-white">${member.name}</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">${member.title}</div>
                        </div>
                    </div>
                `;
                
                div.addEventListener('click', function() {
                    if (selectedMemberIds.length < 10) {
                        addSelectedMember(member);
                        memberSearch.value = '';
                        searchResults.classList.add('hidden');
                    } else {
                        alert('Maximum 10 members allowed');
                    }
                });
                
                searchResults.appendChild(div);
            });
        }
        
        searchResults.classList.remove('hidden');
    }
    
    function addSelectedMember(member) {
        if (selectedMemberIds.includes(member.id)) {
            return;
        }
        
        selectedMemberIds.push(member.id);
        console.log('Added member:', member.name, 'Total:', selectedMemberIds.length);
        
        // Create tag
        const tag = document.createElement('div');
        tag.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 mr-2 mb-2';
        tag.dataset.memberId = member.id;
        tag.innerHTML = `
            <span class="mr-2">${member.name}</span>
            <button type="button" class="flex-shrink-0 ml-1 h-4 w-4 rounded-full inline-flex items-center justify-center text-blue-600 hover:bg-blue-200 hover:text-blue-800 dark:text-blue-300 dark:hover:bg-blue-800 dark:hover:text-blue-200 focus:outline-none focus:bg-blue-200 focus:text-blue-800">
                <i class="uil uil-times text-xs"></i>
            </button>
        `;
        
        // Add remove functionality
        tag.querySelector('button').addEventListener('click', function(e) {
            e.preventDefault();
            removeSelectedMember(member.id);
        });
        
        selectedMembers.appendChild(tag);
        
        // Create hidden input
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = `members[]`;
        input.value = member.id;
        input.dataset.memberId = member.id;
        memberInputs.appendChild(input);
    }
    
    function removeSelectedMember(memberId) {
        console.log('Removing member ID:', memberId);
        
        // Remove from selected list
        selectedMemberIds = selectedMemberIds.filter(id => id != memberId);
        
        // Remove tag
        const tag = selectedMembers.querySelector(`[data-member-id="${memberId}"]`);
        if (tag) {
            tag.remove();
        }
        
        // Remove hidden input
        const input = memberInputs.querySelector(`[data-member-id="${memberId}"]`);
        if (input) {
            input.remove();
        }
        
        console.log('Member removed. Total:', selectedMemberIds.length);
    }
});
</script>
@endpush