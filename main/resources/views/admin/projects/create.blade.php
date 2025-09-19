@extends('admin.layouts.main')

@section('title', 'Add New Project')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Add New Project</h5>
                <h6 class="text-slate-400 font-semibold">Create a new research project</h6>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('admin.projects') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 hover:bg-gray-200 border-gray-200 text-gray-700 rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Projects
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="mt-6">
            <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                @csrf

                <!-- Main Information -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Basic Project Info -->
                    <div class="relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6" style="overflow: visible;">
                        <h6 class="text-lg font-semibold mb-6">Project Details</h6>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Title -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Project Title *</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Description *</label>
                                <textarea id="description" name="description" rows="4" required
                                    placeholder="Describe the project objectives, methodology, and expected outcomes..."
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('description') }}</textarea>
                                @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Project Duration -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <!-- Start Date -->
                                <div>
                                    <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Start Date</label>
                                    <div class="relative">
                                        <input type="text" id="start_date_display" readonly
                                            class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white cursor-pointer"
                                            placeholder="Select start date">
                                        <input type="hidden" id="start_date" name="start_date" value="{{ old('start_date', date('Y-m')) }}">
                                        <div class="absolute pointer-events-none z-20" style="top: 10px; right: 10px;">
                                            <i class="uil uil-calendar-alt text-gray-400"></i>
                                        </div>
                                        <!-- Custom Calendar Dropdown -->
                                        <div id="start_date_calendar" class="hidden absolute mt-1 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-xl p-4 w-64 z-50">
                                            <div class="flex justify-between items-center mb-3">
                                                <button type="button" id="start_prev_year" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-600 rounded">
                                                    <i class="uil uil-angle-left-b"></i>
                                                </button>
                                                <select id="start_year_select" class="mx-2 px-2 py-1 border rounded dark:bg-gray-600 dark:border-gray-500">
                                                    <!-- Years will be populated by JavaScript -->
                                                </select>
                                                <button type="button" id="start_next_year" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-600 rounded">
                                                    <i class="uil uil-angle-right-b"></i>
                                                </button>
                                            </div>
                                            <div class="grid grid-cols-3 gap-2">
                                                <!-- Months will be populated by JavaScript -->
                                            </div>
                                            <div class="mt-3 flex justify-between">
                                                <button type="button" id="start_clear_date" class="px-3 py-1 text-sm text-gray-500 hover:text-gray-700">Clear</button>
                                                <button type="button" id="start_close_calendar" class="px-3 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                    @error('start_date')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- End Date -->
                                <div>
                                    <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">End Date</label>
                                    <div class="relative">
                                        <input type="text" id="end_date_display" readonly
                                            class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white cursor-pointer"
                                            placeholder="Select end date">
                                        <input type="hidden" id="end_date" name="end_date" value="{{ old('end_date') }}">
                                        <div class="absolute pointer-events-none z-20" style="top: 10px; right: 10px;">
                                            <i class="uil uil-calendar-alt text-gray-400"></i>
                                        </div>
                                        <!-- Custom Calendar Dropdown -->
                                        <div id="end_date_calendar" class="hidden absolute mt-1 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-xl p-4 w-64 z-50">
                                            <div class="flex justify-between items-center mb-3">
                                                <button type="button" id="end_prev_year" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-600 rounded">
                                                    <i class="uil uil-angle-left-b"></i>
                                                </button>
                                                <select id="end_year_select" class="mx-2 px-2 py-1 border rounded dark:bg-gray-600 dark:border-gray-500">
                                                    <!-- Years will be populated by JavaScript -->
                                                </select>
                                                <button type="button" id="end_next_year" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-600 rounded">
                                                    <i class="uil uil-angle-right-b"></i>
                                                </button>
                                            </div>
                                            <div class="grid grid-cols-3 gap-2" id="end_months_grid">
                                                <!-- Months will be populated by JavaScript -->
                                            </div>
                                            <div class="mt-3 flex justify-between">
                                                <button type="button" id="end_clear_date" class="px-3 py-1 text-sm text-gray-500 hover:text-gray-700">Clear</button>
                                                <button type="button" id="end_close_calendar" class="px-3 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                    @error('end_date')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                    <p class="text-sm text-gray-500 mt-1">Leave empty for ongoing projects</p>
                                </div>
                            </div>

                            <!-- Research Topics -->
                            <div>
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
                                <p class="text-sm text-gray-500 mt-1">Select up to 5 categories for this project</p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Settings Sidebar -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Image Upload -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-4">Project Image</h6>
                        <div class="space-y-4">
                            <div class="relative">
                                <input type="file" id="image" name="image" accept="image/*" class="sr-only">
                                <label for="image" class="cursor-pointer inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600">
                                    <i class="uil uil-upload mr-2"></i>
                                    Choose Image File
                                </label>
                                <span id="file-name-project" class="ml-3 text-sm text-gray-500">No file selected</span>
                            </div>
                            @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-sm text-gray-500">Upload an image for the project. Will be cropped to square and resized to 200x200px. Max size: 2MB</p>

                            <script>
                                document.getElementById('image').addEventListener('change', function(e) {
                                    const fileName = e.target.files[0] ? e.target.files[0].name : 'No file selected';
                                    document.getElementById('file-name-project').textContent = fileName;
                                });
                            </script>
                        </div>
                    </div>

                    <!-- Lab Members Contributions -->
                    <div class="relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6" style="overflow: visible;">
                        <h6 class="text-lg font-semibold mb-6">Lab Members Contributions</h6>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Select up to 10 lab members working on this project.</p>

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

                    <!-- Project Settings -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <h6 class="text-lg font-semibold mb-4">Project Settings</h6>

                        <!-- Type -->
                        <div class="mb-4">
                            <label for="project_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Project Type *</label>
                            <select id="project_type" name="project_type" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @foreach(\App\Models\Project::getProjectTypes() as $key => $value)
                                    <option value="{{ $key }}" {{ old('project_type', 'research') === $key ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            @error('project_type')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Status *</label>
                            <select id="status" name="status" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @foreach(\App\Models\Project::getProjectStatuses() as $key => $value)
                                    <option value="{{ $key }}" {{ old('status', 'active') === $key ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            @error('status')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Position Order -->
                        <div class="mb-4">
                            <label for="position_order" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Display Order</label>
                            <input type="number" id="position_order" name="position_order" value="{{ old('position_order', 0) }}" min="0"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @error('position_order')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-sm text-gray-500 mt-1">Lower numbers appear first (0 = highest priority)</p>
                        </div>

                        <!-- Featured Project -->
                        <div class="flex items-center">
                            <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="is_featured" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Featured Project</label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6">
                        <button type="submit" 
                            class="w-full py-3 px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 text-white rounded-md">
                            <i class="uil uil-check"></i> Create Project
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

    // Year-Month Calendar Widget
    function initYearMonthCalendar(prefix) {
        const displayInput = document.getElementById(`${prefix}_date_display`);
        const hiddenInput = document.getElementById(`${prefix}_date`);
        const calendar = document.getElementById(`${prefix}_date_calendar`);
        const yearSelect = document.getElementById(`${prefix}_year_select`);
        const prevYearBtn = document.getElementById(`${prefix}_prev_year`);
        const nextYearBtn = document.getElementById(`${prefix}_next_year`);
        const monthsGrid = calendar.querySelector('.grid-cols-3');
        const clearBtn = document.getElementById(`${prefix}_clear_date`);
        const closeBtn = document.getElementById(`${prefix}_close_calendar`);

        const months = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        ];

        let currentYear = new Date().getFullYear();
        let selectedYear = currentYear;
        let selectedMonth = null;

        // Initialize year options
        function populateYears() {
            yearSelect.innerHTML = '';
            for (let year = currentYear - 10; year <= currentYear + 10; year++) {
                const option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                if (year === selectedYear) option.selected = true;
                yearSelect.appendChild(option);
            }
        }

        // Initialize months grid
        function populateMonths() {
            monthsGrid.innerHTML = '';
            months.forEach((month, index) => {
                const monthBtn = document.createElement('button');
                monthBtn.type = 'button';
                monthBtn.className = 'px-3 py-2 text-sm rounded hover:bg-blue-100 dark:hover:bg-blue-800';
                monthBtn.textContent = month;
                monthBtn.dataset.month = index + 1;

                if (selectedMonth === index + 1) {
                    monthBtn.classList.add('bg-blue-600', 'text-white');
                }

                monthBtn.addEventListener('click', function() {
                    selectedMonth = parseInt(this.dataset.month);
                    updateSelectedDate();
                    populateMonths(); // Refresh to show selection
                });

                monthsGrid.appendChild(monthBtn);
            });
        }

        // Update the selected date
        function updateSelectedDate() {
            if (selectedYear && selectedMonth) {
                const formattedDate = `${selectedYear}-${selectedMonth.toString().padStart(2, '0')}`;
                const displayDate = `${months[selectedMonth - 1]} ${selectedYear}`;

                hiddenInput.value = formattedDate;
                displayInput.value = displayDate;
            }
        }

        // Initialize with existing value
        function initializeFromValue() {
            const existingValue = hiddenInput.value;
            if (existingValue) {
                const [year, month] = existingValue.split('-');
                selectedYear = parseInt(year);
                selectedMonth = parseInt(month);
                currentYear = selectedYear;
                updateSelectedDate();
            }
        }

        // Event listeners
        displayInput.addEventListener('click', function() {
            calendar.classList.toggle('hidden');
            populateYears();
            populateMonths();
        });

        yearSelect.addEventListener('change', function() {
            selectedYear = parseInt(this.value);
        });

        prevYearBtn.addEventListener('click', function() {
            currentYear--;
            selectedYear = currentYear;
            populateYears();
        });

        nextYearBtn.addEventListener('click', function() {
            currentYear++;
            selectedYear = currentYear;
            populateYears();
        });

        clearBtn.addEventListener('click', function() {
            selectedYear = null;
            selectedMonth = null;
            hiddenInput.value = '';
            displayInput.value = '';
            calendar.classList.add('hidden');
        });

        closeBtn.addEventListener('click', function() {
            calendar.classList.add('hidden');
        });

        // Close calendar when clicking outside
        document.addEventListener('click', function(e) {
            if (!displayInput.contains(e.target) && !calendar.contains(e.target)) {
                calendar.classList.add('hidden');
            }
        });

        // Initialize
        initializeFromValue();
    }

    // Initialize both calendars
    initYearMonthCalendar('start');
    initYearMonthCalendar('end');
});
</script>
@endpush