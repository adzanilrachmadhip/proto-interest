@extends('admin.layouts.admin')

@section('title', 'Edit Home Page')
@section('page-title', 'Home Page - VCMS Editor')

@section('content')

    <!-- VCMS Note: Each section has vcms-editable-section class with edit indicators -->
    <!-- Click on the edit button to modify content -->

    <!-- VCMS Editable Section: Hero -->
    <div class="hero vcms-editable-section" data-section="hero" data-section-id="1">
        <div class="vcms-edit-indicator">
            <button class="vcms-edit-btn" data-edit-type="hero">
                <i class="fa-solid fa-pen"></i> Edit Hero
            </button>
        </div>
        
        <!-- Video Start -->
        <div class="hero-bg-video vcms-editable-item" data-edit-type="video" data-item-id="hero-video">
            <div class="vcms-edit-indicator-small">
                <i class="fa-solid fa-video"></i>
            </div>
            <video autoplay muted loop id="myVideo"><source src="https://demo.awaikenthemes.com/assets/videos/rovex-video-1.mp4" type="video/mp4"></video>
        </div>
        <!-- Video End -->
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content vcms-editable-item" data-edit-type="hero-content" data-item-id="hero-content-1">
                        <div class="vcms-edit-indicator-small">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                        
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Where <span>creativity</span> meets strategy</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We're a full-service design agency specializing in branding, web design, and creative strategies that elevate businesses.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('portfolio') }}" class="btn-default">view our portfolio</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                </div>

                <div class="col-lg-5">
                    <!-- Hero Image Start -->
                    <div class="hero-images vcms-editable-item" data-edit-type="hero-images" data-item-id="hero-images-1">
                        <div class="vcms-edit-indicator-small">
                            <i class="fa-solid fa-images"></i>
                        </div>
                        
                        <div class="hero-image-box-1">
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <img src="images/hero-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <img src="images/hero-img-2.jpg" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="hero-image-box-2">
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <img src="images/hero-img-3.jpg" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="hero-image-box-1">
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <img src="images/hero-img-4.jpg" alt="">
                                </figure>
                            </div>
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <img src="images/hero-img-5.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- VCMS Editable Section: Trusted Clients -->
    <div class="trusted-clients bg-section vcms-editable-section" data-section="trusted-clients" data-section-id="2">
        <div class="vcms-edit-indicator">
            <button class="vcms-edit-btn" data-edit-type="trusted-clients">
                <i class="fa-solid fa-pen"></i> Edit Trusted Clients
            </button>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Trusted Client Box Start -->
                    <div class="trusted-client-box">
                        <!-- Trusted Client Title Start -->
                        <div class="trusted-client-title vcms-editable-item" data-edit-type="text" data-item-id="trusted-title">
                            <div class="vcms-edit-indicator-small">
                                <i class="fa-solid fa-pen"></i>
                            </div>
                            <h3>trusted by teams at</h3>
                        </div>
                        <!-- Trusted Client Title End -->

                        <!-- Trusted Clients Slider Start -->
                        <div class="trusted-clients-slider vcms-editable-item" data-edit-type="client-logos" data-item-id="client-logos-1">
                            <div class="vcms-edit-indicator-small">
                                <i class="fa-solid fa-image"></i>
                            </div>
                            
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="trusted-client-logo">
                                            <img src="images/client-logo-1.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="trusted-client-logo">
                                            <img src="images/client-logo-2.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="trusted-client-logo">
                                            <img src="images/client-logo-3.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="trusted-client-logo">
                                            <img src="images/client-logo-4.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="trusted-client-logo">
                                            <img src="images/client-logo-5.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Trusted Clients Slider End -->
                    </div>
                    <!-- Trusted Client Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted Clients Section End -->

    <!-- ============================================ -->
    <!-- TODO: COPY ALL OTHER SECTIONS FROM pages/home.blade.php -->
    <!-- ============================================ -->
    <!-- Pattern untuk setiap section: -->
    <!--
    <div class="section-name vcms-editable-section" data-section="section-name" data-section-id="X">
        <div class="vcms-edit-indicator">
            <button class="vcms-edit-btn" data-edit-type="section-type">
                <i class="fa-solid fa-pen"></i> Edit Section Name
            </button>
        </div>
        
        [COPY EXACT CONTENT FROM home.blade.php]
        [ADD vcms-editable-item class to editable parts]
    </div>
    -->
    
    <!-- Remaining Sections to Add: -->
    <!-- 1. Our Services Section -->
    <!-- 2. Our Work Section -->
    <!-- 3. Creative Tools Section -->
    <!-- 4. How It Works Section -->
    <!-- 5. Achievements Section -->
    <!-- 6. CTA Section -->
    <!-- 7. Team Section -->
    <!-- 8. Testimonials Section -->

    <!-- <div class="vcms-notice">
        <h3><i class="fa-solid fa-info-circle"></i> Next Steps</h3>
        <p><strong>Action Required:</strong> Copy all remaining sections from <code>pages/home.blade.php</code></p>
        <p>Follow the VCMS pattern shown above (Hero & Trusted Clients sections)</p>
        <ol>
            <li>Wrap each section with <code>vcms-editable-section</code> class</li>
            <li>Add <code>vcms-edit-indicator</code> button at the top of section</li>
            <li>Add <code>vcms-editable-item</code> to individual editable parts</li>
            <li>Keep all existing HTML structure intact</li>
        </ol>
    </div> -->

@endsection

@push('scripts')
<script>
// VCMS Edit functionality will be handled by admin-vcms.js
console.log('VCMS Home Page Loaded');
</script>
@endpush