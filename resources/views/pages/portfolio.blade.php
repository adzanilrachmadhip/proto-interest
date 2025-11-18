@extends('layouts.app')

@section('title', 'Our Portfolio - Rovex')

@section('content')

    <x-page-header title="Our project <span>masterpieces</span>">
        <li class="breadcrumb-item active" aria-current="page">our portfolio</li>
    </x-page-header>

    <div class="page-works">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Improved Filter Tabs -->
                    <div class="our-work-nav wow fadeInUp">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">All projects <span class="count-badge">6</span></a></li>
                            <li><a href="#" data-filter=".video">Video <span class="count-badge">3</span></a></li>
                            <li><a href="#" data-filter=".design">Design <span class="count-badge">3</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row work-item-boxes align-items-center">

                        {{-- ============================================= --}}
                        {{-- === ITEM VIDEO 1 === --}}
                        {{-- ============================================= --}}
                        <div class="col-lg-4 col-md-6 work-item-box video">
                            <div class="work-item wow fadeInUp">
                                <div class="work-image">
                                    <div class="ratio" style="--bs-aspect-ratio: 76%; border-radius: 30px; overflow: hidden;">
                                        <iframe
                                            src="https://www.youtube.com/embed/uR7KkuMJ78s?si=Tp4wzvsw5eZMXFR_"
                                            title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3><a href="{{ route('pages.portfolio.single') }}">Viera - Bersamamu</a></h3>
                                        <p>We built a user-friendly Shopping platform...</p>
                                    </div>
                                    <div class="work-btn">
                                        <a href="{{ route('pages.portfolio.single') }}"><img src="{{ asset('images/arrrow-light.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ============================================= --}}
                        {{-- === ITEM GAMBAR 1 === --}}
                        {{-- ============================================= --}}
                        <div class="col-lg-4 col-md-6 work-item-box design">
                            <div class="work-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="work-image">
                                    <a href="{{ route('pages.portfolio.single') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="https://glints.com/id/lowongan/wp-content/uploads/2021/07/2.-jenis-desain-grafis-marketing-venngage-com-768x429.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3><a href="{{ route('pages.portfolio.single') }}">green wave foods</a></h3>
                                        <p>We built a user-friendly Shopping platform...</p>
                                    </div>
                                    <div class="work-btn">
                                        <a href="{{ route('pages.portfolio.single') }}"><img src="{{ asset('images/arrrow-light.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ============================================= --}}
                        {{-- === ITEM GAMBAR 2 === --}}
                        {{-- ============================================= --}}
                        <div class="col-lg-4 col-md-6 work-item-box design">
                            <div class="work-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="work-image">
                                    <a href="{{ route('pages.portfolio.single') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="https://glints.com/id/lowongan/wp-content/uploads/2021/07/4.-jenis-desain-grafis-ui-design-xd-adobe-com.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3><a href="{{ route('pages.portfolio.single') }}">horizon real estate</a></h3>
                                        <p>We helped Horizon Real Estate establish...</p>
                                    </div>
                                    <div class="work-btn">
                                        <a href="{{ route('pages.portfolio.single') }}"><img src="{{ asset('images/arrrow-light.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ============================================= --}}
                        {{-- === ITEM VIDEO 2 === --}}
                        {{-- ============================================= --}}
                        <div class="col-lg-4 col-md-6 work-item-box video">
                            <div class="work-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="work-image">
                                    <div class="ratio" style="--bs-aspect-ratio: 76%; border-radius: 30px; overflow: hidden;">
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
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3><a href="{{ route('pages.portfolio.single') }}">Cinematic</a></h3>
                                        <p>Cinematic pedesaan.</p>
                                    </div>
                                    <div class="work-btn">
                                        <a href="{{ route('pages.portfolio.single') }}"><img src="{{ asset('images/arrrow-light.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ============================================= --}}
                        {{-- === ITEM VIDEO 3 === --}}
                        {{-- ============================================= --}}
                        <div class="col-lg-4 col-md-6 work-item-box video">
                            <div class="work-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="work-image">
                                    <div class="ratio" style="--bs-aspect-ratio: 76%; border-radius: 30px; overflow: hidden;">
                                        <iframe
                                            src="https://www.youtube.com/embed/PG0ZAriaBEY?si=wg7gWVnN53Q2ftU0"
                                            title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3><a href="{{ route('pages.portfolio.single') }}">Berita</a></h3>
                                        <p>Berita terkini.</p>
                                    </div>
                                    <div class="work-btn">
                                        <a href="{{ route('pages.portfolio.single') }}"><img src="{{ asset('images/arrrow-light.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ============================================= --}}
                        {{-- === ITEM GAMBAR 3 === --}}
                        {{-- ============================================= --}}
                        <div class="col-lg-4 col-md-6 work-item-box design">
                            <div class="work-item wow fadeInUp" data-wow-delay="1s">
                                <div class="work-image">
                                    <a href="{{ route('pages.portfolio.single') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="https://glints.com/id/lowongan/wp-content/uploads/2021/07/6.-jenis-desain-grafis-publikasi-elements-envato-com-768x512.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3><a href="{{ route('pages.portfolio.single') }}">elegant design hub</a></h3>
                                        <p>We helped Horizon Real Estate establish...</p>
                                    </div>
                                    <div class="work-btn">
                                        <a href="{{ route('pages.portfolio.single') }}"><img src="{{ asset('images/arrrow-light.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
