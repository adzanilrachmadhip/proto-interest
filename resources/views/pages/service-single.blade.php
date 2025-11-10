@extends('layouts.sidebar')

@section('title', 'Rovex - Design Agency Home')

@section('page-header')
    <x-page-header title="Web <span>development</span>">
        <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
        <li class="breadcrumb-item" aria-current="page">Web Development</li>
    </x-page-header>
@endsection

@section('page-wrapper-class', 'page-service-single')
@section('sidebar')

<div class="service-sidebar">
                        <!-- Service Category List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>services category</h3>
                            <ul>
                                <li><a href="#">UI/UX design</a></li>
                                <li><a href="#">Web development</a></li>
                                <li><a href="#">3D designs</a></li>
                                <li><a href="#">Digital marketing design</a></li>
                                <li><a href="#">Logos & branding</a></li>
                            </ul>
                        </div>
                        <!-- Service Category List End -->

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

<div class="service-single-content">
                        <!-- Service Feature Image Start -->
                        <div class="service-feature-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/service-image-2.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Service Feature Image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <p class="wow fadeInUp">Our web development services are designed to create dynamic, responsive, and user-friendly websites that drive engagement and deliver exceptional user experiences. From concept to launch, we work closely with you to design and develop websites tailored to your brand, ensuring they not only look stunning but also perform seamlessly across all devices.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our expertise spans a wide range of technologies, including custom coding, CMS platforms like WordPress, and e-commerce solutions such as Shopify and Magento. Whether you need a sleek business website, a robust e-commerce platform, or a fully customized web application, our team ensures your online presence is impactful, secure, and optimized for search engines.</p>

                            <!-- Service Benefits Start -->
                            <div class="service-benefits">
                                <h2 class="text-anime-style-2">Benefits <span>web development</span></h2>

                                <p class="wow fadeInUp">Web development enhances your online presence, boosts user engagement, and drives business growth with responsive, secure, and customized websites tailored to meet your goals.</p>

                                <!-- Service Benefit List Start -->
                                <div class="service-benefit-list wow fadeInUp" data-wow-delay="0.2s">
                                    <ul>
                                        <li>enhanced online presence</li>
                                        <li>secure platforms to protect data</li>
                                        <li>improved user experience (ux)</li>
                                        <li>seamless e-commerce integration</li>
                                        <li>mobile-friendly & responsive design</li>
                                        <li>higher user engement & retention</li>
                                    </ul>
                                </div>
                                <!-- Service Benefit List End -->

                                <!-- Service Benefits Images Start -->
                                <div class="service-benefits-images">
                                    <!-- Service Benefits Img Start -->
                                    <div class="service-benefits-img">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('images/service-benefit-img-1.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Service Benefits Img End -->

                                    <!-- Service Benefits Img Start -->
                                    <div class="service-benefits-img">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('images/service-benefit-img-1.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Service Benefits Img End -->
                                </div>
                                <!-- Service Benefits Images End -->
                            </div>
                            <!-- Service Benefits End -->

                            <!-- Service Design Process Start -->
                            <div class="service-design-process">
                                <h2 class="text-anime-style-2">Design <span>process</span></h2>

                                <p class="wow fadeInUp">The design process is a structured approach to creating solutions, combining research, creativity, and iterative development to deliver functional, user-centric, and visually appealing results.</p>

                                <!-- Design Process Item List Start -->
                                <div class="design-process-item-list">
                                    <!-- Design Process Item Start -->
                                    <div class="design-process-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-design-process-1.svg') }}" alt="">
                                        </div>

                                        <div class="design-process-item-content">
                                            <h3>research</h3>
                                            <p>Craft visually & apealing designs focused on user experience.</p>
                                        </div>
                                    </div>
                                    <!-- Design Process Item End -->

                                    <!-- Design Process Item Start -->
                                    <div class="design-process-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-design-process-1.svg') }}" alt="">
                                        </div>

                                        <div class="design-process-item-content">
                                            <h3>planning</h3>
                                            <p>Many desktop packages and web page editors now use.</p>
                                        </div>
                                    </div>
                                    <!-- Design Process Item End -->

                                    <!-- Design Process Item Start -->
                                    <div class="design-process-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-design-process-1.svg') }}" alt="">
                                        </div>

                                        <div class="design-process-item-content">
                                            <h3>wireframing</h3>
                                            <p>Many desktop packages and web page editors now use.</p>
                                        </div>
                                    </div>
                                    <!-- Design Process Item End -->
                                </div>
                                <!-- Design Process Item List End -->
                            </div>
                            <!-- Service Design Process End -->
                        </div>
                        <!-- Service Entry End -->

                        <!-- Page Single Faqs Start -->
                        <div class="page-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">FAQ's</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Find your <span>answers here</span></h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            What services does your agency provide?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We specialize in including graphic design, branding, website design and development, UX/UI design, social media marketing, digital advertising, video production, and content creation.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Who are your typical clients?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We work with businesses of all sizes, from startups and small businesses to large enterprises. Our clients span industries such as technology, retail, hospitality, healthcare, and more.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            How long does a typical project take?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>The timeline depends on the scope and complexity of the project. Smaller projects may take 2-4 weeks, while larger ones can take several months. We'll provide an estimated timeline after discussing your needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            What is your pricing structure?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We offer customized pricing based on the specific requirements of each project. After our initial consultation, we'll provide a detailed proposal with a breakdown of costs.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                            Why are UX and UI important?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>User Experience (UX) design focuses on enhancing the overall experience users have when interacting with a product or service. It involves researching user needs, creating user personas, designing user journeys, and testing how easy or efficient the product is to use.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- Page Single Faqs End -->
                    </div>

@endsection

@push('scripts')
@endpush
