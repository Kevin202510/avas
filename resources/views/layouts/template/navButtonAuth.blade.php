<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto {{ Request::is('customer') ? 'active' : '' }}" href="{{ route('Customer Home') }}">Home</a></li>
        <li><a class="nav-link scrollto {{ Request::is('menus') ? 'active' : '' }}" href="{{ route('Menus') }}">Menu</a></li>
        <li><a class="nav-link scrollto {{ Request::is('book-tables') ? 'active' : '' }}" href="{{ route('Tables') }}">Book Table</a></li>
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="dropdown"><a href="#"><span>{{ Auth::user()->fullName }}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="{{ route('Cart') }}">My Cart</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
      