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
@endsection