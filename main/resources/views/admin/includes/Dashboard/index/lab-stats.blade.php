<!-- Lab Statistics Cards -->
<!-- Team Members Stats -->
<div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <div>
                <h6 class="text-slate-400 font-semibold text-sm">Lab Members</h6>
                <h3 class="text-2xl font-bold">{{ $stats['members']['total'] }}</h3>
                <div class="flex items-center {{ $stats['members']['this_month'] > 0 ? 'text-green-600' : 'text-slate-500' }} mt-2">
                    @if($stats['members']['this_month'] > 0)
                        <i class="uil uil-arrow-up text-xs me-1"></i>
                        <span class="text-xs">+{{ $stats['members']['this_month'] }} this month</span>
                    @else
                        <i class="uil uil-minus text-xs me-1"></i>
                        <span class="text-xs">No new members this month</span>
                    @endif
                </div>
            </div>
            <div class="size-14 bg-blue-600/5 text-blue-600 rounded-md flex items-center justify-center">
                <i class="uil uil-users-alt text-2xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Publications Stats -->
<div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <div>
                <h6 class="text-slate-400 font-semibold text-sm">Publications</h6>
                <h3 class="text-2xl font-bold">{{ $stats['publications']['total'] }}</h3>
                <div class="flex items-center {{ $stats['publications']['this_quarter'] > 0 ? 'text-green-600' : 'text-slate-500' }} mt-2">
                    @if($stats['publications']['this_quarter'] > 0)
                        <i class="uil uil-arrow-up text-xs me-1"></i>
                        <span class="text-xs">+{{ $stats['publications']['this_quarter'] }} this quarter</span>
                    @else
                        <i class="uil uil-minus text-xs me-1"></i>
                        <span class="text-xs">No new publications this quarter</span>
                    @endif
                </div>
            </div>
            <div class="size-14 bg-emerald-600/5 text-emerald-600 rounded-md flex items-center justify-center">
                <i class="uil uil-book-alt text-2xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Active Projects Stats -->
<div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <div>
                <h6 class="text-slate-400 font-semibold text-sm">Active Projects</h6>
                <h3 class="text-2xl font-bold">{{ $stats['projects']['active'] ?? $stats['projects']['total'] }}</h3>
                <div class="flex items-center {{ $stats['projects']['new_projects'] > 0 ? 'text-green-600' : 'text-slate-500' }} mt-2">
                    @if($stats['projects']['new_projects'] > 0)
                        <i class="uil uil-arrow-up text-xs me-1"></i>
                        <span class="text-xs">{{ $stats['projects']['new_projects'] }} new projects</span>
                    @else
                        <i class="uil uil-folder text-xs me-1"></i>
                        <span class="text-xs">{{ $stats['projects']['total'] }} total projects</span>
                    @endif
                </div>
            </div>
            <div class="size-14 bg-violet-600/5 text-violet-600 rounded-md flex items-center justify-center">
                <i class="uil uil-folder-open text-2xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Research Areas Stats -->
<div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <div>
                <h6 class="text-slate-400 font-semibold text-sm">Research Areas</h6>
                <h3 class="text-2xl font-bold">{{ $stats['categories']['research_areas'] > 0 ? $stats['categories']['research_areas'] : 4 }}</h3>
                <div class="flex items-center text-slate-500 mt-2">
                    <i class="uil uil-flask text-xs me-1"></i>
                    <span class="text-xs">
                        @if($stats['categories']['research_areas'] > 0)
                            {{ $stats['categories']['total'] }} total categories
                        @else
                            AI, AR, VR, HCI
                        @endif
                    </span>
                </div>
            </div>
            <div class="size-14 bg-amber-600/5 text-amber-600 rounded-md flex items-center justify-center">
                <i class="uil uil-flask text-2xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Contact Messages Stats -->
<div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <div>
                <h6 class="text-slate-400 font-semibold text-sm">New Messages</h6>
                <h3 class="text-2xl font-bold">{{ $stats['contacts']['unread'] }}</h3>
                <div class="flex items-center {{ $stats['contacts']['unread'] > 0 ? 'text-red-600' : 'text-green-600' }} mt-2">
                    @if($stats['contacts']['unread'] > 0)
                        <i class="uil uil-envelope-alt text-xs me-1"></i>
                        <span class="text-xs">Requires attention</span>
                    @else
                        <i class="uil uil-check text-xs me-1"></i>
                        <span class="text-xs">All messages read</span>
                    @endif
                </div>
            </div>
            <div class="size-14 bg-red-600/5 text-red-600 rounded-md flex items-center justify-center">
                <i class="uil uil-envelope text-2xl"></i>
            </div>
        </div>
    </div>
</div>