<!-- Recent Activities -->
<div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
    <div class="p-6 border-b border-gray-100 dark:border-gray-800">
        <div class="flex items-center justify-between">
            <h6 class="text-lg font-semibold">Recent Activities</h6>
            <a href="{{ url('/activities') }}" class="text-blue-600 hover:text-blue-800 text-sm">View All</a>
        </div>
    </div>
    
    <div class="p-6">
        <div class="space-y-4">
            <!-- Activity Item -->
            <div class="flex items-start space-x-4">
                <div class="size-10 bg-blue-600/10 text-blue-600 rounded-md flex items-center justify-center flex-shrink-0">
                    <i class="uil uil-user-plus text-lg"></i>
                </div>
                <div class="flex-grow">
                    <h6 class="text-sm font-semibold">New Lab Member Added</h6>
                    <p class="text-xs text-slate-400 mt-1">Dr. Sarah Johnson joined as Research Assistant</p>
                    <span class="text-xs text-slate-500">2 hours ago</span>
                </div>
            </div>
            
            <!-- Activity Item -->
            <div class="flex items-start space-x-4">
                <div class="size-10 bg-emerald-600/10 text-emerald-600 rounded-md flex items-center justify-center flex-shrink-0">
                    <i class="uil uil-book-alt text-lg"></i>
                </div>
                <div class="flex-grow">
                    <h6 class="text-sm font-semibold">Publication Added</h6>
                    <p class="text-xs text-slate-400 mt-1">"Empathic AI in Healthcare" - Nature AI Journal</p>
                    <span class="text-xs text-slate-500">5 hours ago</span>
                </div>
            </div>
            
            <!-- Activity Item -->
            <div class="flex items-start space-x-4">
                <div class="size-10 bg-violet-600/10 text-violet-600 rounded-md flex items-center justify-center flex-shrink-0">
                    <i class="uil uil-folder-plus text-lg"></i>
                </div>
                <div class="flex-grow">
                    <h6 class="text-sm font-semibold">Project Updated</h6>
                    <p class="text-xs text-slate-400 mt-1">VR Empathy Training milestone completed</p>
                    <span class="text-xs text-slate-500">1 day ago</span>
                </div>
            </div>
            
            <!-- Activity Item -->
            <div class="flex items-start space-x-4">
                <div class="size-10 bg-amber-600/10 text-amber-600 rounded-md flex items-center justify-center flex-shrink-0">
                    <i class="uil uil-newspaper text-lg"></i>
                </div>
                <div class="flex-grow">
                    <h6 class="text-sm font-semibold">News Posted</h6>
                    <p class="text-xs text-slate-400 mt-1">Lab wins Best Research Award 2024</p>
                    <span class="text-xs text-slate-500">2 days ago</span>
                </div>
            </div>
            
            <!-- Activity Item -->
            <div class="flex items-start space-x-4">
                <div class="size-10 bg-red-600/10 text-red-600 rounded-md flex items-center justify-center flex-shrink-0">
                    <i class="uil uil-envelope text-lg"></i>
                </div>
                <div class="flex-grow">
                    <h6 class="text-sm font-semibold">New Contact Message</h6>
                    <p class="text-xs text-slate-400 mt-1">Collaboration inquiry from MIT</p>
                    <span class="text-xs text-slate-500">3 days ago</span>
                </div>
            </div>
        </div>
    </div>
</div>