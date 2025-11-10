<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('images/logo.svg') }}" alt="Logo">
                </a>
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('faqs') }}" class="nav-link">Faqs</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('testimonials') }}" class="nav-link">Testimonials</a>
                            </li>

                            {{-- <li class="nav-item submenu">
                                <a class="nav-link" href="#">Pages</a>
                                <ul>

                                    <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item highlighted-menu">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="{{ route('contact') }}" class="btn-default">Contact Us</a>
                    </div>
                    </div>
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
