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
                    <div class="our-work-nav wow fadeInUp">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">All projects</a></li>
                            <li><a href="#" data-filter=".video">Video</a></li>
                            <li><a href="#" data-filter=".design">Design</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row work-item-boxes align-items-center">

                        {{-- ============================================= --}}
                        {{-- === ITEM VIDEO 1 (PERBAIKAN RASIO) === --}}
                        {{-- ============================================= --}}
                        <div class="col-lg-4 col-md-6 work-item-box video">
                            <div class="work-item wow fadeInUp">
                                <div class="work-image">
                                    {{--
                                      PERBAIKAN:
                                      1. Menggunakan class .ratio
                                      2. Menghapus .ratio-16x9
                                      3. Menambahkan style="--bs-aspect-ratio: 76%;" agar sesuai
                                         dengan rasio gambar Anda (1 / 0.76)
                                      4. Menambahkan style border-radius & overflow
                                    --}}
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
                        {{-- === ITEM GAMBAR 1 (LINK DIPERBAIKI) === --}}
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
                        {{-- === ITEM GAMBAR 2 (LINK DIPERBAIKI) === --}}
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
                        {{-- === ITEM VIDEO 2 (PERBAIKAN RASIO) === --}}
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
                                        <p>Cinematic pedasaan.</p>
                                    </div>
                                    <div class="work-btn">
                                        <a href="{{ route('pages.portfolio.single') }}"><img src="{{ asset('images/arrrow-light.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ============================================= --}}
                        {{-- === ITEM VIDEO 3 (PERBAIKAN RASIO) === --}}
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
                        {{-- === ITEM GAMBAR 3 (LINK DIPERBAIKI) === --}}
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

@push('scripts')
    {{-- Halaman ini menggunakan Isotope, jadi kita perlu memuat JS-nya di sini --}}
    <script src="{{ asset('js/isotope.min.js') }}"></script>

    {{--
        Menambahkan JS kustom di sini untuk mengaktifkan Isotope
        penting agar filter berfungsi dengan benar.
    --}}
    <script>
        (function ($) {
            "use strict";
            // Periksa apakah Isotope sudah dimuat
            if ($.fn.isotope) {
                // Tunda inisialisasi sedikit untuk memastikan gambar dimuat
                $(window).on('load', function() {
                    var $portfolio = $('.work-item-boxes');
                    $portfolio.isotope({
                        itemSelector: '.work-item-box',
                        layoutMode: 'masonry'
                    });
                });

                // Mengatur filter
                $('.our-work-nav ul li a').on('click', function(e) {
                    e.preventDefault(); // Mencegah link '#' melompat ke atas
                    $('.our-work-nav ul li a').removeClass('active-btn');
                    $(this).addClass('active-btn');
                    var filterValue = $(this).attr('data-filter');

                    // Pastikan $portfolio sudah diinisialisasi
                    var $portfolio = $('.work-item-boxes');
                    if ($portfolio.data('isotope')) {
                        $portfolio.isotope({ filter: filterValue });
                    }
                });
            }
        })(jQuery);
    </script>
@endpush
