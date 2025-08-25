# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is **Empathic Computing Research Lab** - a Laravel 12 academic website for showcasing research in empathic computing, AR/VR/AI technologies, and human-computer interaction. The website features a corporate academic design with comprehensive sections for research areas, projects, publications, and team information.

**Business Context**: Empathic Computing Research Lab (empathinccomputing.org) is a university research center focused on developing emotionally intelligent systems that understand and respond to human emotions through advanced AI, AR, and VR technologies.

## Current Implementation Status

✅ **COMPLETED - Full Academic Research Website**
- **Homepage**: Complete academic layout with hero slider, research areas, projects, publications, and blog sections
- **Navigation**: Academic-focused navbar with Research/Team dropdowns and 86px height
- **Hero Slider**: 3-slide hero with 10-minute intervals and dark blue overlay
- **Components**: Modular architecture with 6 main homepage sections
- **Styling**: Blue academic theme with professional design
- **Responsive**: Mobile-friendly design with proper breakpoints

## Design Guidelines & Requirements

### **🎨 CRITICAL: Uniform Box Heights**
**ALL boxes/cards within the same section MUST have identical heights for professional appearance**

**Required Implementation:**
- ✅ **Equal Heights**: Use `h-full`, `min-h-[XXX]`, or CSS grid with equal heights
- ✅ **Consistent Layout**: All cards in same row must align perfectly
- ✅ **Content Management**: Use `flex-1` for content areas and fixed positioning for buttons/actions
- ✅ **Visual Testing**: Check all screen sizes (mobile, tablet, desktop)

### **📸 Image Management Standards**
**ALL images MUST have consistent sizing and fallback handling**

**Fixed Image Dimensions:**
- **Project Cards**: 300x200px minimum with `object-cover`
- **Publication Images**: 80x80px thumbnail size
- **Blog Post Images**: 400x250px with proper aspect ratio
- **Missing Image Fallback**: Set fixed container sizes to prevent layout breaks

### **🖼️ CRITICAL: Page Hero Image Background Standard**
**ALL pages (except homepage) MUST have a hero section with background image and page title**

**Required Implementation:**
- ✅ **Hero Section**: Full-width hero section at top of every page
- ✅ **Background Image**: Professional background image using `bg-cover bg-center bg-no-repeat`
- ✅ **Overlay**: Dark overlay (bg-slate-900/60 or similar) for text readability
- ✅ **Page Title**: Large, prominent page title in white text
- ✅ **Breadcrumb**: Optional breadcrumb navigation below title
- ✅ **Professional Heights**: Minimum md:py-24 py-16 for proper proportions

**Hero Section Template (Techwind Style with Curved Bottom):**
```blade
<section class="relative table w-full py-32 lg:py-40 bg-cover bg-center bg-no-repeat" style="background-image: url('https://picsum.photos/1920/700?random=50');">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="text-4xl lg:text-5xl text-white font-bold">Page Title</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto mt-3">Page description</p>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-16 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                <a href="{{ route('home') }}">Empathic Computing Lab</a>
            </li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                <i class="uil uil-angle-right"></i>
            </li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Page Title</li>
        </ul>
    </div>
    
    <!-- Curved Bottom Design -->
    <div class="absolute bottom-0 start-0 end-0">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 52 720 52C720 52 405 52 0 48Z" fill="currentColor" class="text-white"></path>
        </svg>
    </div>
</section><!--end section-->
```

**Background Image Requirements:**
- ✅ **Dimensions**: Minimum 1920x600px for full-width coverage
- ✅ **Quality**: High-resolution, professional academic/research imagery
- ✅ **Subject**: Relevant to page content (lab, research, technology, campus)
- ✅ **Contrast**: Suitable for text overlay with dark overlay applied

### **📚 Publications Section Enhancement**
**Publications MUST include visual elements and proper spacing**

