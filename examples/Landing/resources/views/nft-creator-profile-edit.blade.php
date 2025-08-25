<!-- resources/views/nft-creator-profile-edit.blade.php -->
@extends('layouts.main')

@section('title', 'Nft-Creator-Profile-Edit Page')

@section('content')

@include('includes.navbar5')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-gradient-to-br to-orange-600/20 via-fuchsia-600/20 from-indigo-600/20">
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="text-3xl leading-normal font-medium">Edit Profile / Settings</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/index-nft') }}">NFT</a></li>
            <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Settings</li>
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

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 gap-[30px]">
            <div class="lg:col-span-3 md:col-span-4">
                <div class="group profile-pic w-[112px]">
                    <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                    <div>
                        <div class="relative size-28 rounded-full shadow-md dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800 overflow-hidden">
                            <img src="{{ asset('assets/images/client/05.jpg') }}" class="rounded-full" id="profile-image" alt="">
                            <div class="absolute inset-0 group-hover:bg-slate-900/10 duration-500"></div>
                            <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                        </div>
                    </div>
                </div>

                <p class="text-slate-400 mt-3">We recommend an image of at least 400X400. GIFs work too.</p>
            </div><!--end col-->
            
            <div class="lg:col-span-9 md:col-span-8">
                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                    <form>
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                            <div>
                                <label class="form-label font-medium">First Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="First Name:" id="firstname" name="name" required="">
                            </div>
                            <div>
                                <label class="form-label font-medium">Last Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Last Name:" id="lastname" name="name" required="">
                            </div>
                            <div>
                                <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                <input type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Email" name="email" required="">
                            </div>
                            <div>
                                <label class="form-label font-medium">Occupation : </label>
                                <input name="name" id="occupation" type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Occupation :">
                            </div>
                        </div><!--end grid-->

                        <div class="grid grid-cols-1">
                            <div class="mt-5">
                                <label class="form-label font-medium">Description : </label>
                                <textarea name="comments" id="comments" class="form-input w-full text-[15px] py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Message :"></textarea>
                            </div>
                        </div><!--end row-->

                        <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5" value="Save Changes">
                    </form><!--end form-->
                </div>

                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-[30px]">
                    <h5 class="text-lg font-semibold mb-6">Social Profiles :</h5>
                    
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <span class="font-medium">Twitter</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <i data-feather="twitter" class="size-4 absolute top-3 start-4"></i>
                                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Twitter Profile Name" id="twitter_name" name="name" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Twitter username (e.g. jennyhot).</p>
                        </div>
                    </div>
                    
                    <div class="md:flex mt-8">
                        <div class="md:w-1/3">
                            <span class="font-medium">Facebook</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <i data-feather="facebook" class="size-4 absolute top-3 start-4"></i>
                                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Facebook Profile Name" id="facebook_name" name="name" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Facebook username (e.g. jennyhot).</p>
                        </div>
                    </div>
                    
                    <div class="md:flex mt-8">
                        <div class="md:w-1/3">
                            <span class="font-medium">Instagram</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <i data-feather="instagram" class="size-4 absolute top-3 start-4"></i>
                                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Instagram Profile Name" id="insta_name" name="name" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Instagram username (e.g. jennyhot).</p>
                        </div>
                    </div>
                    
                    <div class="md:flex mt-8">
                        <div class="md:w-1/3">
                            <span class="font-medium">Linkedin</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <i data-feather="linkedin" class="size-4 absolute top-3 start-4"></i>
                                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Linkedin Profile Name" id="linkedin_name" name="name" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Linkedin username.</p>
                        </div>
                    </div>
                    
                    <div class="md:flex mt-8">
                        <div class="md:w-1/3">
                            <span class="font-medium">Youtube</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <i data-feather="youtube" class="size-4 absolute top-3 start-4"></i>
                                    <input type="url" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Youtube url" id="you_url" name="url" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Youtube url.</p>
                        </div>
                    </div>

                    <div class="md:flex">
                        <div class="md:w-full">
                            <span class="font-medium"></span>
                            <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Save Social Profile</button>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-[30px]">
                    <h5 class="text-lg font-semibold mb-6">Account Notifications :</h5>

                    <div class="flex justify-between pb-4">
                        <h6 class="mb-0 font-medium">When someone mentions me</h6>
                        <div class="">
                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti1">
                            <label class="form-check-label" for="noti1"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-800">
                        <h6 class="mb-0 font-medium">When someone follows me</h6>
                        <div class="">
                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" checked id="noti2">
                            <label class="form-check-label" for="noti2"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-800">
                        <h6 class="mb-0 font-medium">When shares my activity</h6>
                        <div class="">
                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti3">
                            <label class="form-check-label" for="noti3"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-800">
                        <h6 class="mb-0 font-medium">When someone messages me</h6>
                        <div class="">
                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti4">
                            <label class="form-check-label" for="noti4"></label>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-[30px]">
                    <h5 class="text-lg font-semibold mb-6">Marketing Notifications :</h5>

                    <div class="flex justify-between pb-4">
                        <h6 class="mb-0 font-medium">There is a sale or promotion</h6>
                        <div class="">
                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti5">
                            <label class="form-check-label" for="noti5"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-800">
                        <h6 class="mb-0 font-medium">Company news</h6>
                        <div class="">
                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti6">
                            <label class="form-check-label" for="noti6"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-800">
                        <h6 class="mb-0 font-medium">Weekly jobs</h6>
                        <div class="">
                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" checked id="noti7">
                            <label class="form-check-label" for="noti7"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-800">
                        <h6 class="mb-0 font-medium">Unsubscribe News</h6>
                        <div class="">
                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" checked id="noti8">
                            <label class="form-check-label" for="noti8"></label>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-[30px]">
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                        <div>
                            <h5 class="text-lg font-semibold mb-5">Contact Info :</h5>

                            <form>
                                <div class="grid grid-cols-1 gap-5">
                                    <div>
                                        <label class="form-label font-medium">Phone No. :</label>
                                        <input name="number" id="number" type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Phone :">
                                    </div>

                                    <div>
                                        <label class="form-label font-medium">Website :</label>
                                        <input name="url" id="url" type="url" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Url :">
                                    </div>
                                </div><!--end grid-->

                                <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Add</button>
                            </form>
                        </div><!--end col-->
                        
                        <div> 
                            <h5 class="text-lg font-semibold mb-5">Change password :</h5>
                            <form>
                                <div class="grid grid-cols-1 gap-5">
                                    <div>
                                        <label class="form-label font-medium">Old password :</label>
                                        <input type="password" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Old password" required="">
                                    </div>

                                    <div>
                                        <label class="form-label font-medium">New password :</label>
                                        <input type="password" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="New password" required="">
                                    </div>

                                    <div>
                                        <label class="form-label font-medium">Re-type New password :</label>
                                        <input type="password" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Re-type New password" required="">
                                    </div>
                                </div><!--end grid-->

                                <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Save password</button>
                            </form>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>

                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-[30px]">
                    <h5 class="text-lg font-semibold mb-5 text-red-600">Delete Account :</h5>

                    <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below "Delete" button</p>

                    <a href="explore-two.php" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">Delete</a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

@include('includes.footer')

@endsection