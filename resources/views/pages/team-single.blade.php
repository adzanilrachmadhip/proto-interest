@extends('layouts.app')

@section('title', 'Our Team - Rovex')

@section('content')

    <x-page-header title="Naufal <span>Syahruradli</span>">
        <li class="breadcrumb-item"><a href="{{ route('team') }}">our team</a></li>
        <li class="breadcrumb-item active" arial-current="page">Naufal Syahruradli</li>
    </x-page-header>

<div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Team Single Box Start -->
                    <div class="team-single-box">
                        <!-- Team About Box Start -->
                        <div class="team-about-box">
                            <!-- Team Single Image Start -->
                            <div class="team-single-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/team-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Team Single Image End -->

                            <!-- Team About Contact Start -->
                            <div class="team-about-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">About <span>me</span></h2>
                                    <p class="wow fadeInUp">With over a decade of experience in design and creativity, Joseph G. Brown leads the team with a passion for crafting innovative and impactful visual solutions. Specializing in user-centered design, Joseph combines artistic vision with strategic thinking to create designs that resonate with audiences and align with client goals.</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Team Contact List Start -->
                                <div class="team-contact-list">
                                    <!-- Team Member Box Start -->
                                    <div class="team-contact-box wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-team-contact-1.svg') }}" alt="">
                                        </div>

                                        <div class="team-contact-content">
                                            <h3>position</h3>
                                            <p>Senior designer</p>
                                        </div>
                                    </div>
                                    <!-- Team Member Box End -->

                                    <!-- Team Member Box Start -->
                                    <div class="team-contact-box wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-team-contact-1.svg') }}" alt="">
                                        </div>

                                        <div class="team-contact-content">
                                            <h3>email address</h3>
                                            <p>joseph@domain.com</p>
                                        </div>
                                    </div>
                                    <!-- Team Member Box End -->

                                    <!-- Team Member Box Start -->
                                    <div class="team-contact-box wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-team-contact-3.svg') }}" alt="">
                                        </div>

                                        <div class="team-contact-content">
                                            <h3>experience</h3>
                                            <p>12 years</p>
                                        </div>
                                    </div>
                                    <!-- Team Member Box End -->

                                    <!-- Team Member Box Start -->
                                    <div class="team-contact-box wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-team-contact-3.svg') }}" alt="">
                                        </div>

                                        <div class="team-contact-content">
                                            <h3>contact number</h3>
                                            <p>+1 321 6547 890</p>
                                        </div>
                                    </div>
                                    <!-- Team Member Box End -->
                                </div>
                                <!-- Team Contact List End -->

                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon wow fadeInUp" data-wow-delay="1s">
                                    <h3>follow us:</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team About Contact End -->
                        </div>
                        <!-- Team About Box End -->

                        <!-- Team Expertise Skills Start -->
                        <div class="team-expertise-skills">
                            <!-- Team Expertise Boox Start -->
                            <div class="team-expertise-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">My <span>expertise</span></h2>
                                    <p class="wow fadeInUp">Joseph G. Brown is a seasoned design professional with a keen eye aesthetics and a deep understanding of creative strategies. Outside of his professional role, Joseph is an avid traveler and art enthusiast, drawing inspiration from diverse cultures and experiences to fuel his creativity.</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Team Expertise List Start -->
                                <div class="team-expertise-list wow fadeInUp" data-wow-delay="0.2s">
                                    <ul>
                                        <li>ui/ux design specialist</li>
                                        <li>focused on client success</li>
                                        <li>driven by innovation and impact</li>
                                        <li>detail-oriented problem solver</li>
                                    </ul>
                                </div>
                                <!-- Team Expertise List End -->
                            </div>
                            <!-- Team Expertise Skills End -->

                            <!-- Team Skills Box Start -->
                            <div class="team-skills-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">My <span>skills</span></h2>
                                    <p class="wow fadeInUp">Joseph G. Brown excels in creative problem-solving, user-centered design, branding, and UI/UX development.</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="85%">
                                        <div class="skill-data">
                                            <div class="skill-title">creativity</div>
                                            <div class="skill-no">85%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->

                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="94%">
                                        <div class="skill-data">
                                            <div class="skill-title">problem-solving</div>
                                            <div class="skill-no">94%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->
                            </div>
                            <!-- Team Skills Box End -->
                        </div>
                        <!-- Team Expertise Skills End -->

                        <!-- Team Contact Form Start -->
                        <div class="team-contact-form">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Get into touch <span>with us</span></h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Contact Form Start -->
                            <div class="contact-form">
                                <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-4">
                                            <label class="form-label">first name</label>
                                            <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <label class="form-label">last name</label>
                                            <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <label class="form-label">email address</label>
                                            <input type="email" name ="email" class="form-control" id="email" placeholder="Email Address" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <label class="form-label">mobile number</label>
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Mobile Number" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-5">
                                            <label class="form-label">your message</label>
                                            <textarea name="message" class="form-control" id="message" rows="4" placeholder="Subject"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn-default">send message</button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form Start -->
                        </div>
                        <!-- Team Contact Form End -->
                    </div>
                    <!-- Team Single Box End -->
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')

@endpush
