@extends('admin.layouts.main')

@section('title', 'Edit Event')

@push('styles')
<!-- TinyMCE styles will be loaded by the script -->
@endpush

@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Edit Event</h5>
                <h6 class="text-slate-400 font-semibold">Update event details</h6>
            </div>

            <div class="flex items-center">
                <a href="{{ route('admin.events') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-600/5 hover:bg-gray-600 border-gray-600/10 hover:border-gray-600 text-gray-600 hover:text-white rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Events
                </a>
            </div>
        </div>

        <!-- Event Form -->
        <div class="mt-6">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-6">
                    <form method="POST" action="{{ route('admin.events.update', $event) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                            <div>
                                <label class="font-semibold" for="title">Event Title <span class="text-red-600">*</span></label>
                                <input id="title" name="title" type="text" value="{{ old('title', $event->title) }}" 
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('title') border-red-500 @enderror" 
                                       placeholder="Enter event title" required>
                                @error('title')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold" for="status">Status <span class="text-red-600">*</span></label>
                                <select id="status" name="status" 
                                        class="form-select mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('status') border-red-500 @enderror" required>
                                    <option value="">Select Status</option>
                                    <option value="draft" {{ old('status', $event->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status', $event->status) == 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="scheduled" {{ old('status', $event->status) == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                    <option value="archived" {{ old('status', $event->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                                </select>
                                @error('status')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-6">
                            <div>
                                <label class="font-semibold" for="event_date">Event Date <span class="text-red-600">*</span></label>
                                <input id="event_date" name="event_date" type="date" 
                                       value="{{ old('event_date', $event->event_date ? $event->event_date->format('Y-m-d') : '') }}" 
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('event_date') border-red-500 @enderror" required>
                                @error('event_date')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold" for="event_time">Event Time</label>
                                <input id="event_time" name="event_time" type="time" value="{{ old('event_time', $event->event_time) }}" 
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('event_time') border-red-500 @enderror">
                                @error('event_time')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-6">
                            <div>
                                <label class="font-semibold" for="event_location">Location</label>
                                <input id="event_location" name="event_location" type="text" value="{{ old('event_location', $event->event_location) }}" 
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('event_location') border-red-500 @enderror" 
                                       placeholder="Event location or venue">
                                @error('event_location')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold" for="event_url">Event URL</label>
                                <input id="event_url" name="event_url" type="url" value="{{ old('event_url', $event->event_url) }}" 
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('event_url') border-red-500 @enderror" 
                                       placeholder="https://example.com/event">
                                @error('event_url')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-6">
                            <div>
                                <label class="font-semibold" for="featured_image">Featured Image</label>
                                @if($event->featured_image)
                                    <div class="mt-2 mb-2">
                                        <img src="{{ asset($event->featured_image) }}" class="h-20 w-20 object-cover rounded-md" alt="Current image">
                                        <p class="text-sm text-slate-500 mt-1">Current image</p>
                                    </div>
                                @endif
                                <input id="featured_image" name="featured_image" type="file" accept="image/*"
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('featured_image') border-red-500 @enderror">
                                @error('featured_image')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold" for="published_at">Published Date</label>
                                <input id="published_at" name="published_at" type="datetime-local" 
                                       value="{{ old('published_at', $event->published_at ? $event->published_at->format('Y-m-d\TH:i') : '') }}"
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('published_at') border-red-500 @enderror">
                                @error('published_at')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <label class="font-semibold" for="excerpt">Event Summary</label>
                            <textarea id="excerpt" name="excerpt" rows="3" 
                                      class="form-input mt-2 w-full py-2 px-3 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('excerpt') border-red-500 @enderror" 
                                      placeholder="Brief description of the event">{{ old('excerpt', $event->excerpt) }}</textarea>
                            @error('excerpt')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label class="font-semibold" for="content">Event Description <span class="text-red-600">*</span></label>
                            <div class="mt-2">
                                <textarea id="content" name="content" 
                                          class="ckeditor-editor @error('content') border-red-500 @enderror" 
                                          placeholder="Write the detailed description of the event..." required>{{ old('content', $event->content) }}</textarea>
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
                                           {{ in_array($category->id, old('categories', $event->categories->pluck('id')->toArray())) ? 'checked' : '' }}>
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
                                          placeholder="SEO meta description">{{ old('meta_description', $event->meta_description) }}</textarea>
                                @error('meta_description')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-semibold" for="meta_keywords">Meta Keywords</label>
                                <input id="meta_keywords" name="meta_keywords" type="text" value="{{ old('meta_keywords', $event->meta_keywords) }}" 
                                       class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('meta_keywords') border-red-500 @enderror" 
                                       placeholder="keyword1, keyword2, keyword3">
                                @error('meta_keywords')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end space-x-3">
                            <a href="{{ route('admin.events') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-600/5 hover:bg-gray-600 border-gray-600/10 hover:border-gray-600 text-gray-600 hover:text-white rounded-md">Cancel</a>
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Update Event</button>
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