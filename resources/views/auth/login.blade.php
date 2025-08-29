<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asar_login</title>
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <img src="{{ asset('images/123.png') }}" alt="">

    <div>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>
    
    <div class="top_conyiner">
        <input type="checkbox" id="flip">
        <label for="flip" class="switch">
            <span class="slider round"></span>
            <div class="signin">Sign in</div>
            <div class="signup">Sign up</div>
        </label>

        <div class="card">
            <div class="card-inner">

                {{-- Sign In --}}
                <form class="signin_content" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form_sign"></div>
                    <div class="all_face">
                        <div class="title">Sign In</div>

                        <div class="mail_input">
                            <input type="email" name="email" placeholder="enter your email"
                                value="{{ old('email') }}" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="mail_input">
                            <input type="password"  name="password" placeholder="enter your password"
                                required autocomplete="current-password">
                            <i class="fa-solid fa-lock"></i>
                        </div>

                        <div class="rem">
                            <input type="checkbox" name="checkbox">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>

                        <button type="submit">Sign In</button>
                    </div>
                </form>

                {{-- Sign Up --}}
                <form class="signup_content" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form_sign"></div>
                    <div class="all_back">
                        <div class="title">Sign Up</div>

                        <div class="mail_input">
                            <input type="text" name="name" maxlength="25" placeholder="Enter your name"
                                value="{{ old('name') }}" required>
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div class="mail_input">
                            <input type="email" name="email" placeholder="Enter your email"
                                value="{{ old('email') }}" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="mail_input">
                            <input type="password" name="password" placeholder="Enter your password" required
                                autocomplete="new-password">
                            <i class="fa-solid fa-lock"></i>
                        </div>

                        <div class="mail_input">
                            <input type="password" name="password_confirmation" placeholder="Confirm your password"
                                required autocomplete="new-password">
                            <i class="fa-solid fa-lock"></i>
                        </div>

                        <button type="submit">Sign Up</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
