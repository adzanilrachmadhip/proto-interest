<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Admin Dashboard') - Dikelolain VCMS</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">

    <!-- Main CSS Files -->
   
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
	<link href="{{ asset('css/all.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
    
    <!-- Admin VCMS Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin-vcms.css') }}">

    @stack('styles')
</head>

<body class="admin-body">
    
    <!-- Admin Wrapper Start -->
    <div class="admin-wrapper">
        
        <!-- Admin Sidebar Start -->
        @include('admin.partials.sidebar')
        <!-- Admin Sidebar End -->

        <!-- Admin Content Area Start -->
        <div class="admin-content-area">
            
            <!-- Admin Topbar Start -->
            <div class="admin-topbar">
                <div class="admin-topbar-left">
                    <button class="sidebar-toggle" id="sidebarToggle">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <h1 class="page-title">@yield('page-title', 'Dashboard')</h1>
                </div>
                <div class="admin-topbar-right">
                    <div class="vcms-mode-indicator">
                        <i class="fa-solid fa-eye"></i>
                        <span>VCMS Edit Mode</span>
                    </div>
                    <div class="admin-actions">
                        <a href="{{ route('home') }}" class="btn-preview" target="_blank">
                            <i class="fa-solid fa-external-link"></i> Preview Site
                        </a>
                        <button class="btn-save-changes">
                            <i class="fa-solid fa-save"></i> Save Changes
                        </button>
                    </div>
                </div>
            </div>
            <!-- Admin Topbar End -->

            <!-- VCMS Visual Preview Start -->
            <div class="vcms-preview-container">
                @yield('content')
            </div>
            <!-- VCMS Visual Preview End -->

        </div>
        <!-- Admin Content Area End -->

    </div>
    <!-- Admin Wrapper End -->

    <!-- Edit Modal (Global) -->
    <div class="vcms-edit-modal" id="vcmsEditModal">
        <div class="vcms-edit-modal-overlay"></div>
        <div class="vcms-edit-modal-content">
            <div class="vcms-edit-modal-header">
                <h3>Edit Content</h3>
                <button class="vcms-modal-close">&times;</button>
            </div>
            <div class="vcms-edit-modal-body">
                <!-- Dynamic form will be loaded here -->
            </div>
            <div class="vcms-edit-modal-footer">
                <button class="btn-cancel">Cancel</button>
                <button class="btn-save-modal">Save</button>
            </div>
        </div>
    </div>

    <!-- Main JS Files -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    <script src="{{ asset('js/SplitText.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/function.js') }}"></script>
    
    <!-- Admin VCMS Custom JS -->
    <script src="{{ asset('js/admin-vcms.js') }}"></script>

    @stack('scripts')

</body>
</html>