<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shipping-fast"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pamcargo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.index') }}">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        General
    </div>

    <!-- Nav Item - Article -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.slider.*') }}">
        <a class="nav-link" href="{{ route('admin.general.slider.index') }}">
            <i class="fas fa-image"></i>
            <span>Slider</span></a>
    </li>

</ul>
