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
                            <div class="col-lg-10 col-md-12 ">
                                <div class="menu-item ">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger-1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text product-qty">
                                        <h3><span>Palermo</span> <strong>$1450.00 <input class="qty" type="number" min="0" max="20" value="0"> <a class="btn custom-btn" href="#">Agregar</a></strong></h3>
                                        
                                        <p>180g de carne con queso emmental, lechuga, huevo, aros de cebolla y barbacoa.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger-2.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Recoleta</span> <strong>$1450.00 <input class="qty" type="number" min="0" max="20" value="0"> <a class="btn custom-btn" href="#">Agregar</a></strong></h3>
                                        <p>180g de carne con queso cheddar y panceta.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger-3.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Almagro</span> <strong>$1700.00 <input class="qty" type="number" min="0" max="20" value="0"> <a class="btn custom-btn" href="#">Agregar</a></strong></h3>
                                        <p>4x120g de carne con cheddar y panceta.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset('web/img/menu-burger-4.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Nuñez</span> <strong>$1450.00 <input class="qty" type="number" min="0" max="20" value="0"> <a class="btn custom-btn" href="#">Agregar</a></strong></h3>
                                        <p>180g de carne con queso emmental, lechuga, huevo, aros de cebolla y barbacoa.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                    <img src="{{ asset('web/img/menu-burger-5.jpg') }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Caballito</span> <strong>$1450.00 <input class="qty" type="number" min="0" max="20" value="0"> <a class="btn custom-btn" href="#">Agregar</a></strong></h3>
                                        <p>2x120g de carne con cheddar, cebolla morada, lechuga, tomate y huevo</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!-- Menu End -->
@endsection