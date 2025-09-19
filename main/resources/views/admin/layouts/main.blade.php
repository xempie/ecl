<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Admin Dashboard') - Empathic Computing Lab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Empathic Computing Research Lab - Admin Dashboard for managing research publications, projects, team members and lab activities">
        <meta name="keywords" content="empathic computing, research lab, admin dashboard, AI research, AR research, VR research, HCI research">
        <meta name="author" content="Empathic Computing Research Lab">
        <meta name="website" content="https://empathiccomputing.org">
        <meta name="version" content="1.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

        <!-- Css -->
        <link href="{{ asset('admin/assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('admin/assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <!-- Google Fonts - Rubik -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="{{ asset('admin/build/assets/app-Dd4ulLYK.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/tailwind.css') }}">

        <style>
            /* Rubik font family */
            .font-rubik {
                font-family: 'Rubik', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            }

            /* Apply Rubik to all elements */
            * {
                font-family: 'Rubik', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            }

            /* Custom body background color */
            body {
                background-color: rgb(246, 247, 250) !important;
            }

            /* Light blue text selection */
            ::selection {
                background-color: #dbeafe; /* Light blue background */
                color: #1e40af; /* Darker blue text */
            }

            ::-moz-selection {
                background-color: #dbeafe; /* Light blue background */
                color: #1e40af; /* Darker blue text */
            }
            
            /* Active submenu item styling */
            .sidebar-submenu a {
                position: relative;
                transition: all 0.3s ease;
            }
            
            .sidebar-submenu a.active {
                background-color: rgba(59, 130, 246, 0.1);
                border-left: 3px solid #3b82f6;
                color: #3b82f6 !important;
                font-weight: 600;
            }
            
            .sidebar-submenu a:hover {
                background-color: rgba(59, 130, 246, 0.05);
                padding-left: 1.25rem;
            }
            
            /* Dropdown arrow animation */
            .sidebar-dropdown.active > a::after {
                transform: rotate(90deg);
            }
            
            .sidebar-dropdown > a::after {
                content: '▶';
                position: absolute;
                right: 1rem;
                top: 50%;
                transform: translateY(-50%);
                transition: transform 0.3s ease;
                font-size: 0.75rem;
                opacity: 0.7;
            }
        </style>

    </head>
    
    <body class="font-rubik text-base text-slate-900 dark:text-white">

        <div class="page-wrapper toggled">

            @php
                $sidebarFiles = [
                    'side' => 'admin.includes.sidebar',
                    'side2' => 'admin.includes.sidebar2',
                    'side3' => 'admin.includes.sidebar3',
                ];
            @endphp

            @if(isset($Spage) && array_key_exists($Spage, $sidebarFiles))
                @include($sidebarFiles[$Spage])
            @else
                @include('admin.includes.sidebar')
            @endif
        
            <main class="page-content bg-gray-50 dark:bg-slate-800">

                <!-- includes/navbar.blade.php -->
                @include('admin.includes.navbar')

                <!-- Main Content -->
                <div class="content">
                    @yield('content')
                </div>

                <!-- includes/footer.blade.php -->
                @include('admin.includes.footer')

            </main>

        </div>
    


        <!-- JAVASCRIPTS -->
        <script src="{{ asset('admin/assets/libs/gumshoejs/gumshoe.polyfills.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/shufflejs/shuffle.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/fullcalendar/index.global.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/fullcalendar.init.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/apexchart.init.js') }}"></script>
        <script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script>
        <script src="{{ asset('admin/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/jsvectormap/maps/world.js') }}"></script>
        <script src="{{ asset('admin/assets/js/jsvectormap.init.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('admin/build/assets/app-T1DpEqax.js') }}"></script>
        <!-- JAVASCRIPTS -->

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const darkPages = ["index-dark","index-dark-rtl"]; // List of pages that should have 'dark' mode
                const htmlElement = document.documentElement; // Select the <html> tag
                const currentUrl = window.location.href; // Get the current URL
                //  Check if any dark mode page is in the URL
                const isDarkPage = darkPages.some(page => currentUrl.includes(page));
                
                if (isDarkPage) {
                    htmlElement.classList.add("dark");
                    htmlElement.classList.remove("light");
                } else { 
                    htmlElement.classList.add("light");
                    htmlElement.classList.remove("dark");
                }

                // Sidebar dropdown functionality with state persistence
                const dropdownItems = document.querySelectorAll('.sidebar-dropdown');
                const currentPath = window.location.pathname;
                
                // Function to check if current page is within a submenu
                function isSubmenuActive(submenu) {
                    const submenuLinks = submenu.querySelectorAll('a');
                    for (let link of submenuLinks) {
                        const href = link.getAttribute('href');
                        if (href) {
                            // Clean up the href for comparison
                            let cleanHref = href.replace(/^.*\/labadmin/, '/labadmin');
                            
                            // Exact match
                            if (currentPath === cleanHref || currentPath === href) {
                                return true;
                            }
                            
                            // Check if current path starts with the href (for edit/show pages)
                            if (currentPath.startsWith(cleanHref + '/') || currentPath.startsWith(href + '/')) {
                                return true;
                            }
                            
                            // More precise matching for create/edit pages
                            // Extract the base path (e.g., '/labadmin/categories' from '/labadmin/categories/create')
                            const basePathFromHref = cleanHref.replace(/(\/create|\/edit.*|\/\d+.*)$/, '');
                            const basePathFromCurrent = currentPath.replace(/(\/create|\/edit.*|\/\d+.*)$/, '');
                            
                            if (basePathFromHref && basePathFromCurrent && basePathFromHref === basePathFromCurrent) {
                                return true;
                            }
                        }
                    }
                    return false;
                }
                
                dropdownItems.forEach(item => {
                    const link = item.querySelector('a[href="javascript:void(0)"]');
                    const submenu = item.querySelector('.sidebar-submenu');
                    
                    if (link && submenu) {
                        // Check if this submenu should be open by default
                        const shouldBeOpen = isSubmenuActive(submenu);
                        
                        if (shouldBeOpen) {
                            submenu.style.display = 'block';
                            item.classList.add('active');
                        } else {
                            submenu.style.display = 'none';
                            item.classList.remove('active');
                        }
                        
                        link.addEventListener('click', function(e) {
                            e.preventDefault();
                            
                            // Close other dropdowns (but don't close if they contain active page)
                            dropdownItems.forEach(otherItem => {
                                if (otherItem !== item) {
                                    const otherSubmenu = otherItem.querySelector('.sidebar-submenu');
                                    if (otherSubmenu && !isSubmenuActive(otherSubmenu)) {
                                        otherSubmenu.style.display = 'none';
                                        otherItem.classList.remove('active');
                                    }
                                }
                            });
                            
                            // Toggle current dropdown
                            if (submenu.style.display === 'none' || submenu.style.display === '') {
                                submenu.style.display = 'block';
                                item.classList.add('active');
                            } else {
                                submenu.style.display = 'none';
                                item.classList.remove('active');
                            }
                        });
                    }
                });

                // Initialize all dropdowns first as closed, then open active ones
                document.querySelectorAll('.sidebar-submenu').forEach(submenu => {
                    submenu.style.display = 'none';
                });
                
                // Then open the active ones and highlight active submenu items
                dropdownItems.forEach(item => {
                    const submenu = item.querySelector('.sidebar-submenu');
                    if (submenu && isSubmenuActive(submenu)) {
                        submenu.style.display = 'block';
                        item.classList.add('active');
                        
                        // Highlight the specific active submenu item
                        const submenuLinks = submenu.querySelectorAll('a');
                        submenuLinks.forEach(link => {
                            const href = link.getAttribute('href');
                            if (href && (currentPath.includes(href.replace(/^.*\/labadmin/, '/labadmin')) || 
                                currentPath === href || 
                                currentPath.startsWith(href + '/') ||
                                (href.includes('create') && currentPath.includes('create')) ||
                                (href.includes('edit') && currentPath.includes('edit')))) {
                                link.classList.add('active');
                            } else {
                                link.classList.remove('active');
                            }
                        });
                    }
                });
            });
        </script>

        <!-- Page specific scripts -->
        @stack('scripts')

    </body>
</html>