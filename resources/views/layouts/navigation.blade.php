<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/css/page.css', 'resources/css/all.min.css', 'resources/css/normalize.css'])

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <header>
        <i class="fa-solid fa-bars"></i>
        <div class="logo">ASAR</div>
        <div class="h_list">
            <ul>

                <a href="{{ route('users.index') }}">
                    <li class="{{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}">
                        User Preview
                    </li>
                </a>

                @if (auth()->user()->is_admin)
                    <a href="{{ route('products.index') }}">
                        <li class="{{ Route::currentRouteName() == 'products.index' ? 'active' : '' }}">
                            Admin Dashboard
                        </li>
                    </a>
                @endif


            </ul>
        </div>
        <div class="all_search">
            <input type="search" name="search" id="">
            <a href="#" class="s_icon" name="search_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <div class="account">
            <ul class="user_l">
                <button>{{ explode(' ',auth()->user()->name)[0]}} {{ auth()->user()->is_admin ? '| Admin' : '| User' }}</button>
                <li><a href={{ route('profile.edit') }}>profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                        <a href="route('logout')"
                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <div class="cart">
            <a href="#" name="cart">
                <i class="fa-solid fa-cart-shopping"></i>
                <div class="title">cart</div>
            </a>
        </div>

    </header>

    @yield('main-body')

    <footer>
        <div class="logo">ASAR</div>
        <ul class="social">
            <li>
                <a href="#" class="facebook">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#" class="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
        </ul>
        <div class="about">
            <samp>Programmed by :</samp>
            <span class="amgad">
                <a href="https://github.com/Amgad-Abd-El-Mohsen">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://github.com/Amgad-Abd-El-Mohsen">
                    Amgad Abd El-Mohsen</a>
            </span><samp>&</samp><span class="osama">
                <a href="https://github.com/Osama-Abd-El-Mohsen">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://github.com/Osama-Abd-El-Mohsen">
                    Osama Abd El-Mohsen</a>
            </span>
        </div>
    </footer>
</body>

</html>
