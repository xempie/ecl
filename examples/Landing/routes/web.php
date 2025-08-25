<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageJobController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NftController;
use App\Http\Controllers\portfolio1Controller;
use App\Http\Controllers\portfolio2Controller;
use App\Http\Controllers\portfolio3Controller;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/index-saas', [HomeController::class, 'indexSaas']);
Route::get('/index-classic-saas', [HomeController::class, 'indexClassicSaas']);
Route::get('/index-modern-saas', [HomeController::class, 'indexModernSaas']);
Route::get('/index-apps', [HomeController::class, 'indexApps']);
Route::get('/index-classic-app', [HomeController::class, 'indexClassicApp']);
Route::get('/index-ai', [HomeController::class, 'indexAi']);
Route::get('/index-smartwatch', [HomeController::class, 'indexSmartwatch']);
Route::get('/index-marketing', [HomeController::class, 'indexMarketing']);
Route::get('/index-seo', [HomeController::class, 'indexSeo']);
Route::get('/index-software', [HomeController::class, 'indexSoftware']);
Route::get('/index-web-programming', [HomeController::class, 'indexWebProgramming']);
Route::get('/index-payment', [HomeController::class, 'indexPayment']);
Route::get('/index-charity', [HomeController::class, 'indexCharity']);

Route::get('/index-it-solution', [HomeController::class, 'indexItSolution']);
Route::get('/index-it-solution-two', [HomeController::class, 'indexItSolutionTwo']);
Route::get('/index-digital-agency', [HomeController::class, 'indexDigitalAgency']);
Route::get('/index-restaurent', [HomeController::class, 'indexRestaurent']);
Route::get('/index-hosting', [HomeController::class, 'indexHosting']);

Route::get('/index-nft', [HomeController::class, 'indexNft']);
Route::get('/nft-explore', [HomeController::class, 'nftExplore']);
Route::get('/nft-auction', [HomeController::class, 'nftAuction']);
Route::get('/nft-collection', [HomeController::class, 'nftCollection']);
Route::get('/nft-creators', [HomeController::class, 'nftCreators']);
Route::get('/nft-creator-profile', [HomeController::class, 'nftCreatorProfile']);
Route::get('/nft-creator-profile-edit', [HomeController::class, 'nftCreatorProfileEdit']);
Route::get('/nft-create-item', [HomeController::class, 'nftCreateItem']);

Route::get('/nft-detail', [HomeController::class, 'nftDetail']);
Route::get('/nft-detail/{title}', [NftController::class, 'show'])->name('nft-detail');

Route::get('/nft-wallet', [HomeController::class, 'nftWallet']);

Route::get('/index-hotel', [HomeController::class, 'indexHotel']);
Route::get('/index-travel', [HomeController::class, 'indexTravel']);
Route::get('/index-cafe', [HomeController::class, 'indexCafe']);
Route::get('/index-gym', [HomeController::class, 'indexGym']);
Route::get('/index-yoga', [HomeController::class, 'indexYoga']);
Route::get('/index-spa', [HomeController::class, 'indexSpa']);
Route::get('/index-cleaner', [HomeController::class, 'indexCleaner']);

Route::get('/index-job', [HomeController::class, 'indexJob']);
Route::get('/index-startup', [HomeController::class, 'indexStartup']);
Route::get('/index-business', [HomeController::class, 'indexBusiness']);
Route::get('/index-corporate', [HomeController::class, 'indexCorporate']);
Route::get('/index-corporate-two', [HomeController::class, 'indexCorporateTwo']);
Route::get('/index-real-estate', [HomeController::class, 'indexRealEstate']);
Route::get('/index-consulting', [HomeController::class, 'indexConsulting']);
Route::get('/index-solar', [HomeController::class, 'indexSolar']);
Route::get('/index-life-coach', [HomeController::class, 'indexLifeCoach']);
Route::get('/index-insurance', [HomeController::class, 'indexInsurance']);
Route::get('/index-construction', [HomeController::class, 'indexConstruction']);
Route::get('/index-law', [HomeController::class, 'indexLaw']);

Route::get('/index-video', [HomeController::class, 'indexVideo']);
Route::get('/video-portfolio', [HomeController::class, 'videoPortfolio']);

Route::get('/index-personal', [HomeController::class, 'indexPersonal']);
Route::get('/index-portfolio', [HomeController::class, 'indexPortfolio']);
Route::get('/index-photography', [HomeController::class, 'indexPhotography']);
Route::get('/photography-about', [HomeController::class, 'photographyAbout']);
Route::get('/photography-portfolio', [HomeController::class, 'photographyPortfolio']);

Route::get('/index-studio', [HomeController::class, 'indexStudio']);
Route::get('/index-coworking', [HomeController::class, 'indexCoworking']);
Route::get('/index-classic-business', [HomeController::class, 'indexClassicBusiness']);
Route::get('/index-course', [HomeController::class, 'indexCourse']);
Route::get('/index-event', [HomeController::class, 'indexEvent']);
Route::get('/index-podcast', [HomeController::class, 'indexPodcast']);
Route::get('/index-hospital', [HomeController::class, 'indexHospital']);
Route::get('/index-phone-number', [HomeController::class, 'indexPhoneNumber']);
Route::get('/index-forums', [HomeController::class, 'indexForums']);

