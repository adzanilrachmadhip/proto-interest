<aside class="admin-sidebar" id="adminSidebar">
    <!-- Sidebar Header Start -->
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-logo">
            <img src="{{ asset('images/logo.svg') }}" alt="Dikelolain Logo">
        </a>
        <span class="vcms-badge">VCMS</span>
    </div>
    <!-- Sidebar Header End -->

    <!-- Sidebar Menu Start -->
    <nav class="sidebar-menu">
        <ul>
            <!-- Dashboard -->
            <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Pages Section -->
            <li class="menu-section">
                <span>Pages Management</span>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.pages.home') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.home') }}">
                    <i class="fa-solid fa-house"></i>
                    <span>Home Page</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.pages.about') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.about') }}">
                    <i class="fa-solid fa-info-circle"></i>
                    <span>About Page</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.pages.services') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.services') }}">
                    <i class="fa-solid fa-briefcase"></i>
                    <span>Services Page</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.pages.portfolio') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.portfolio') }}">
                    <i class="fa-solid fa-folder-open"></i>
                    <span>Portfolio Page</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.pages.team') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.team') }}">
                    <i class="fa-solid fa-users"></i>
                    <span>Team Page</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.pages.pricing') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.pricing') }}">
                    <i class="fa-solid fa-tag"></i>
                    <span>Pricing Page</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.pages.contact') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.contact') }}">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Contact Page</span>
                </a>
            </li>

            <!-- Content Management Section -->
            <li class="menu-section">
                <span>Content Management</span>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.portfolio.*') ? 'active' : '' }}">
                <a href="{{ route('admin.portfolio.index') }}">
                    <i class="fa-solid fa-images"></i>
                    <span>Portfolio Items</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                <a href="{{ route('admin.services.index') }}">
                    <i class="fa-solid fa-list"></i>
                    <span>Services Items</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                <a href="{{ route('admin.team.index') }}">
                    <i class="fa-solid fa-user-group"></i>
                    <span>Team Members</span>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                <a href="{{ route('admin.testimonials.index') }}">
                    <i class="fa-solid fa-quote-left"></i>
                    <span>Testimonials</span>
                </a>
            </li>

            <!-- Settings Section -->
            <li class="menu-section">
                <span>Settings</span>
            </li>

            <li class="menu-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <a href="{{ route('admin.settings.general') }}">
                    <i class="fa-solid fa-gear"></i>
                    <span>General Settings</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.media.library') }}">
                    <i class="fa-solid fa-photo-film"></i>
                    <span>Media Library</span>
                </a>
            </li>

            <!-- Logout -->
            <li class="menu-item menu-logout">
                <a href="{{ route('admin.logout') }}">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Sidebar Menu End -->

    <!-- Sidebar Footer Start -->
    <div class="sidebar-footer">
        <div class="admin-user-info">
            <div class="user-avatar">
                <img src="{{ asset('images/admin-avatar.jpg') }}" alt="Admin">
            </div>
            <div class="user-details">
                <h4>Adzani</h4>
                <p>Super Admin</p>
            </div>
        </div>
    </div>
    <!-- Sidebar Footer End -->

</aside>