<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(1) == 'dashboard') active @endif" href="{{ route('dashboard.index') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(1) == 'users') active @endif" href="{{ route('users.index') }}">
                    Manajemen User
                </a>
            </li>
        </ul>
    </div>
</nav>