<!-- resources/views/blog.blade.php -->
@extends('layouts.main')

@section('title', 'Blog Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <div>
                <h5 class="text-lg font-semibold">Blogs / News</h5>

                <ul class="tracking-[0.5px] inline-block mt-2">
                    <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                    <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Blogs</li>
                </ul>
            </div>

            <div>
                <a href="javascript:void(0)" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-800/5 dark:bg-gray-700 border border-gray-800/5 dark:border-gray-700 text-slate-900 dark:text-white rounded-full" onclick="addblog.showModal()" title="Add New"><i data-feather="plus" class="size-4"></i></a>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">

            <!-- includes/Blog/blog/blogs.blade.php -->
            @include('includes.Blog.blog.blogs')

        </div><!--end grid-->

        <div class="flex justify-end mt-6">
            
            <!-- includes/Blog/blog/navigation.blade.php -->
            @include('includes.Blog.blog.navigation')

        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

<!-- Start Modal -->
<dialog id="addblog" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[600px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
            <h3 class="font-bold text-lg">Add blog or News</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-4">
            <div>
                <p class="font-semibold mb-4">Upload your blog image here, Please click "Upload Image" Button.</p>
                <div class="preview-box flex justify-center rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">Supports JPG, PNG and MP4 videos. Max file size : 10MB.</div>
                <input type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()} hidden>
                <label class="btn-upload py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-6 cursor-pointer" for="input-file">Upload Image</label>
            </div>
            
            <form class="mt-4">
                <div class="grid grid-cols-12 gap-3">
                    <div class="col-span-12">
                        <label class="font-semibold">Blog Title <span class="text-red-600">*</span></label>
                        <input name="name" id="name" type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Title :">
                    </div><!--end col-->

                    <div class="col-span-12">
                        <label class="font-semibold"> Description : </label>
                        <textarea name="comments" id="comments" class="form-input w-full py-2 px-3 h-24 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Description :"></textarea>
                    </div><!--end col-->

                    <div class="col-span-12">
                        <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Create Blog</button>
                    </div><!--end col-->
                </div>
            </form>
        </div>
    </div>
</dialog>
<!-- End Modal -->

@endsection

<script>
    const handleChange = () => {
        const fileUploader = document.querySelector('#input-file');
        const getFile = fileUploader.files
        if (getFile.length !== 0) {
            const uploadedFile = getFile[0];
            readFile(uploadedFile);
        }
    }

    const readFile = (uploadedFile) => {
        if (uploadedFile) {
            const reader = new FileReader();
            reader.onload = () => {
            const parent = document.querySelector('.preview-box');
            parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
            };
            
            reader.readAsDataURL(uploadedFile);
        }
    };
</script>