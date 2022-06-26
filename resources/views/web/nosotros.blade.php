@extends('web.plantilla')
@section('contenido')

<!-- Page Header Start -->
<div class="page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nosotros</h2>
            </div>
            <div class="col-12">
                <a href="/">Inicio</a>
                <a href="/Nosotros">Nosotros</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('web/img/about.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header">
                        <p>Nosotros</p>
                        <h3>Generando sensaciones desde 2019</h3>
                    </div>
                    <div class="about-text">
                        <p>
                            Nacimos en el 2019 en Palermo, provenientes de las recetas de tradición familiar. En un comienzo, nos avocamos en la venta de hamburguesas por redes sociales; construyendo nuestro propio ADN. En ese camino, nos obsesionamos con la hamburguesa perfecta en cuanto al sabor y la calidad, que gracias a los diferentes testeos del producto, nos empezamos a hacer conocidos.
                        </p>
                        <p>
                            El impacto de la gente fue inmediato y gracias a las recomendaciones, nos fuimos posicionando en el barrio de Palermo. Ese enorme crecimiento nos sirvió para expandirnos y poder abrir mas sucursales.
                        </p>
                        <a class="btn custom-btn" href="/takeaway">Realizá tu pedido</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

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

@endsection