Route::get('/index-shop', [HomeController::class, 'indexShop']);
Route::get('/shop-about', [HomeController::class, 'shopAbout']);
Route::get('/shop-grid', [HomeController::class, 'shopGrid']);
Route::get('/shop-grid-two', [HomeController::class, 'shopGridTwo']);

Route::get('/shop-item-detail', [HomeController::class, 'shopItemDetail']);
Route::get('/shop-item-detail/{title}', [ShopController::class, 'show'])->name('shop-item-detail');

Route::get('/shop-cart', [HomeController::class, 'shopCart']);
Route::get('/shop-checkout', [HomeController::class, 'shopCheckout']);
Route::get('/shop-account', [HomeController::class, 'shopAccount']);

Route::get('/index-crypto', [HomeController::class, 'indexCrypto']);
Route::get('/index-landing-one', [HomeController::class, 'indexLandingOne']);
Route::get('/index-landing-two', [HomeController::class, 'indexLandingTwo']);
Route::get('/index-landing-three', [HomeController::class, 'indexLandingThree']);
Route::get('/index-landing-four', [HomeController::class, 'indexLandingFour']);
Route::get('/index-landing-six', [HomeController::class, 'indexLandingSix']);
Route::get('/index-christmas', [HomeController::class, 'indexChristmas']);
Route::get('/index-service', [HomeController::class, 'indexService']);
Route::get('/index-food-blog', [HomeController::class, 'indexFoodBlog']);
Route::get('/index-blog', [HomeController::class, 'indexBlog']);
Route::get('/index-furniture', [HomeController::class, 'indexFurniture']);
Route::get('/index-landing-five', [HomeController::class, 'indexLandingFive']);

Route::get('/page-aboutus', [HomeController::class, 'pageAboutus']);
Route::get('/page-services', [HomeController::class, 'pageServices']);
Route::get('/page-service-detail', [HomeController::class, 'pageServiceDetail']);
Route::get('/page-team', [HomeController::class, 'pageTeam']);
Route::get('/page-pricing', [HomeController::class, 'pagePricing']);
Route::get('/page-testimonial', [HomeController::class, 'pageTestimonial']);

Route::get('/user-profile', [HomeController::class, 'userProfile']);
Route::get('/user-billing', [HomeController::class, 'userBilling']);
Route::get('/user-payment', [HomeController::class, 'userPayment']);
Route::get('/user-invoice', [HomeController::class, 'userInvoice']);
Route::get('/user-social', [HomeController::class, 'userSocial']);
Route::get('/user-notification', [HomeController::class, 'userNotification']);
Route::get('/user-setting', [HomeController::class, 'userSetting']);

Route::get('/property-listing', [HomeController::class, 'propertyListing']);

Route::get('/property-detail', [HomeController::class, 'propertyDetail']);
Route::get('/property-detail/{title}', [PropertyController::class, 'show'])->name('property-detail');

Route::get('/course-listing', [HomeController::class, 'courseListing']);

Route::get('/course-detail', [HomeController::class, 'courseDetail']);
Route::get('/course-detail/{title}', [CourseController::class, 'show'])->name('course-detail');

Route::get('/food-recipe', [HomeController::class, 'foodRecipe']);

Route::get('/page-job-grid', [HomeController::class, 'pageJobGrid']);

Route::get('/page-job-detail', [HomeController::class, 'pageJobDetail']);
Route::get('/page-job-detail/{title}', [PageJobController::class, 'show'])->name('page-job-detail');

Route::get('/page-job-apply', [HomeController::class, 'pageJobApply']);
Route::get('/page-job-post', [HomeController::class, 'pageJobPost']);
Route::get('/page-job-career', [HomeController::class, 'pageJobCareer']);
Route::get('/page-job-candidates', [HomeController::class, 'pageJobCandidates']);

Route::get('/page-job-candidate-detail', [HomeController::class, 'pageJobCandidateDetail']);
Route::get('/page-job-candidate-detail/{title}', [JobController::class, 'show'])->name('page-job-candidate-detail');

Route::get('/page-job-companies', [HomeController::class, 'pageJobCompanies']);

Route::get('/page-job-company-detail', [HomeController::class, 'pageJobCompanyDetail']);
Route::get('/page-job-company-detail/{title}', [CompanyController::class, 'show'])->name('page-job-company-detail');

Route::get('/forums-topic', [HomeController::class, 'forumsTopic']);
Route::get('/forums-comments', [HomeController::class, 'forumsComments']);

Route::get('/helpcenter', [HomeController::class, 'helpcenter']);
Route::get('/helpcenter-faqs', [HomeController::class, 'helpcenterFaqs']);
Route::get('/helpcenter-guides', [HomeController::class, 'helpcenterGuides']);
Route::get('/helpcenter-support', [HomeController::class, 'helpcenterSupport']);

Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog-sidebar', [HomeController::class, 'blogSidebar']);

