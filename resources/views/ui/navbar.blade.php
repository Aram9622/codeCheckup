<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="logo" href="#">{{setting('site.title')}}</a>
        <ul class="nav">
            @foreach($menus as $menu)
                <li class="item">
                    <a class="link" href="{{ $menu->route }}">{{ $menu->title }}</a>
                </li>
            @endforeach
            @guest
                @if (Route::has('login'))
                    <li class="item">
                        <a class="link" data-toggle="modal" data-target="#loginModal" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="item">
                        <a class="link" data-toggle="modal" data-target="#registerModal" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="item dropdown">
                    <a id="navbarDropdown"
                       class="nav-link text-[#26296d]"
                       href="{{route("home")}}" role="button"
                       aria-haspopup="true"
                       aria-expanded="false">
                        My Account
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="item">
                    <a class="link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
            @endguest
        </ul>
        <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
        </a>
    </div>
</nav>
