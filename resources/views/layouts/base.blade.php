<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hearts Medi Study</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    @livewireStyles
</head>


<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> Hearts Medi Study </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                @if (Auth::user())
                <div class="dropdown" style="float:right;">
                    <button style="background-color: white;"><div  style="color: rgb(0, 109, 128);" class="fas fa-user"></div></button>
                    <div class="dropdown-content">
                    <a href="#">My Account</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                    </div>
                  </div>
                @else
                <div id="login-btn" style="color: rgb(0, 109, 128);" class="fas fa-user"></div>
                @endif
                        
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#home">all books</a>
                <a href="#home">sale books</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <a href="#blogs">blogs</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- login form  -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- SignIn -->
            <h3>sign in</h3>
            <span>Email</span>
            <input id="email" class="box" type="email" name="email" :value="old('email')" required autofocus>
            <span>password</span>
            <input id="password" class="box" type="password" name="password" required autocomplete="current-password">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
            <p>don't have an account ? <a href="#" id="signup-btn">create one</a></p>

        </form>
    </div>

    <div class="signup-form-container">

        <div id="close-signup-btn" class="fas fa-times"></div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- SignUp -->
            <h3>sign up</h3>
            <span>Name</span>
            <input id="name" class="box" type="text" name="name" :value="old('name')" required autofocus
                autocomplete="name">
            <span>Email</span>
            <input id="email" class="box" type="email" name="email" :value="old('email')" required>
            {{-- <span>Phone</span>
        <input type="text" name="" class="box" placeholder="enter your phone" id=""> --}}
            <span>Password</span>
            <input id="password" class="box" type="password" name="password" required autocomplete="new-password">
            <span>Confirm Password</span>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" class="box">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" value="sign up" class="btn">
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif
            <p>forget password ? <a href="#">click here</a></p>
            <p>already have an account ? <a href="{{ route('login') }}">sign in</a></p>

        </form>

    </div>





    {{$slot}}









    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> House -15, Road-17, Nikunjo 2 </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Khilkhet, Dhaka-1229, Bangladesh. </a>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.2635477463045!2d90.41279297656592!3d23.83168965227218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65e78f46ee1%3A0x3e009fd37c89634f!2sNikunja%202%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1663319882562!5m2!1sen!2sbd"
                    width="250" height="125" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> All Books </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Featured Books </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Arrivals Books </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Hearts Medi Study </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Reviews </a>
            </div>

            <div class="box">
                <h3>Feel free to contact with us</h3>
                <a href="#"> <i class="fas fa-phone"></i> +8801761319100 </a>
                <a href="#"> <i class="fas fa-envelope"></i> heartsmedistudy@gmail.com </a>
                <img src="{{asset("assets/image/worldmap.png")}}" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> @copyright <span> APRS-Solutions Limited</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="{{asset("assets/image/loader-img.gif")}}" alt="">
    </div>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="{{asset("assets/js/script.js")}}"></script>

    @if (!Auth::user())
    <script>
        let loginForm = document.querySelector('.login-form-container');

        document.querySelector('#login-btn').onclick = () =>{
        loginForm.classList.toggle('active');
        }

        document.querySelector('#close-login-btn').onclick = () =>{
        loginForm.classList.remove('active');
        }

        let signupForm = document.querySelector('.signup-form-container');

        document.querySelector('#signup-btn').onclick = () =>{
        signupForm.classList.toggle('active');
        }

        document.querySelector('#close-signup-btn').onclick = () =>{
        signupForm.classList.remove('active');
        }
    </script>
                @endif
    
    @livewireScripts


</body>

</html>
