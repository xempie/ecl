<!-- Quick Actions -->
<div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
    <div class="p-6 border-b border-gray-100 dark:border-gray-800">
        <h6 class="text-lg font-semibold">Quick Actions</h6>
    </div>
    
    <div class="p-6">
        <div class="grid grid-cols-2 gap-4">
            <!-- Add Member -->
            <a href="{{ url('/team-members/create') }}" class="flex flex-col items-center p-4 border border-gray-100 dark:border-gray-800 rounded-md hover:border-blue-600 hover:shadow-sm transition-all duration-300">
                <div class="size-12 bg-blue-600/10 text-blue-600 rounded-md flex items-center justify-center mb-3">
                    <i class="uil uil-user-plus text-xl"></i>
                </div>
                <span class="text-sm font-semibold text-center">Add Member</span>
            </a>
            
            <!-- Add Publication -->
            <a href="{{ url('/publications/create') }}" class="flex flex-col items-center p-4 border border-gray-100 dark:border-gray-800 rounded-md hover:border-emerald-600 hover:shadow-sm transition-all duration-300">
                <div class="size-12 bg-emerald-600/10 text-emerald-600 rounded-md flex items-center justify-center mb-3">
                    <i class="uil uil-book-alt text-xl"></i>
                </div>
                <span class="text-sm font-semibold text-center">Add Publication</span>
            </a>
            
            <!-- Add Project -->
            <a href="{{ url('/projects/create') }}" class="flex flex-col items-center p-4 border border-gray-100 dark:border-gray-800 rounded-md hover:border-violet-600 hover:shadow-sm transition-all duration-300">
                <div class="size-12 bg-violet-600/10 text-violet-600 rounded-md flex items-center justify-center mb-3">
                    <i class="uil uil-folder-plus text-xl"></i>
                </div>
                <span class="text-sm font-semibold text-center">Add Project</span>
            </a>
            
            <!-- Add News -->
            <a href="{{ url('/news/create') }}" class="flex flex-col items-center p-4 border border-gray-100 dark:border-gray-800 rounded-md hover:border-amber-600 hover:shadow-sm transition-all duration-300">
                <div class="size-12 bg-amber-600/10 text-amber-600 rounded-md flex items-center justify-center mb-3">
                    <i class="uil uil-newspaper text-xl"></i>
                </div>
                <span class="text-sm font-semibold text-center">Add News</span>
            </a>
        </div>
        
        <div class="mt-6 pt-6 border-t border-gray-100 dark:border-gray-800">
            <div class="grid grid-cols-1 gap-3">
                <a href="{{ url('/contact-messages') }}" class="flex items-center justify-between p-3 border border-gray-100 dark:border-gray-800 rounded-md hover:border-red-600 hover:shadow-sm transition-all duration-300">
                    <div class="flex items-center">
                        <div class="size-10 bg-red-600/10 text-red-600 rounded-md flex items-center justify-center me-3">
                            <i class="uil uil-envelope text-lg"></i>
                        </div>
                        <span class="text-sm font-semibold">Review Contact Messages</span>
                    </div>
                    <span class="size-6 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">8</span>
                </a>
                
                <a href="{{ url('/settings/general') }}" class="flex items-center p-3 border border-gray-100 dark:border-gray-800 rounded-md hover:border-gray-400 hover:shadow-sm transition-all duration-300">
                    <div class="size-10 bg-gray-600/10 text-gray-600 rounded-md flex items-center justify-center me-3">
                        <i class="uil uil-setting text-lg"></i>
                    </div>
                    <span class="text-sm font-semibold">Website Settings</span>
                </a>
            </div>
        </div>
    </div>
</div>