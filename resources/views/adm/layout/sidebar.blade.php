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

    <!-- Nav Item - Slider -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.slider.*') }}">
        <a class="nav-link" href="{{ route('admin.general.slider.index') }}">
            <i class="fas fa-image"></i>
            <span>Slider</span></a>
    </li>

    <!-- Nav Item - About -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>About</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Utilities::activateIfRouteIs('admin.general.about.*', 'show') }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Part of About Pamcargo</h6>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.about.overview.index') }}"
                    href="{{ route('admin.general.about.overview.index') }}">
                    Overview
                </a>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.about.objective.index') }}"
                    href="{{ route('admin.general.about.objective.index') }}">
                    Objective
                </a>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.about.vision.index') }}"
                    href="{{ route('admin.general.about.vision.index') }}">
                    Vision
                </a>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.about.mission.index') }}"
                    href="{{ route('admin.general.about.mission.index') }}">
                    Mission
                </a>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.about.ourteam.index') }}"
                    href="{{ route('admin.general.about.ourteam.index') }}">
                    Our Team
                </a>
            </div>
        </div>
    </li>

</ul>