**Required Features:**
- ✅ **Small Thumbnail Images**: 80x80px publication covers or icons
- ✅ **Proper Spacing**: Small gaps (8-12px) between publication blocks
- ✅ **Visual Hierarchy**: Clear separation between publications
- ✅ **Consistent Heights**: All publication cards same height

### **🔤 Typography Standards**
**Nunito font family MUST be used across entire website**

**Implementation Requirements:**
- ✅ **Google Fonts**: Import Nunito font family
- ✅ **Global Application**: Apply to all text elements
- ✅ **Fallback Fonts**: Include proper font stack
- ✅ **Weight Variations**: Support multiple font weights (200, 300, 400, 500, 600, 700, 800, 900)
- ✅ **Optimized Weights**: Nunito works best with 600+ weights for headings, 400 for body text

### **🎨 Navigation Color Standards**
**Menu text MUST use dark blue for academic professionalism**

**Color Requirements:**
- ✅ **Primary Menu**: Dark blue (#1e3a8a or similar)
- ✅ **Hover States**: Consistent blue hover effects
- ✅ **Active States**: Clear active link indication
- ✅ **Responsive Menu**: Maintain colors across all screen sizes

### **🦶 Footer Styling Standards**
**Footer MUST use specific background color for brand consistency**

**Footer Requirements:**
- ✅ **Background Color**: #0f172b (dark slate blue)
- ✅ **Text Colors**: Light gray (#d1d5db) for content, white (#ffffff) for headings
- ✅ **Link Hover**: Consistent with navigation hover states
- ✅ **Implementation**: Applied via CSS override on `.footer.bg-dark-footer` class

### **🎨 Pastel Color Palette Standards**
**Website MUST use soft, pastel colors for modern academic appearance**

**Pastel Color Scheme:**
- ✅ **Primary Blue**: `blue-400` (hover), `blue-500` (text), `blue-100` (background)
- ✅ **Emerald Green**: `emerald-400` (hover), `emerald-500` (text), `emerald-100` (background)
- ✅ **Violet Purple**: `violet-400` (hover), `violet-500` (text), `violet-100` (background)
- ✅ **Amber Orange**: `amber-400` (hover), `amber-500` (text), `amber-100` (background)

**Reference Hex Color Codes:**
- ✅ **Blue-400**: `#60a5fa` (AI research area hover border)
- ✅ **Emerald-400**: `#34d399` (AR research area hover border)
- ✅ **Violet-400**: `#a78bfa` (VR research area hover border)
- ✅ **Amber-400**: `#fbbf24` (HCI research area hover border)

**Usage Guidelines:**
- ✅ **Research Areas**: Each area uses different pastel color (AI=blue, AR=emerald, VR=violet, HCI=amber)
- ✅ **Quick Access Cards**: Use same pastel colors for visual consistency
- ✅ **Hover Effects**: Lighter shades (400) for borders, medium shades (500) for text/icons
- ✅ **Backgrounds**: Very light shades (100) for icon backgrounds and highlights
- ✅ **CSS Override**: Use exact hex codes when Tailwind classes need `!important` overrides

## Development Guidelines

### Code Style
- Follow Laravel best practices
- Use proper naming conventions
- Keep code clean and maintainable
- Use modular component architecture

### File Organization
- Controllers in `app/Http/Controllers/`
- Views in `resources/views/`
- Components in `resources/views/components/`
- Routes in `routes/web.php`
- Styles in `public/assets/css/`
- Academic Images in `public/assets/images/`

## Error Checking Protocol

**MANDATORY AFTER EVERY CHANGE:**
1. **Ask user to run project**: "Please run the project now to test the changes"
2. **Wait for confirmation**: User runs `composer run dev` or visits site
3. **Check logs**: "Now shall I check logs to see if any new errors occurred?"
4. **Fix any issues**: Read `storage/logs/laravel.log` for new errors only
5. **Never skip this step**: Essential for maintaining project stability

## Publication Page Template Requirements

**🚨 CRITICAL: Publications page template must be exactly the same as the publications section in the home page. Use the identical styling, layout, and structure without any modifications.**