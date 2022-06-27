@extends("web.plantilla")
@section('contenido')

<!-- Carousel Start -->
<div class="carousel">
      <div class="container-fluid">
            <div class="owl-carousel">
                  <div class="carousel-item">
                        <div class="carousel-img">

                              <img src="{{ asset('web/img/carousel-1.jpg') }}" alt="Image">
                        </div>
                        <div class="carousel-text">
                              <h1>SOMOS N°1 EN <span>BURGERS</span></h1>
                              <p>
                                    Mirá nuestro menú y dejate sorprender..
                              </p>
                              <div class="carousel-btn">
                                    <a class="btn custom-btn" href="/takeaway">Realizá tu pedido</a>
                              </div>
                        </div>
                  </div>
                  <div class="carousel-item">
                        <div class="carousel-img">
                              <img src="{{ asset('web/img/carousel-2.jpg') }}" alt="Image">
                        </div>
                        <div class="carousel-text">
                              <h1>SOMOS N°1 EN <span>BURGERS</span></h1>
                              <p>
                                    Mirá nuestro menú y dejate sorprender..
                              </p>
                              <div class="carousel-btn">
                                    <a class="btn custom-btn" href="/takeaway">Realizá tu pedido</a>
                              </div>
                        </div>
                  </div>
                  <div class="carousel-item">
                        <div class="carousel-img">
                              <img src="{{ asset('web/img/carousel-3.jpg') }}" alt="Image">
                        </div>
                        <div class="carousel-text">
                              <h1>SOMOS N°1 EN <span>BURGERS</span></h1>
                              <p>
                                    Mirá nuestro menú y dejate sorprender..
                              </p>
                              <div class="carousel-btn">
                                    <a class="btn custom-btn" href="/takeaway">Realizá tu pedido</a>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<!-- Carousel End -->

<section id="sucursal-home">
      <div class="sucursal">
            <div class="container">
                  <div class="section-maps text-center">
                        <p>¿Dónde encontrarnos?</p>
                        <h2>Mirá nuestras sucursales </h2>
                  </div>

                  @foreach(@$array_sucursales as $sucursal)
                  <div class="col-12 pb-5">
                        <div class="row">
                              <div class="col-lg-5 col-md-8">
                                    <div class="section-maps">
                                          <h4>{{$sucursal->nombre}}</h4>
                                          
                                          <p>{{$sucursal->domicilio}} <br>
                                                Lunes a Domingos 12:00 a 00:00 <br> Teléfono: 
                                                <a href="#" style="color: green;"><strong>{{$sucursal->telefono}}</strong></a>
                                          </p>
                                          
                                    </div>
                                    
                              </div>
                              <iframe src="{{$sucursal->link_mapa}}" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                  </div>
                  @endforeach
            </div>
      </div>
</section>
@endsection