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
    <!-- togle div css -->
    <link rel="stylesheet" href="toglediv.css">
    @livewireStyles
</head>


<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="{{route("home")}}" class="logo"> <i class="fas fa-book"></i> Hearts Medi Study </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                @if (Auth::user())
                <div class="dropdown">
                    <button style="background-color: white;">
                        <div style="color: rgb(0, 109, 128);" class="fas fa-user"></div>
                    </button>
                    <div class="dropdown-content">
                        @if(Auth::user()->profile_photo_path)
                        <a href="#"> <img style="height: 50px;weidth:50px;"
                                src="{{asset('assets/image/'.Auth::user()->profile_photo_path)}}"
                                alt="{{ Auth::user()->name }}" /></a>
                        <a href="#">
                            <p style="font-size: 16px;"> <b>Name : </b>{{ Auth::user()->name }}</p>
                        </a>
                        @else
                        <a href="#"> <img class="h-12 w-12 rounded-full object-cover"
                                src="{{Auth::user()->profile_photo_url}}" alt="{{ Auth::user()->name }}" /> <br> My
                            Account</a>
                        @endif
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                            Out</a>
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
                <a href="{{route("home")}}">home</a>
                @if(Route::has('login'))
                @auth
                @if(Auth::user()->utype === 'ATR')
                <a href="{{route("author_dashboard")}}">Dashboard</a>
                @elseif(Auth::user()->utype === 'STD')
                <a href="{{route('student_dashboard')}}">Dashboard</a>
                @endif
                @else
                @endif
                @endif
                <a href="{{route("all_books")}}">all books</a>
                <a href="http://localhost:8000#featured" target="_parent">featured</a>
                <a href="http://localhost:8000#arrivals" target="_parent">arrivals</a>
                <a href="http://localhost:8000#reviews" target="_parent">reviews</a>
                <a href="http://localhost:8000#blogs" target="_parent">blogs</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="http://localhost:8000#home" target="_parent" class="fas fa-home"></a>
        <a href="{{route("all_books")}}" class="fas fa-tags"></a>
        <a href="http://localhost:8000#reviews" target="_parent" class="fas fa-comments"></a>
        <a href="http://localhost:8000#blogs" target="_parent" class="fas fa-blog"></a>        
        <a href="{{route("author_dashboard")}}" class="fas fa-list"></a>
    </nav>

    <!-- login form  -->

    @livewire('auth.login-component')
    @livewire('auth.registration-component')


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
                <a href="#"> <i class="fas fa-arrow-right"></i> Blogs </a>
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

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="{{asset("assets/js/script.js")}}"></script>
    <!-- toggle js file link  -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- toggle script --}}
    <script>
        $(document).ready(function () {
            $(".content .tab_content").hide();
            $(".content .tab_content:first-child").show();

            $("ul li").click(function () {

                $("ul li").removeClass("active");
                $(this).addClass("active");

                var current_tab = $(this).attr("data-list");
                $(".content .tab_content").hide();
                $("." + current_tab).show();
            })
        });

    </script>
    {{-- toggle script close --}}

    @if (!Auth::user())
    <script>
        let loginForm = document.querySelector('.login-form-container');

        document.querySelector('#login-btn').onclick = () => {
            loginForm.classList.toggle('active');
        }

        document.querySelector('#close-login-btn').onclick = () => {
            loginForm.classList.remove('active');
        }

        let signupForm = document.querySelector('.signup-form-container');

        document.querySelector('#signup-btn').onclick = () => {
            signupForm.classList.toggle('active');
        }

        document.querySelector('#close-signup-btn').onclick = () => {
            signupForm.classList.remove('active');
        }

    </script>
    @endif

    @livewireScripts


</body>

</html>
