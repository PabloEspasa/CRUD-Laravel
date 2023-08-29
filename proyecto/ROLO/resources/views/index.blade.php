@extends('layouts.app')
@section('title', 'Rolo burgers')
@section('content')

    <div id="successMessage" class="alert alert-success position-absolute top-2 end-0 text-end m-3" style="display: none;">
    </div>

    <a href="#top" class="volver">
        <i class="fas fa-arrow-up"></i>
    </a>

    <div class="hero position-absolute ">
        <img src="{{ asset('image/body/heroBurger.png') }}" class="img-fluid mt-0" alt="">
    </div>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="container">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/promos/promo1.png') }}" class="d-block w-100 rounded-4" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/promos/promo2.png') }}" class="d-block w-100 rounded-4" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/promos/promo3.png') }}" class="d-block w-100 rounded-4" alt="...">
                </div>


            </div>
            <div class="container">
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon text-center bg-warning rounded-circle"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon text-center bg-warning rounded-circle"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
    <div class="container nuestros-productos">
        <div class="text-center" id="productos">
            <img src="{{ asset('image/body/productos.png') }}" class="img-fluid" width="400" alt="">
        </div>

        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <p class="text-white text-center fs-5 fs-sm-2 fs-lg-5">
                    " Descubre por qué somos la elección perfecta para los amantes de las hamburguesas. En nuestro negocio,
                    nos enorgullece ofrecer hamburguesas excepcionales elaboradas con ingredientes frescos y de alta
                    calidad.
                    Nuestro equipo de chefs expertos ha seleccionado cuidadosamente los mejores ingredientes para crear una
                    experiencia gastronómica única y deliciosa. Ven y prueba nuestras hamburguesas gourmet, que van desde
                    las
                    clásicas hasta opciones más creativas y sabrosas. ¡Seguro que encontrarás tu favorita! Además, nuestros
                    productos seleccionados garantizan que cada hamburguesa que servimos cumpla con los más altos estándares
                    de sabor y calidad "
                </p>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('image/body/productosSeleccionados.jpg') }}" class="w-75 rounded-5  opacity-75">
            </div>
        </div>


    </div>



    <div class="container" id="hamburguesas">
        <div class="text-center">
            <img src="{{ asset('image/body/hamburguesas.png') }}" class="img-fluid" width="400" alt="">
        </div>
        <div class="row justify-content-center">
            @php
                $products = \App\Models\Product::orderBy('id', 'desc')->get();
            @endphp
            @foreach ($products as $product)
                @if ($product->categoria->nombre == 'Hamburguesa')
                    <div class="col-6 col-md-4">
                        <div class="card mb-4 bg-black burger">
                            <div class="text-center">
                                <img class="card-img-top w-75 rounded-5 p-3"
                                    src="{{ asset('/storage/productos/' . $product->imagen) }}" alt="Hamburger">
                            </div>

                            <div class="card-body text-center text-white hover shadow">
                                <h4 class="card-title fs-sm-1 fs-lg-6">{{ $product->nombre }}</h4>
                                <h5 class="card-title fs-sm-1 fs-lg-10">${{ $product->precio }}</h5>
                                <p class="card-text fs-sm-1 fs-lg-3">{{ $product->descripcion }}</p>
                                <button class="btn btn-warning add-to-cart" data-product-id="{{ $product->id }}"
                                    onclick="agregarAlCarrito()">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container" id="bebidas">
        <div class="text-center">
            <img src="{{ asset('image/body/bebidas.png') }}" class="img-fluid" width="400" alt="">
        </div>
        <div class="row justify-content-center">
            @php
                $products = \App\Models\Product::orderBy('id', 'desc')->get();
            @endphp
            @foreach ($products as $product)
                @if ($product->categoria->nombre == 'Bebida')
                    <div class="col-6 col-md-4">
                        <div class="card mb-4 bg-black burger">
                            <div class="text-center">
                                <img class="card-img-top w-75 rounded-5 p-3"
                                    src="{{ asset('/storage/productos/' . $product->imagen) }}" alt="Hamburger">
                            </div>
                            <div class="card-body text-center text-white hover shadow">
                                <h4 class="card-title fs-sm-1 fs-lg-6">{{ $product->nombre }}</h4>
                                <h5 class="card-title fs-sm-1 fs-lg-10">${{ $product->precio }}</h5>
                                <p class="card-text fs-sm-1 fs-lg-3">{{ $product->descripcion }}</p>
                                <button class="btn btn-warning add-to-cart" data-product-id="{{ $product->id }}"
                                    onclick="agregarAlCarrito()">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container" id="aderezos">
        <div class="text-center">
            <img src="{{ asset('image/body/aderezos.png') }}" class="img-fluid" width="400" alt="">
        </div>
        <div class="row justify-content-center">
            @php
                $products = \App\Models\Product::orderBy('id', 'desc')->get();
            @endphp
            @foreach ($products as $product)
                @if ($product->categoria->nombre == 'Aderezo')
                    <div class="col-6 col-md-4">
                        <div class="card mb-4 bg-black burger">
                            <div class="text-center">
                                <img class="card-img-top w-75 rounded-5 p-3"
                                    src="{{ asset('/storage/productos/' . $product->imagen) }}" alt="Hamburger">
                            </div>
                            <div class="card-body text-center text-white hover shadow">
                                <h4 class="card-title fs-sm-1 fs-lg-6">{{ $product->nombre }}</h4>
                                <h5 class="card-title fs-sm-1 fs-lg-10">${{ $product->precio }}</h5>
                                <p class="card-text fs-sm-1 fs-lg-3">{{ $product->descripcion }}</p>
                                <button class="btn btn-warning add-to-cart" data-product-id="{{ $product->id }}"
                                    onclick="agregarAlCarrito()">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container" id="guarnicion">
        <div class="text-center">
            <img src="{{ asset('image/body/guarnicion.png') }}" class="img-fluid" width="400" alt="">
        </div>
        <div class="row justify-content-center">
            @php
                $products = \App\Models\Product::orderBy('id', 'desc')->get();
            @endphp
            @foreach ($products as $product)
                @if ($product->categoria->nombre == 'Guarnicion')
                    <div class="col-6 col-md-4">
                        <div class="card mb-4 bg-black burger">
                            <div class="text-center">
                                <img class="card-img-top w-75 rounded-5 p-3"
                                    src="{{ asset('/storage/productos/' . $product->imagen) }}" alt="Hamburger">
                            </div>
                            <div class="card-body text-center text-white hover shadow">
                                <h4 class="card-title fs-sm-1 fs-lg-6">{{ $product->nombre }}</h4>
                                <h5 class="card-title fs-sm-1 fs-lg-10">${{ $product->precio }}</h5>
                                <p class="card-text fs-sm-1 fs-lg-3">{{ $product->descripcion }}</p>
                                <button class="btn btn-warning add-to-cart" data-product-id="{{ $product->id }}"
                                    onclick="agregarAlCarrito()">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection
