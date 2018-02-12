<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/euroapplogo001.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/euroapplogo001.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('/MK_BS3/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/MK_BS3/css/material-kit.css') }}" rel="stylesheet"/>

</head>

<body class="landing-page">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    {{-- <li>
                        <a href="../components-documentation.html" target="_blank">
                            Components
                        </a>
                    </li>
                    <li>
                        <a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
                            <i class="material-icons">unarchive</i> Upgrade to PRO
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li> --}}
{{--                     <li>
                        <a href="#" target="_blank">
                            LogIn
                        </a>
                    </li> --}}

                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        {{-- <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');"> --}}
         <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1503797172624-decbe212fdb5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=84afaa3ec26e5fcdf7ac81a8b496418a&auto=format&fit=crop&w=1353&q=80');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Para poder ir en búsqueda de lo mejor.</h1>
                        <h4>El mercado de las aplicaciones cada vez está creciendo más, y para las grandes empresas estas han funcionado como un motor de crecimiento y de eficiencia.</h4>
                        {{-- <br /> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                            <i class="fa fa-play"></i> Watch video
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                {{-- <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">EuroTeam</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                        </div>
                    </div>

                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">chat</i>
                                    </div>
                                    <h4 class="info-title">First Feature</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="material-icons">verified_user</i>
                                    </div>
                                    <h4 class="info-title">Second Feature</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="material-icons">fingerprint</i>
                                    </div>
                                    <h4 class="info-title">Third Feature</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="section text-center">
                    <h2 class="title">Ellos son nuestro EuroTeam</h2>
    
                    <div class="team">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="{{ asset('/img/JuanPadilla.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">Juan Padilla<br />
                                        <small class="text-muted">Creative designer</small>
                                    </h4>
                                    {{-- <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a> --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="{{ asset('/img/PascualLemus.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">Pascual Lemus<br />
                                        <small class="text-muted">Developer Engineer</small>
                                    </h4>
                                    {{-- <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a> --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="{{ asset('/img/SergioSojo.JPG') }}" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">Sergio Sojo<br />
                                        <small class="text-muted">Developer</small>
                                    </h4>
                                    {{-- <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section landing-section">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-center title">Trabajando para ti</h2>
                                <h4 class="text-center description">Denos algunos detalles sobre nuestra aplicación y trabajo, algunas líneas sobre cada uno de nosotros, o cualquier colaboración adicional que nos pueda brindar, y le responderemos con gratitud.</h4>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Tu Nombre</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Tu Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Tu Mensaje</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 text-center">
                                            <button class="btn btn-primary btn-raised">
                                                Envía tu mensaje
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer">
            <div class="container">
                {{-- <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                               About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav> --}}
                <div class="copyright pull-right">
                    &copy; 2018, Hecho por EuroTeam <i class="fa fa-rebel"></i> 
                </div>
            </div>
        </footer>
    </div>
</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('/MK_BS3/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/MK_BS3/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/MK_BS3/js/material.min.js') }}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('/MK_BS3/js/nouislider.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset('/MK_BS3/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset('/MK_BS3/js/material-kit.js') }}" type="text/javascript"></script>

</html>
