@extends('layouts.app')

@section('title', 'Rovex - Design Agency Home')

@section('content')


    <x-page-header title="Explore our <span>services</span>">
        <li class="breadcrumb-item active" aria-current="page">Services</li>
    </x-page-header>

<div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="service-image">
                            <a href="{{ route('pages.service.single') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-image-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="service-content">
                                <h3><a href="{{ route('pages.service.single') }}">UI/UX Design</a></h3>
                                <p>We design user interfaces that are visually appealing and easy.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('pages.service.single') }}"><img src="images/arrrow-light.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-image">
                            <a href="{{ route('pages.service.single') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-image-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="service-content">
                                <h3><a href="{{ route('pages.service.single') }}">web development</a></h3>
                                <p>We create engaging and impactful content for websites.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('pages.service.single') }}"><img src="images/arrrow-light.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-image">
                            <a href="{{ route('pages.service.single') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-image-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="service-content">
                                <h3><a href="{{ route('pages.service.single') }}">3D designs</a></h3>
                                <p>Our team creates stunning graphics for both digital and print.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('pages.service.single') }}"><img src="images/arrrow-light.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-image">
                            <a href="{{ route('pages.service.single') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-image-4.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="service-content">
                                <h3><a href="{{ route('pages.service.single') }}">digital marketing design</a></h3>
                                <p>Our digital marketing services include SEO, social media.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('pages.service.single') }}"><img src="images/arrrow-light.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-image">
                            <a href="{{ route('pages.service.single') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-image-5.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="service-content">
                                <h3><a href="{{ route('pages.service.single') }}">motion graphics</a></h3>
                                <p>Bringing your brand to life with dynamic animations.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('pages.service.single') }}"><img src="images/arrrow-light.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="service-image">
                            <a href="{{ route('pages.service.single') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-image-6.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="service-content">
                                <h3><a href="{{ route('pages.service.single') }}">logos & branding</a></h3>
                                <p>Building memorable brands that resonate with target audience. </p>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('pages.service.single') }}"><img src="images/arrrow-light.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services End -->

    <!-- CTA Section Start -->
    {{-- <div class="cta-section bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- CTA Box Start -->
                    <div class="cta-box">
                        <div class="cta-counter-content-box">
                            <!-- CTA Box Content Start -->
                            <div class="cta-box-content wow fadeInUp">
                                <p>We specialize in delivering innovative and impactful design solutions that elevate brands and drive results. From digital experiences to print media, our team of creative professionals is dedicated to transforming ideas into compelling visual stories that resonate with audiences. With a focus on creativity, strategy, and client collaboration.</p>
                            </div>
                            <!-- CTA Box Content End -->

                            <!-- CTA Counter Box Start -->
                            <div class="cta-counter-box">
                                <!-- CTA Counter Item Start -->
                                <div class="cta-counter-item">
                                    <h3><span class="counter">45</span>+</h3>
                                    <p>project completed</p>
                                </div>
                                <!-- CTA Counter Item End -->

                                <!-- CTA Counter Item Start -->
                                <div class="cta-counter-item">
                                    <h3><span class="counter">15</span>+</h3>
                                    <p>years of experience</p>
                                </div>
                                <!-- CTA Counter Item End -->

                                <!-- CTA Counter Item Start -->
                                <div class="cta-counter-item">
                                    <h3><span class="counter">100</span>%</h3>
                                    <p>client satisfaction</p>
                                </div>
                                <!-- CTA Counter Item End -->
                            </div>
                            <!-- CTA Counter Box End -->
                        </div>

                        <!-- CTA Contact Circle Start -->
                        <div class="cta-contact-circle">
                            <a href="{{ route('contact') }}"><img src="images/cta-contact-circle.png" alt=""></a>
                        </div>
                        <!-- CTA Contact Circle End -->
                    </div>
                    <!-- CTA Box End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- CTA Section End -->

    <!-- Creative Tools Section Start -->
    <div class="creative-tools service-creative-tools">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">creative toolkit</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our toolbox for <span>innovation</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('portfolio') }}" class="btn-default">view all portfolio</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Creative Tools Box Start -->
                    <div class="creative-tools-box">
                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-creative-tools-1.svg" alt="">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>figma</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-creative-tools-2.svg" alt="">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>framer</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-creative-tools-3.svg" alt="">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>illustrator</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="images/icon-creative-tools-4.svg" alt="">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>adobe xd</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img src="images/icon-creative-tools-5.svg" alt="">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>indesign</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="1s">
                            <div class="icon-box">
                                <img src="images/icon-creative-tools-6.svg" alt="">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>photoshop</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="1.2s">
                            <div class="icon-box">
                                <img src="images/icon-creative-tools-7.svg" alt="">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>lightroom</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="1.4s">
                            <div class="icon-box">
                                <img src="images/icon-creative-tools-8.svg" alt="">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>incopy</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->
                    </div>
                    <!-- Creative Tools Box End -->
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
