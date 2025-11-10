@extends('layouts.sidebar')

@section('title', 'Rovex - Design Agency Home')

@section('page-header')
    <x-page-header title="Cinema<span>tic</span>">
        <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Our portfolio</a></li>
        <li class="breadcrumb-item" aria-current="page">Cinematic</li>
    </x-page-header>
@endsection

@section('page-wrapper-class', 'page-work-single')
@section('sidebar')

                    <div class="work-single-sidebar">
                        <!-- Work Category List Start -->
                        <div class="work-category-list wow fadeInUp">
                            <!-- Work Category Title Start -->
                            <div class="work-category-title">
                                <h3>Project Details</h3>
                            </div>
                            <!-- Work Category Title End -->

                            <!-- Category Item List Start -->
                            <div class="category-item-list">
                                <div class="category-list-item">
                                    <h3><img src="{{ asset('images/icon-work-category-1.svg') }}" alt=""> project name:</h3>
                                    <p>stellar tech solutions</p>
                                </div>
                                <div class="category-list-item">
                                    <h3><img src="{{ asset('images/icon-work-category-1.svg') }}" alt=""> clients:</h3>
                                    <p>cameron williamson</p>
                                </div>
                                <div class="category-list-item">
                                    <h3><img src="{{ asset('images/icon-work-category-1.svg') }}" alt=""> category:</h3>
                                    <p>branding</p>
                                </div>
                                <div class="category-list-item">
                                    <h3><img src="{{ asset('images/icon-work-category-1.svg') }}" alt=""> date:</h3>
                                    <p>25 January, 2023</p>
                                </div>
                                <div class="category-list-item category-social-link">
                                    <h3>share:</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Category Item List End -->
                        </div>
                        <!-- Work Category List End -->

                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-sidebar-cta.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- CTA Contact Content Start -->
                            <div class="cta-contact-content">
                                <p>We always available to discus with you</p>
                                <h3><a href="#">info@domain.com</a></h3>
                            </div>
                            <!-- CTA Contact Content End -->

                            <!-- CTA Contact Button Start -->
                            <div class="cta-contact-btn">
                                <a href="{{ route('contact') }}" class="btn-default">contact us</a>
                            </div>
                            <!-- CTA Contact Button End -->
                        </div>
                        <!-- Sidebar Cta Box End -->
                    </div>

@endsection

@section('main-content')

                    <div class="work-single-content">
                        <!-- Work Featured Image Start -->
                        <div class="work-feature-image">
                            {{-- JIKA FOTO --}}
                            {{-- <figure class="image-anime reveal">
                                <img src="https://glints.com/id/lowongan/wp-content/uploads/2021/07/6.-jenis-desain-grafis-publikasi-elements-envato-com-768x512.jpg" alt="">
                            </figure> --}}
                            {{-- JIKA VIDEO --}}
                            <div class="ratio ratio-16x9" style="border-radius: 40px; overflow: hidden;">
                                <iframe
                                    src="https://www.youtube.com/embed/oUFJJNQGwhk?si=fYZB4zzmGPr-fdTu"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <!-- Work Featured Image End -->

                        <!-- Work Entry Start-->
                        <div class="work-entry">
                            <!-- Poject Overview Start-->
                            <div class="project-overview">
                                <h2 class="text-anime-style-2">Project <span>overview</span></h2>

                                <p class="wow fadeInUp">Stellar Tech Solutions is a leading provider of innovative technology services designed to empower businesses in today's fast-paced digital landscape. We specialize in crafting customized IT solutions, integrating cutting-edge technologies, and delivering robust cybersecurity strategies to ensure your organization's growth, efficiency, and security.</p>

                                <p class="wow fadeInUp" data-wow-delay="0.2s">Our team of experienced professionals is dedicated to understanding your unique challenges and goals, offering tailored services that align with your vision. From seamless system integration and managed IT services to advanced cloud solutions and proactive cybersecurity measures, we help businesses streamline operations, enhance productivity, and safeguard critical data.</p>
                            </div>
                            <!-- Poject Overview End-->

                            <!-- Project Challenges Start-->
                            <div class="project-challenge">
                                <h2 class="text-anime-style-2">The challenge <span>of project</span></h2>

                                <p class="wow fadeInUp">The challenge of the project lies in addressing complex requirements, managing constraints, and delivering innovative solutions that meet objectives while staying on time and within budget.</p>

                                <!-- Work Entry List Start-->
                                <div class="work-entry-list">
                                    <ul>
                                        <li>scalable solution for growing business</li>
                                        <li>disaster recovery and backup solution</li>
                                        <li>it infrastructure setup & management</li>
                                        <li>ai and machine learning integration</li>
                                    </ul>
                                </div>
                                <!-- Work Entry List End-->

                                <!-- Work Entry Image Start-->
                                {{-- <div class="work-entry-image">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('images/work-entry-img.jpg') }}" alt="">
                                    </figure>
                                </div> --}}
                                <!-- Work Entry Image End-->
                            </div>
                            <!-- Project Challenges End-->

                            <!-- Project Features Start-->
                            <div class="project-features">
                                <h2 class="text-anime-style-2">Features <span>of project</span></h2>

                                <p class="wow fadeInUp">The challenge of the project lies in addressing complex requirements, managing constraints, and delivering innovative solutions that meet objectives while staying on time and within budget.</p>

                                <!-- Project Features List Start -->
                                <div class="project-features-list">
                                    <!-- Project Features Item Start -->
                                    <div class="project-features-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-project-feature-1.svg') }}" alt="">
                                        </div>
                                        <div class="project-features-content">
                                            <h3>Best design award</h3>
                                            <p>We begin by getting to know you and your brand.</p>
                                        </div>
                                    </div>
                                    <!-- Project Features Item End -->

                                    <!-- Project Features Item Start -->
                                    <div class="project-features-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-project-feature-2.svg') }}" alt="">
                                        </div>
                                        <div class="project-features-content">
                                            <h3>Dribble Winner</h3>
                                            <p>We begin by getting to know you and your brand.</p>
                                        </div>
                                    </div>
                                    <!-- Project Features Item End -->
                                </div>
                                <!-- Project Features List End -->
                            </div>
                            <!-- Project Features End-->
                        </div>
                        <!-- Work Entry End-->
                    </div>

@endsection

@push('scripts')
@endpush
