@extends('admin.layouts.main')

@section('title', 'Add News Article')

@push('styles')
<!-- TinyMCE styles will be loaded by the script -->
@endpush

@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Create News Article</h5>
                <h6 class="text-slate-400 font-semibold">Add a new news article</h6>
            </div>

            <div class="flex items-center">
                <a href="{{ route('admin.news') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-600/5 hover:bg-gray-600 border-gray-600/10 hover:border-gray-600 text-gray-600 hover:text-white rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to News
                </a>
            </div>
        </div>

        <!-- News Form -->
        <div class="mt-6">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-6">
                    <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                            <div>
                                <label class="font-semibold" for="title">Title <span class="text-red-600">*</span></label>
                                <input id="title" name="title" type="text" value="{{ old('title') }}" 
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('title') border-red-500 @enderror" 
                                       placeholder="Enter news title" required>
                                @error('title')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold" for="status">Status <span class="text-red-600">*</span></label>
                                <select id="status" name="status" 
                                        class="form-select mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('status') border-red-500 @enderror" required>
                                    <option value="">Select Status</option>
                                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="scheduled" {{ old('status') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                </select>
                                @error('status')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-6">
                            <div>
                                <label class="font-semibold" for="featured_image">Featured Image</label>
                                <input id="featured_image" name="featured_image" type="file" accept="image/*"
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('featured_image') border-red-500 @enderror">
                                @error('featured_image')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold" for="published_at">Published Date</label>
                                <input id="published_at" name="published_at" type="datetime-local" value="{{ old('published_at') }}"
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('published_at') border-red-500 @enderror">
                                @error('published_at')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <label class="font-semibold" for="excerpt">Excerpt</label>
                            <textarea id="excerpt" name="excerpt" rows="3" 
                                      class="form-input mt-2 w-full py-2 px-3 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('excerpt') border-red-500 @enderror" 
                                      placeholder="Brief description of the news article">{{ old('excerpt') }}</textarea>
                            @error('excerpt')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label class="font-semibold" for="content">Content <span class="text-red-600">*</span></label>
                            <div class="mt-2">
                                <textarea id="content" name="content" 
                                          class="ckeditor-editor @error('content') border-red-500 @enderror" 
                                          placeholder="Write the full content of the news article..." required>{{ old('content') }}</textarea>
                            </div>
                            @error('content')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Categories -->
                        <div class="mt-6">
                            <label class="font-semibold">Categories</label>
                            <div class="mt-3 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                @foreach($categories as $category)
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}" 
                                           class="form-checkbox size-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                           {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                    <span class="text-sm text-slate-700 dark:text-slate-200">{{ $category->name }}</span>
                                </label>
                                @endforeach
                            </div>
                            @error('categories')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- SEO Fields -->
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-6">
                            <div>
                                <label class="font-semibold" for="meta_description">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" rows="2" 
                                          class="form-input mt-2 w-full py-2 px-3 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('meta_description') border-red-500 @enderror" 
                                          placeholder="SEO meta description">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold" for="meta_keywords">Meta Keywords</label>
                                <input id="meta_keywords" name="meta_keywords" type="text" value="{{ old('meta_keywords') }}" 
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('meta_keywords') border-red-500 @enderror" 
                                       placeholder="keyword1, keyword2, keyword3">
                                @error('meta_keywords')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end space-x-3">
                            <a href="{{ route('admin.news') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-600/5 hover:bg-gray-600 border-gray-600/10 hover:border-gray-600 text-gray-600 hover:text-white rounded-md">Cancel</a>
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Create News</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div>

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    ClassicEditor
        .create(document.querySelector('#content'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    '|',
                    'undo',
                    'redo',
                    'sourceEditing'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            }
        })
        .then(editor => {
            window.editor = editor;
            
            // Update textarea when content changes
            editor.model.document.on('change:data', () => {
                document.querySelector('#content').value = editor.getData();
            });
        })
        .catch(error => {
            console.error('CKEditor initialization error:', error);
        });
});
</script>
@endpush

@endsection