@extends('web.plantilla')
@section('contenido')


    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Realizá tu pedido</h2>
                </div>
                <div class="col-12">
                    <a href="/">Inicio</a>
                    <a href="/takeaway">Takeaway</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->




    <!-- Menu Start -->
    <div class="menu">
        <div class="container">
            <div class="menu-tab">

                <div class="tab-content">
                    <div id="burgers" class="container tab-pane active">
                        <div class="row">
                        @foreach($array_productos as $producto)
                            <div class="col-lg-12 col-md-12 ">
                                
                                <div class="menu-item ">
                                    <div class="menu-img">
                                        <img src="{{ $producto->imagen }}" alt="Image">
                                    </div>
                                    <div class="menu-text product-qty">
                                        <h3><span>{{$producto->nombre}}</span> <strong>{{$producto->precio}} <input class="qty" type="number" min="1" max="20" value="1"> <a class="btn custom-btn" href="#">Agregar</a></strong></h3>
                                        
                                        <p>{{$producto->descripcion}}</p>
                                    </div>
                                    <div></div>
                                </div>
                               
                                
                            </div>
                            @endforeach    
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!-- Menu End -->
@endsection