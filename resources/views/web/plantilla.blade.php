<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BURGER S.R.L.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{ asset('web/img/favicon.ico') }}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('web/lib/animate/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('web/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('web/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <link href="{{ asset('web/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />


    <!-- Template Stylesheet -->
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet">


</head>

<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Burger <span>Roma</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto ">
                    <a href="/" class="nav-item nav-link">Inicio</a>
                    <a href="/takeaway" class="nav-item nav-link">Takeaway</a>
                    <a href="/nosotros" class="nav-item nav-link">Nosotros</a>

                    <a href="/menu" class="nav-item nav-link">Menú</a>

                    <a href="/ingresar" class="nav-item nav-link">Ingresar </a>
                    <a href="/carrito" class="nav-link btn-card"><i class="fas fa-shopping-cart"></i> 0 -
                        $0,00</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
    @yield('contenido')
 
        <!-- Footer Start -->
        <div class="footer">
            <section id="sucursal-home">
                <div class="container">
                    <div class="section-header text-center">
                        <p>¿Dónde encontrarnos?</p>
                        <h2>Mirá nuestras sucursales </h2>
                    </div>
                    <div class="col-12 pb-5">
                        <div class="row pb-4">
                            <div class="col-6 col-sm-4 text-center my-4 ">
                                <div class="section-header">
                                    <h4>Palermo</h4>
                                    <p>Fitz Roy 1727 <br>
                                        Lunes a Domingos <br>12:00 a 00:00<br>
                                        <a href="#" style="color: green;"><strong>11 4444-4444</strong></a>
                                    </p>
                                    <a class="btn custom-btn" href="#">VER EN MAPS</a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 text-center my-4 ">
                                <div class="section-header">
                                    <h4>Nordelta</h4>
                                    <p class="">Boulevard del Mirador 430 <br> 
                                        Lunes a Domingos <br>12:00 a 00:00<br>
                                        <a href="#" style="color: green;"><strong>11 4444-4444</strong></a>
                                    </p>
                                    <a class="btn custom-btn" href="#">VER EN MAPS</a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 text-center my-4 ">
                                <div class="section-header">
                                    <h4>Boedo</h4>
                                    <p>Muñiz 1002 <br>
                                        Lunes a Domingos <br>12:00 a 00:00<br>
                                        <a href="#" style="color: green;"><strong>11 4444-4444</strong></a>
                                    </p>
                                    <a class="btn custom-btn" href="#">VER EN MAPS</a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 text-center my-4 ">
                                <div class="section-header">
                                    <h4>Belgrano</h4>
                                    <p>Blanco Encalada 1468<br>
                                        Lunes a Domingos <br>12:00 a 00:00<br>
                                        <a href="#" style="color: green;"><strong>11 4444-4444</strong></a>
                                    </p>
                                    <a class="btn custom-btn" href="#">VER EN MAPS</a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 text-center my-4 ">
                                <div class="section-header">
                                    <h4>San Isidro</h4>
                                    <p>Avenida del Libertador 14850<br>
                                        Lunes a Domingos <br>12:00 a 00:00<br>
                                        <a href="#" style="color: green;"><strong>11 4444-4444</strong></a>
                                    </p>
                                    <a class="btn custom-btn" href="#">VER EN MAPS</a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 text-center my-4 ">
                                <div class="section-header">
                                    <h4>San Miguel</h4>
                                    <p>Italia 1041<br>
                                        Lunes a Domingos <br>12:00 a 00:00<br>
                                        <a href="#" style="color: green;"><strong>11 4444-4444</strong></a>
                                    </p>

                                    <a class="btn custom-btn" href="#">VER EN MAPS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">BURGER S.R.L.</a>, All Right Reserved.</p>
                    <p>Designed By <a href="#">Lu-Roma</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('web/lib/easing/easing.min.js') }}"></script>

        <script src="{{ asset('web/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('web/lib/tempusdominus/js/moment.min.js') }}"></script>

        <script src="{{ asset('web/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('web/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <!-- Contact Javascript File -->

        <script src="{{ asset('web/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('web/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('web/js/main.js') }}"></script>
</body>

</html>