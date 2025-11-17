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
            <!-- Pages Section -->
            <li class="menu-section">
                <span>Pages Management</span>
            </li>
            <br><br>
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