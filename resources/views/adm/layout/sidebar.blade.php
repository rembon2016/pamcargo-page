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
        Monitoring
    </div>

    <!-- Nav Item - Visitor Log -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.monitoring.visitor.*') }}">
        <a class="nav-link" href="{{ route('admin.monitoring.visitor.index') }}">
            <i class="fas fa-user"></i>
            <span>Visitor Log</span></a>
    </li>

    <!-- Nav Item - System Log -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.monitoring.system.*') }}">
        <a class="nav-link" href="{{ route('admin.monitoring.system.index') }}">
            <i class="fas fa-desktop"></i>
            <span>System Log</span></a>
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
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.about.*') }}">
        <a class="nav-link {{ Utilities::activateIfRouteIs('admin.general.about.*', 'collapsed', true) }}" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-info"></i>
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

    <!-- Nav Item - Services -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.service.*') }}">
        <a class="nav-link {{ Utilities::activateIfRouteIs('admin.general.service.*', 'collapsed', true) }}" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-hand-holding-heart"></i>
            <span>Services</span>
        </a>
        <div id="collapseThree" class="collapse {{ Utilities::activateIfRouteIs('admin.general.service.*', 'show') }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pamcargo Services</h6>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.service.sea.index') }}"
                    href="{{ route('admin.general.service.sea.index') }}">
                    Sea Air Services
                </a>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.service.land.index') }}"
                    href="{{ route('admin.general.service.land.index') }}">
                    Land Air Services
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Email Carbon -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.email_carbon.*') }}">
        <a class="nav-link" href="{{ route('admin.general.email_carbon.index') }}">
            <i class="fas fa-envelope"></i>
            <span>Email Carbon</span></a>
    </li>

    <!-- Nav Item - Contacts -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.contact.*') }}">
        <a class="nav-link {{ Utilities::activateIfRouteIs('admin.general.contact.*', 'collapsed', true) }}" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contacts</span>
        </a>
        <div id="collapseFour" class="collapse {{ Utilities::activateIfRouteIs('admin.general.contact.*', 'show') }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pamcargo Contact</h6>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.contact.content.*') }}"
                    href="{{ route('admin.general.contact.content.index') }}">
                    Content Contact
                </a>
                <a
                    class="collapse-item {{ Utilities::activateIfRouteIs('admin.general.contact.footer.*') }}"
                    href="{{ route('admin.general.contact.footer.index') }}">
                    Footer Contact
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Privacy Policy -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.privacy_policy.*') }}">
        <a class="nav-link" href="{{ route('admin.general.privacy_policy.index') }}">
            <i class="fas fa-user-shield"></i>
            <span>Privacy Policy</span></a>
    </li>

    <!-- Nav Item - Imprint -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.imprint.*') }}">
        <a class="nav-link" href="{{ route('admin.general.imprint.index') }}">
            <i class="fas fa-wrench"></i>
            <span>Imprint</span></a>
    </li>

    <!-- Nav Item - Widget Quick Access -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.general.widget.*') }}">
        <a class="nav-link" href="{{ route('admin.general.widget.index') }}">
            <i class="fas fa-cog"></i>
            <span>Widget Quick Access</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Activities
    </div>

    <!-- Nav Item - User -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.ua.user.*') }}">
        <a class="nav-link" href="{{ route('admin.ua.user.index') }}">
            <i class="fas fa-users"></i>
            <span>User</span></a>
    </li>

    <!-- Nav Item - News -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.ua.news.*') }}">
        <a class="nav-link" href="{{ route('admin.ua.news.index') }}">
            <i class="fas fa-newspaper"></i>
            <span>News</span></a>
    </li>

    <!-- Nav Item - Office -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.ua.office.*') }}">
        <a class="nav-link" href="{{ route('admin.ua.office.index') }}">
            <i class="fas fa-building"></i>
            <span>Office</span></a>
    </li>

    <!-- Nav Item - Agents -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.ua.agent.*') }}">
        <a class="nav-link" href="{{ route('admin.ua.agent.index') }}">
            <i class="fas fa-users"></i>
            <span>Agents</span></a>
    </li>

    <!-- Nav Item - Rate Request -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.ua.rate_request.*') }}">
        <a class="nav-link" href="{{ route('admin.ua.rate_request.index') }}">
            <i class="fas fa-envelope"></i>
            <span>Rate Request</span></a>
    </li>

    <!-- Nav Item - Continent -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.ua.continent.*') }}">
        <a class="nav-link" href="{{ route('admin.ua.continent.index') }}">
            <i class="fas fa-globe"></i>
            <span>Continent</span></a>
    </li>

    <!-- Nav Item - Customer Message -->
    <li class="nav-item {{ Utilities::activateIfRouteIs('admin.ua.customer_message.*') }}">
        <a class="nav-link" href="{{ route('admin.ua.customer_message.index') }}">
            <i class="fas fa-envelope"></i>
            <span>Customer Message</span></a>
    </li>

</ul>
