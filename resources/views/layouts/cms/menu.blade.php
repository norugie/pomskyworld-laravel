<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-dog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">POMSKYWORLD</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is( 'cms/dashboard' ) ? 'active' : '' }}">
        <a class="nav-link" href="/cms/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Request::is( 'cms/puppies' ) ? 'active' : '' }}">
        <a class="nav-link" href="/cms/puppies">
            <i class="fas fa-fw fa-paw"></i>
            <span>Puppies</span></a>
    </li>
    <li class="nav-item {{ Request::is( 'cms/parents' ) ? 'active' : '' }}">
        <a class="nav-link" href="/cms/parents">
            <i class="fas fa-fw fa-dog"></i>
            <span>Parents</span></a>
    </li>
    <li class="nav-item {{ Request::is( 'cms/testimonials' ) ? 'active' : '' }}">
        <a class="nav-link" href="/cms/testimonials">
            <i class="fas fa-fw fa-comments"></i>
            <span>Testimonials</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>