<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.min.css" rel="stylesheet">
        <style type="text/css" media="screen">
            /* Required for full background image */
            html,
            body,
            header,
            .view {
              height: 100%;
            }

            @media (max-width: 740px) {
              header {
                height: 100vh;
              }
            }

            .top-nav-collapse {
              background-color: #78909c !important;
            }

            .navbar:not(.top-nav-collapse) {
              background: transparent !important;
            }

            @media (max-width: 768px) {
              .navbar:not(.top-nav-collapse) {
                background: #78909c !important;
              }
            }

            h1 {
              letter-spacing: 8px;
            }

            h5 {
              letter-spacing: 3px;
            }

            .hr-light {
              border-top: 3px solid #fff;
              width: 80px;
            }

            .jarallax {
              min-height: auto;
            }
                    
        </style>
    </head>
    <body>

        
        <!-- Main navigation -->
        <header>
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#"><strong>MDB</strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <div class="md-form mt-0">
                                <a class="form-control mr-sm-2"" href="{{ url('login')}}">Iniciar Sesion</a>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
            <!-- Full Page Intro -->
            <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('/img/fondo.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <!-- Content -->
                    <div class="container">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 mb-4 white-text text-center">
                                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Minimalist intro</strong></h1>
                                <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                                <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Photography & design</strong></h5>
                                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">portfolio</a>
                                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->
            </div>
            <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->

        <!--/.Footer-->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Initializations -->
        <script type="text/javascript">
        // Animations initialization
        new WOW().init();
        </script>
        
    </body>
</html>