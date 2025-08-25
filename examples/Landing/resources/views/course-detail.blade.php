<!-- resources/views/course-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Course-Detail Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/course/cta.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <span class="bg-green-600 text-white text-xs font-bold px-2.5 py-0.5 rounded w-fit mx-auto h-5">$11/Lesson</span>
            <h3 class="mt-3 text-3xl leading-normal font-medium text-white">
                @if(!empty($item['title']))
                    {{ $item['title'] }}
                @else
                    Become a Professional Graphic Designer
                @endif
            </h3>
            <div class="flex items-center mx-auto mt-3">
                <img src="{{ !empty($item['img1']) ? asset($item['img1']) : asset('assets/images/client/01.jpg') }}" class="size-10 rounded-full shadow-md dark:shadow-gray-800" alt="">
                <a href="" class="font-semibold text-white block ms-3">
                    @if(!empty($item['name']))
                        {{ $item['name'] }}
                    @else
                        Calvin Carlo
                    @endif
                </a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block items-center mt-2 mx-3">
                <i class="uil uil-clock text-white"></i>
                <span class="text-white/60 ms-1">10 Weeks</span>
            </li>

            <li class="inline-block items-center mt-2 mx-3">
                <i class="uil uil-signal text-white"></i>
                <span class="text-white/60 ms-1">All Levels</span>
            </li>
            
            <li class="inline-block items-center mt-2 mx-3">
                <i class="uil uil-book-open text-white"></i>
                <span class="text-white/60 ms-1">16 Lessons</span>
            </li>
            
            <li class="inline-block items-center mt-2 mx-3">
                <i class="uil uil-cube text-white"></i>
                <span class="text-white/60 ms-1">0 Quiz</span>
            </li>
            
            <li class="inline-block items-center mt-2 mx-3">
                <i class="uil uil-book-reader text-white"></i>
                <span class="text-white/60 ms-1">5 Students</span>
            </li>
            
            <li class="inline-block items-center mt-2 mx-3">
                <i class="uil uil-shopping-cart text-white"></i>
                <a href="https://1.envato.market/techwind" target="_blank" class="text-white">Buy Now</a>
            </li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <h5 class="text-2xl font-semibold mb-5">Overview</h5>

            <p class="text-slate-400 mb-3">Ooh, name it after me! Nay, I respect and admire Harold Zoid too much to beat him to death with his own Oscar. Why would I want to know that? What's with you kids? Every other day it's food, food, food. Alright, I'll get you some stupid food.</p>
            <p class="text-slate-400 mb-3">It's a T. It goes “tuh”. You seem malnourished. Are you suffering from intestinal parasites? I suppose I could part with 'one' and still be feared… And I'd do it again! And perhaps a third time! But that would be it.</p>
            <p class="text-slate-400 mb-3">I'm just glad my fat, ugly mama isn't alive to see this day. I can explain. It's very valuable. I barely knew Philip, but as a clergyman I have no problem telling his most intimate friends all about him.</p>
            <p class="text-slate-400 mb-3">Bender, we're trying our best. Kif might! You can crush me but you can't crush my spirit! Kif, I have mated with a woman. Inform the men. I'm Santa Claus!</p>
            <p class="text-slate-400">What are you hacking off? Is it my torso?! 'It is!' My precious torso! You, a bobsleder!? That I'd like to see! And I'd do it again! And perhaps a third time! But that would be it. My fellow Earthicans, as I have explained in my book 'Earth in the Balance”, and the much more popular ”Harry Potter and the Balance of Earth', we need to defend our planet against pollution. Also dark wizards.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-2 grid-cols-1 mt-6 gap-[30px]">
            <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/course/c3.jpg') }}" class="rounded-md shadow-sm" alt="">

            <div class="relative">
                <img src="{{ asset('assets/images/course/c8.jpg') }}" class="rounded-md shadow-sm" alt="">

                <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                    <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                        class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 mt-8">
            <h5 class="text-2xl font-semibold mb-5">Curriculum</h5>
        </div>

            <!-- includes/Pages/Courses/course-detail/curriculum.blade.php -->
            @include('includes.Pages.Courses.course-detail.curriculum')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Pages/Blog/blog/subscribe.blade.php -->
        @include('includes.Pages.Blog.blog.subscribe')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer')

@endsection