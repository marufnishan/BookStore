<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel Messenger</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <style>
        body {
            padding-top: 70px;
        }

        td {
            font-size: 18px !important;
        }

        td a {
            font-size: 18px !important;
        }

        ul li a {
            font-size: 18px !important;
        }

        ul li a:hover {
            color: rgb(3, 50, 59) !important;
        }

        h2 {
            font-size: 32px !important;
        }
        .min-h-screen {
            min-height: 80vh !important;
            padding-top: 40px !important;
        }
        label{
            font-size: 18px !important;
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }

        input,textarea{
            border: 2px solid black;
        }

        button{
            padding: 5px !important;
            margin-top: 10px !important;
            font-size: 12px !important;
            background-color: rgb(0, 109, 128) !important;
        }
        
        @media (max-width:768px) {
            .msgcon .dropdown {
                float:left!important;
                margin-bottom: 20px !important;
            }
            .msgcon .dropdown .dropdown-content {
            position: relative;
            }
        }

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top " style="background-color: #FFFF;border: none;">
        <section class="msgcon">
            {{-- <div class="container"> --}}
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" style="background-color: rgb(0, 109, 128)"
                    data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route("home")}}" class="navbar-brand" style="font-size: 2rem;
            font-weight: bolder;
            color: rgb(0, 109, 128);"> <i class="fas fa-book"></i> Hearts Medi Study </a>
            </div>
            
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>                    
                    @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype === 'ATR')
                    <li><a href="{{route("author_dashboard")}}">Dashboard</a></li>
                    @elseif(Auth::user()->utype === 'STD')
                    <li><a href="{{route("student_dashboard")}}">Dashboard</a></li>
                    @endif
                    @else
                    @endif
                    @endif
                    <li><a href="/messages">Messages @include('messenger.unread-count')</a></li>
                    <li><a href="/messages/create">Send Message</a></li>
                </ul>
                {{-- <div style="color: rgb(0, 109, 128);float:right;font-size: 2.5rem;" class="navbar-brand fas fa-user">
                </div> --}}
                
            <div class="dropdown" style="float:right;">
                <button style="background-color: white !important;">
                    <div style="color: rgb(0, 109, 128);float:right;font-size: 2.5rem;" class="fas fa-user">
                    </div>
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
                
            </div>
            <!--/.nav-collapse -->
        </section>
    </nav>

    <div class="content">
        @yield('content')
    </div>

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
                <a href="{{route("home")}}#home"> <i class="fas fa-arrow-right"></i> Home </a>
                <a href="{{route("all_books")}}"> <i class="fas fa-arrow-right"></i> All Books </a>
                <a href="{{route("home")}}#featured"> <i class="fas fa-arrow-right"></i> Featured Books </a>
                <a href="{{route("home")}}#arrivals"> <i class="fas fa-arrow-right"></i> Arrivals Books </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="{{route("home")}}"> <i class="fas fa-arrow-right"></i> Hearts Medi Study </a>
                <a href="{{route("home")}}#reviews"> <i class="fas fa-arrow-right"></i> Reviews </a>
                <a href="{{route("home")}}#blogs"> <i class="fas fa-arrow-right"></i> Blogs </a>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
</body>

</html>
