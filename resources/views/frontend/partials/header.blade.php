<header class="site-header">
    <a href="#content" class="sr-only sr-only-focusable">Skip to content</a>
    <nav class="navbar navbar-expand-lg navbar-light py-3" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand text-dark" href="{{ url('/') }}">
                <h1>LMS</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-lg"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center text-uppercase pt-3 pt-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category') }}"><i class="fas fa-list-alt"></i> {{ trans('menu.category') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books') }}"><i class="fas fa-book"></i> {{ trans('menu.book') }}</a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="DropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ trans('menu.hi') }}, {{ Auth::user()->name }}<i class="fas fa-angle-down fa-sm ml-1"></i>
                            </a>
                            <div class="dropdown-menu mb-2" aria-labelledby="DropdownMenu">
                                @if (Auth::user()->role == 'admin')
                                    <a class="dropdown-item" href="{{ route('admin.home') }}"><i class="fa fa-wrench"></i> Đăng nhập quản trị</a>    
                                @endif
                                <a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user"></i> {{ trans('menu.profile') }}</a>
                                <a class="dropdown-item" href="{{ route('favorite') }}"><i class="fas fa-heart"></i> {{ trans('menu.favorite') }}</a>
                                <a class="dropdown-item" href="{{ route('bookcase') }}"><i class="fas fa-book"></i> {{ trans('menu.bookcase') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ trans('menu.logout') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ trans('menu.login') }}</a>
                        </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>
</header>