Route::get('/blog-detail', [HomeController::class, 'blogDetail']);
Route::get('/blog-detail/{title}', [BlogController::class, 'show'])->name('blog-detail');

Route::get('/blog-standard-post', [HomeController::class, 'blogStandardPost']);
Route::get('/blog-slider-post', [HomeController::class, 'blogSliderPost']);
Route::get('/blog-gallery-post', [HomeController::class, 'blogGalleryPost']);
Route::get('/blog-youtube-post', [HomeController::class, 'blogYoutubePost']);
Route::get('/blog-vimeo-post', [HomeController::class, 'blogVimeoPost']);
Route::get('/blog-audio-post', [HomeController::class, 'blogAudioPost']);
Route::get('/blog-blockquote-post', [HomeController::class, 'blogBlockquotePost']);
Route::get('/blog-left-sidebar-post', [HomeController::class, 'blogLeftSidebarPost']);

Route::get('/email-confirmation', [HomeController::class, 'emailConfirmation']);
Route::get('/email-password-reset', [HomeController::class, 'emailPasswordReset']);
Route::get('/email-alert', [HomeController::class, 'emailAlert']);
Route::get('/email-invoice', [HomeController::class, 'emailInvoice']);

Route::get('/auth-login', [HomeController::class, 'authLogin']);
Route::get('/auth-signup', [HomeController::class, 'authSignup']);
Route::get('/auth-signup-success', [HomeController::class, 'authSignupSuccess']);
Route::get('/auth-re-password', [HomeController::class, 'authRePassword']);
Route::get('/auth-lock-screen', [HomeController::class, 'authLockScreen']);

Route::get('/page-terms', [HomeController::class, 'pageTerms']);
Route::get('/page-privacy', [HomeController::class, 'pagePrivacy']);

Route::get('/page-comingsoon', [HomeController::class, 'pageComingsoon']);
Route::get('/page-maintenance', [HomeController::class, 'pageMaintenance']);
Route::get('/page-error', [HomeController::class, 'pageError']);
Route::get('/page-thankyou', [HomeController::class, 'pageThankyou']);

Route::get('/contact-detail', [HomeController::class, 'contactDetail']);
Route::get('/contact-one', [HomeController::class, 'contactOne']);
Route::get('/contact-two', [HomeController::class, 'contactTwo']);

Route::get('/portfolio-modern-two', [HomeController::class, 'portfolioModernTwo']);
Route::get('/portfolio-modern-three', [HomeController::class, 'portfolioModernThree']);
Route::get('/portfolio-modern-four', [HomeController::class, 'portfolioModernFour']);
Route::get('/portfolio-modern-five', [HomeController::class, 'portfolioModernFive']);
Route::get('/portfolio-modern-six', [HomeController::class, 'portfolioModernSix']);

Route::get('/portfolio-classic-two', [HomeController::class, 'portfolioClassicTwo']);
Route::get('/portfolio-classic-three', [HomeController::class, 'portfolioClassicThree']);
Route::get('/portfolio-classic-four', [HomeController::class, 'portfolioClassicFour']);
Route::get('/portfolio-classic-five', [HomeController::class, 'portfolioClassicFive']);
Route::get('/portfolio-classic-six', [HomeController::class, 'portfolioClassicSix']);

Route::get('/portfolio-creative-two', [HomeController::class, 'portfolioCreativeTwo']);
Route::get('/portfolio-creative-three', [HomeController::class, 'portfolioCreativeThree']);
Route::get('/portfolio-creative-four', [HomeController::class, 'portfolioCreativeFour']);
Route::get('/portfolio-creative-five', [HomeController::class, 'portfolioCreativeFive']);
Route::get('/portfolio-creative-six', [HomeController::class, 'portfolioCreativeSix']);

Route::get('/portfolio-masonry-two', [HomeController::class, 'portfolioMasonryTwo']);
Route::get('/portfolio-masonry-three', [HomeController::class, 'portfolioMasonryThree']);
Route::get('/portfolio-masonry-four', [HomeController::class, 'portfolioMasonryFour']);
Route::get('/portfolio-masonry-five', [HomeController::class, 'portfolioMasonryFive']);
Route::get('/portfolio-masonry-six', [HomeController::class, 'portfolioMasonrySix']);

Route::get('/portfolio-detail-one', [HomeController::class, 'portfolioDetailOne']);
Route::get('/portfolio-detail-one/{title}', [portfolio1Controller::class, 'show'])->name('portfolio-detail-one');

Route::get('/portfolio-detail-two', [HomeController::class, 'portfolioDetailTwo']);
Route::get('/portfolio-detail-two/{title}', [portfolio2Controller::class, 'show'])->name('portfolio-detail-two');

Route::get('/portfolio-detail-three', [HomeController::class, 'portfolioDetailThree']);
Route::get('/portfolio-detail-three/{title}', [portfolio3Controller::class, 'show'])->name('portfolio-detail-three');

Route::get('/portfolio-detail-four', [HomeController::class, 'portfolioDetailFour']);

Route::get('/ui-components', [HomeController::class, 'uiComponents']);

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');