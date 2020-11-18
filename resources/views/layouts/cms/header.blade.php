<header class="c-header c-header-light c-header-fixed">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="fa fa-bars"></i>
    </button>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3">Hello, {{ Auth::user()->name }}</li>
    </ul>
    <ul class="c-header-nav mfs-auto">
        <li class="c-header-nav-item px-3 c-d-legacy-none">
            <a class="c-class-toggler c-header-nav-btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                role="button">
                <i class="fa fa-sign-out"></i> &nbsp;Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</header>