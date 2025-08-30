<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <header>
        <i class="fa-solid fa-bars"></i>
        <div class="logo">ASAR</div>
        <div class="all_search">
            <input type="search" name="search" id="" />
            <a href="#" class="s_icon" name="search_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <div class="account">
            <a href="#">
                <div class="name" name="username">Amgad</div>
            </a>
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
            <li>
                <a href="#" class="twitter">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
        </ul>
        <div class="about">
            Made by
            <span class="amgad">
                <a href="https://github.com/Amgad-Abd-El-Mohsen">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://github.com/Amgad-Abd-El-Mohsen">
                    Amgad Abd El Mohsen</a> </span><samp>&</samp><span class="osama">
                <a href="https://github.com/Osama-Abd-El-Mohsen">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://github.com/Osama-Abd-El-Mohsen">
                    Osama Abd El Mohsen</a>


            </span>
        </div>
        <div>
            {{-- Products --}}
            @if (auth()->user()->isAdmin())
                <a href={{ route('products.index') }}>Dashboard</a>
            @endif

            {{-- Log Out --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>

            {{-- Profile --}}
            <a href={{ route('profile.edit') }}>
                {{ __('Profile') }}
            </a>
        </div>
    </footer>
</body>

</html>
