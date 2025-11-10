@extends('layouts.app')

@section('title', 'Rovex - Design Agency Home')

@section('content')


	<!-- Page Header End -->
    <x-page-header title="Pricing <span>plan</span>">
        <li class="breadcrumb-item active" aria-current="page">Pricing</li>
    </x-page-header>

<div class="page-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Box Start -->
                    <div class="pricing-box wow fadeInUp">
                        <!-- Pricing Header Start -->
                        <div class="pricing-header">
                            <h3>basic plan</h3>
                            <h2>Rp 300 Rb <sub>/per month</sub></h2>
                        </div>
                        <!-- Pricing Header End -->

                        <!-- Pricing Box Body Start -->
                        <div class="pricing-body">
                            <!-- Pricing List Title Start -->
                            <div class="pricing-list-title">
                                <h3>What included?</h3>
                            </div>
                            <!-- Pricing List Title End -->

                            <!-- Pricing List Start -->
                            <div class="pricing-list">
                                <ul>
                                    <li>Desain Grafis (Feed, Reels, Story)</li>
                                    <li>Desain Interaktif</li>
                                    <li>Strategi Konten & Social Media Management</li>
                                </ul>
                            </div>
                            <!-- Pricing List End -->
                        </div>
                        <!-- Pricing Box Body End -->

                        <!-- Pricing Button Start -->
                        <div class="pricing-btn">
                            <a href="#" class="btn-default btn-highlighted">let's get started </a>
                        </div>
                        <!-- Pricing Button End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Box Start -->
                    <div class="pricing-box highlighted-box wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Pricing Header Start -->
                        <div class="pricing-header">
                            <h3>standard plan</h3>
                            <h2>Rp 500 Rb <sub>/per month</sub></h2>
                        </div>
                        <!-- Pricing Header End -->

                        <!-- Pricing Box Body Start -->
                        <div class="pricing-body">
                            <!-- Pricing List Title Start -->
                            <div class="pricing-list-title">
                                <h3>What included?</h3>
                            </div>
                            <!-- Pricing List Title End -->

                            <!-- Pricing List Start -->
                            <div class="pricing-list">
                                <ul>
                                    <li>Konten Video & Foto untuk Instagram & TikTok</li>
                                    <li>Desain Grafis (Feed, Reels, Story)</li>
                                    <li>Strategi Konten & Social Media Management</li>
                                </ul>
                            </div>
                            <!-- Pricing List End -->
                        </div>
                        <!-- Pricing Box Body End -->

                        <!-- Pricing Button Start -->
                        <div class="pricing-btn">
                            <a href="#" class="btn-default btn-highlighted">let's get started </a>
                        </div>
                        <!-- Pricing Button End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Box Start -->
                    <div class="pricing-box wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Pricing Header Start -->
                        <div class="pricing-header">
                            <h3>premium plan</h3>
                            <h2>Rp 1 Jt <sub>/per month</sub></h2>
                        </div>
                        <!-- Pricing Header End -->

                        <!-- Pricing Box Body Start -->
                        <div class="pricing-body">
                            <!-- Pricing List Title Start -->
                            <div class="pricing-list-title">
                                <h3>What included?</h3>
                            </div>
                            <!-- Pricing List Title End -->

                            <!-- Pricing List Start -->
                            <div class="pricing-list">
                                <ul>
                                    <li>Konten Video & Foto untuk Instagram & TikTok</li>
                                    <li>Desain Grafis (Feed, Reels, Story)</li>
                                    <li>Strategi Konten & Social Media Management</li>
                                    <li>Ads kreatif untuk Meta (Instagram & FB Ads)</li>
                                    <li>Paket manajemen konten full (1 bulan ke depan ready!)</li>
                                </ul>
                            </div>
                            <!-- Pricing List End -->
                        </div>
                        <!-- Pricing Box Body End -->

                        <!-- Pricing Button Start -->
                        <div class="pricing-btn">
                            <a href="#" class="btn-default btn-highlighted">let's get started </a>
                        </div>
                        <!-- Pricing Button End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Pricing Benifit List Start -->
                    <div class="pricing-benefit-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li><img src="images/icon-pricing-benefit-1.svg" alt="">Get 30 day free trial</li>
                            <li><img src="images/icon-pricing-benefit-2.svg" alt="">No any hidden fees pay</li>
                            <li><img src="images/icon-pricing-benefit-3.svg" alt="">You can cancel anytime </li>
                        </ul>
                    </div>
                    <!-- Pricing Benifit List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Pricing End -->

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
                            <a href="contact.html"><img src="images/cta-contact-circle.png" alt=""></a>
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
                <div class="col-lg-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">creative toolkit</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our toolbox for <span>innovation</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-3">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('contact') }}" class="btn-default">let's get started !</a>
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
