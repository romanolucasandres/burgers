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






    <!-- Feature Start -->
    <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-header">
                        <p>¿Por qué elegirnos? </p>
                        <h2>Nuestras fortalezas</h2>
                    </div>
                    <div class="feature-text">
                        <div class="feature-img">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ asset('web/img/feature-1.jpg') }}" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('web/img/feature-2.jpg') }}" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('web/img/feature-3.jpg') }}" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('web/img/feature-4.jpg') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl nec nisi sceleri maximus
                        </p>
                        <a class="btn custom-btn" href="/menu">Pedí ahora</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-cooking"></i>
                                <h3>World’s best Chef</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-vegetable"></i>
                                <h3>Natural ingredients</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-medal"></i>
                                <h3>Best quality products</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-meat"></i>
                                <h3>Fresh vegetables & Meet</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-courier"></i>
                                <h3>Fastest door delivery</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-fruits-and-vegetables"></i>
                                <h3>Ground beef & Low fat</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->



    <!-- Menu Start -->
    <div class="menu">
        <div class="container">
            <div class="section-header text-center">
                <p>Food Menu</p>
                <h2>Delicious Food Menu</h2>
            </div>
            <div class="menu-tab">

                <div class="tab-content">
                    <div id="burgers" class="container tab-pane active">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Mini cheese Burger</span> <strong>$9.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Double size burger</span> <strong>$11.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Bacon, EGG and Cheese</span> <strong>$13.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Pulled porx Burger</span> <strong>$18.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Fried chicken Burger</span> <strong>$22.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!-- Menu End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2>Our Master Chef</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('web/img/team-1.jpg.jpg') }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>CEO, Co Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('web/img/team-2.jpg.jpg') }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Dylan Adams</h2>
                                <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('web/img/team-3.jpg.jpg') }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Jhon Doe</h2>
                                <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('web/img/team-4.jpg.jpg') }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Josh Dunn</h2>
                                <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('web/img/testimonial-1.jpg') }}" alt="Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('web/img/testimonial-2.jpg') }}" alt="Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('web/img/testimonial-3.jpg') }}" alt="Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('web/img/testimonial-4.jpg') }}" alt="Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


       
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
                                    <a href="#" style="color: green;" ><strong>11 4444-4444</strong></a>
                                </p>
                                <a class="btn custom-btn" href="#">VER EN MAPS</a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 text-center my-4 ">
                            <div class="section-header">
                                <h4>Nordelta</h4>
                                <p class="">Boulevard del Mirador <br> 430
                                    Lunes a Domingos <br>12:00 a 00:00<br>
                                    <a href="#" style="color: green;" ><strong>11 4444-4444</strong></a>
                                </p>
                                <a class="btn custom-btn" href="#">VER EN MAPS</a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 text-center my-4 ">
                            <div class="section-header">
                                <h4>Boedo</h4>
                                <p>Muñiz 1002 <br>
                                    Lunes a Domingos <br>12:00 a 00:00<br>
                                    <a href="#" style="color: green;" ><strong>11 4444-4444</strong></a>
                                </p>
                                <a class="btn custom-btn" href="#">VER EN MAPS</a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 text-center my-4 ">
                            <div class="section-header">
                                <h4>Belgrano</h4>
                                <p>Blanco Encalada 1468<br>
                                    Lunes a Domingos <br>12:00 a 00:00<br>
                                    <a href="#" style="color: green;" ><strong>11 4444-4444</strong></a>
                                </p>
                                <a class="btn custom-btn" href="#">VER EN MAPS</a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 text-center my-4 ">
                            <div class="section-header">
                                <h4>San Isidro</h4>
                                <p>Avenida del Libertador 14850<br>
                                    Lunes a Domingos <br>12:00 a 00:00<br>
                                    <a href="#" style="color: green;" ><strong>11 4444-4444</strong></a>
                                </p>
                                <a class="btn custom-btn" href="#">VER EN MAPS</a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 text-center my-4 ">
                            <div class="section-header">
                                <h4>San Miguel</h4>
                                <p>Italia 1041<br>
                                    Lunes a Domingos <br>12:00 a 00:00<br>
                                    <a href="#" style="color: green;" ><strong>11 4444-4444</strong></a>
                                </p>
                    
                                <a class="btn custom-btn" href="#">VER EN MAPS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Blog</p>
                    <h2>Latest From Food Blog</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('web/img/blog-1.jpg') }}" alt="Image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Food</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                    </p>
                                    <a class="btn custom-btn" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('web/img/blog-2.jpg') }}" alt="Image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Food</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                    </p>
                                    <a class="btn custom-btn" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn custom-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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