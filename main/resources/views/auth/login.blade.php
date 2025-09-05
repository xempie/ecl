<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Login - Empathic Computing Lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Empathic Computing Research Lab Admin Login" />
    <meta name="keywords" content="empathic computing, research lab, admin" />
    <meta name="author" content="Empathic Computing Lab" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    
    <!-- Main Css -->
    <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('admin/assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Google Fonts - Rubik -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/tailwind.css') }}">
    
    <style>
        /* Apply Rubik font to all elements */
        * {
            font-family: 'Rubik', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        
        /* Custom body background color */
        body {
            background-color: rgb(246, 247, 250) !important;
        }
    </style>

</head>

<body class="font-rubik text-base text-slate-900 dark:text-white">

<!-- Start -->
<section class="relative overflow-hidden h-screen flex items-center justify-center">
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-blue-100 dark:from-slate-800 dark:to-slate-900"></div>
    
    <div class="relative z-10">
        <div class="max-w-md w-full mx-auto">
            <div class="bg-white dark:bg-slate-900 shadow-xl rounded-lg overflow-hidden">
                <div class="p-8">
                    <!-- Logo -->
                    <div class="text-center mb-8">
                        <a href="{{ url('/') }}">
                            <div class="inline-flex items-center">
                                <div class="w-16 h-16 bg-indigo-600 text-white rounded-lg flex items-center justify-center text-2xl font-bold mr-3">
                                    EC
                                </div>
                                <div class="text-left">
                                    <div class="text-xl font-bold text-slate-900 dark:text-white">Empathic Computing</div>
                                    <div class="text-sm text-slate-500">Research Lab</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="text-center mb-8">
                        <h4 class="font-semibold text-2xl text-slate-900 dark:text-white mb-2">Admin Login</h4>
                        <p class="text-slate-400">Sign in to access the lab admin panel</p>
                    </div>

                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                            @foreach ($errors->all() as $error)
                                <p class="text-red-600 dark:text-red-400 text-sm">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <!-- Display status message -->
                    @if (session('status'))
                        <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg">
                            <p class="text-green-600 dark:text-green-400 text-sm">{{ session('status') }}</p>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label class="font-semibold text-slate-900 dark:text-white" for="email">Email Address:</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('email') border-red-500 @enderror" 
                                       placeholder="admin@empathinccomputing.org">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold text-slate-900 dark:text-white" for="password">Password:</label>
                                <input id="password" name="password" type="password" required
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('password') border-red-500 @enderror" 
                                       placeholder="Password">
                                @error('password')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" 
                                           type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-checkbox-label text-slate-400" for="remember">Remember me</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-slate-400 hover:text-indigo-600 text-sm">Forgot password?</a>
                                @endif
                            </div>

                            <div>
                                <button type="submit" class="py-2.5 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">
                                    Login / Sign in
                                </button>
                            </div>

                            <div class="text-center">
                                <span class="text-slate-400 me-2">Don't have an account?</span> 
                                <span class="text-slate-900 dark:text-white font-semibold">Contact the system administrator</span>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Footer -->
                <div class="px-8 py-4 bg-slate-50 dark:bg-slate-800 border-t border-slate-100 dark:border-slate-700">
                    <p class="text-center text-sm text-slate-400">© {{ date('Y') }} Empathic Computing Research Lab. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->

</body>

</html>