<style>
/* =========================================
   PORTFOLIO FILTER TABS - IMPROVED
   ========================================= */
.our-work-nav {
    margin-bottom: 50px;
}

.our-work-nav ul {
    display: flex;
    justify-content: center;
    gap: 15px;
    list-style: none;
    padding: 0;
    margin: 0;
    flex-wrap: wrap;
}

.our-work-nav ul li a {
    display: inline-flex;
    align-items: center;
    padding: 12px 28px;
    background: transparent;
    border: 2px solid #555;
    border-radius: 50px;
    color: #fff;  /* Tulisan putih */
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.our-work-nav ul li a:hover {
    background: #dcf763;  /* Lime green */
    border-color: #dcf763;
    color: #1a1a1a;  /* Tulisan hitam */
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(220, 247, 99, 0.4);
}

.our-work-nav ul li a.active-btn {
    background: #dcf763;  /* Lime green */
    border-color: #dcf763;
    color: #1a1a1a;  /* Tulisan hitam */
    box-shadow: 0 4px 15px rgba(220, 247, 99, 0.5);
}

/* Count Badge */
.count-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.2);  /* Badge transparan putih */
    color: inherit;
    font-size: 11px;
    font-weight: 700;
    min-width: 24px;
    height: 24px;
    border-radius: 50%;
    margin-left: 10px;
    padding: 0 6px;
}

.our-work-nav ul li a.active-btn .count-badge,
.our-work-nav ul li a:hover .count-badge {
    background: rgba(0, 0, 0, 0.2);  /* Badge transparan hitam pas active/hover */
}
</style>
@endpush

@push('scripts')
    {{-- Isotope JS --}}
    <script src="{{ asset('js/isotope.min.js') }}"></script>

    {{-- Improved Isotope Filter Script --}}
    <script>
        (function ($) {
            "use strict";
            
            if ($.fn.isotope) {
                $(window).on('load', function() {
                    var $portfolio = $('.work-item-boxes');
                    
                    // Initialize Isotope with smooth animations
                    $portfolio.isotope({
                        itemSelector: '.work-item-box',
                        layoutMode: 'masonry',
                        transitionDuration: '0.6s',
                        stagger: 30,
                        percentPosition: true,
                        masonry: {
                            columnWidth: '.work-item-box'
                        },
                        hiddenStyle: {
                            opacity: 0,
                            transform: 'scale(0.8) translateY(20px)'
                        },
                        visibleStyle: {
                            opacity: 1,
                            transform: 'scale(1) translateY(0)'
                        }
                    });

                    // Re-layout after images load (for better positioning)
                    $portfolio.imagesLoaded().progress(function() {
                        $portfolio.isotope('layout');
                    });
                });

                // Filter click handler with smooth transition
                $('.our-work-nav ul li a').on('click', function(e) {
                    e.preventDefault();
                    
                    var $this = $(this);
                    var filterValue = $this.attr('data-filter');
                    var $portfolio = $('.work-item-boxes');
                    
                    // Update active state with animation
                    $('.our-work-nav ul li a').removeClass('active-btn');
                    $this.addClass('active-btn');
                    
                    // Apply filter
                    if ($portfolio.data('isotope')) {
                        $portfolio.isotope({ filter: filterValue });
                    }
                    
                    // Update count badge (optional: highlight effect)
                    $this.find('.count-badge').addClass('pulse');
                    setTimeout(function() {
                        $this.find('.count-badge').removeClass('pulse');
                    }, 300);
                });
            }
        })(jQuery);
    </script>
@endpush