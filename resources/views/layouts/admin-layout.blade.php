
<!DOCTYPE html>
<html>


<head>

    @yield('style')

    <style>

    body {
        background-image: url('https://www.desktopbackground.org/download/1024x768/2014/03/31/739647_minimalistic-multicolor-gaussian-blur-simple-backgrounds-white_1080x1920_h.jpg');
         /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

        /*Profile Card CSS*/

        .profile-card{
            background:radial-gradient( circle farthest-corner at 10% 20%, #F0F2F0 8.8%, #000C40 74.7% );
            background-size: cover;
            width: 46.5%;
            min-height: 60px;
            border-radius: 30px;
            padding: 0px 0px;
            color: #fff;
            margin-bottom: 40px;
        }

        .profile-card img.profile-photo{
            border: 7px solid #fff;
            float: left;
            margin-right: 20px;
            position: relative;
            top: -30px;
            height: 70px;
            width: 70px;
            border-radius: 100%;

        }

        .profile-card h5 a{
            font-size: 15px;
        }

        .profile-card a{
            font-size: 12px;
        }

        /*Newsfeed Links CSS*/

        ul.nav-news-feed{
            padding-left: 20px;
            padding-right: 20px;
            margin: 0 0 40px 0;
            background:transparent;
            padding-top:0px;
        }

        ul.nav-news-feed li{
            list-style: none;
            display: block;
            padding: 15px 0;
        }

        ul.nav-news-feed li div{

            margin-left: 30px;
        }

        ul.nav-news-feed li div::after{
            content: "";
            width: 100%;
            height: 1px;
            border-top: 1px solid #f1f2f2;
            position: absolute;
            bottom: -15px;
            left: 0;
        }

        ul.nav-news-feed li a{color: #6d6e71;}

        ul.nav-news-feed li i{
            font-size: 18px;
            margin-right: 15px;
            float: left;
        }




    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/style.blue.css')}}" id="theme-stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontastic.css')}}">
    <link rel="stylesheet" href="{{asset('css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    @yield('css')
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>



<div class="side-navbar-wrapper" >
    <div class="row" >
        <div class="col-sm-2 static">
            <br>
            <div class="profile-card">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="profile-photo">
                <h5><a class="text-white">{{Auth::user()->name}}</a></h5>
                <a  class="text-white col-sm-4"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Admin</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
                <li><i class="fa fa-home"></i><div><a href="{{route('home')}}">Dashboard</a></div></li>
                    <li><i class="fa fa-home"></i><div><a href="{{route('unit.index')}}">Manage Reading</a></div></li>

                    <li><i class = "fa fa-home"></i><a href=""
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form></li>

                <br><br><br><br><br><br><br>
            </ul><!--news-feed links ends-->


        </div>

<div class= "page user-dashboard ">

    @yield('content')

    </div>
</div>





<!-- JavaScript files-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
<script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>


@yield('script')
</body>

</html>
