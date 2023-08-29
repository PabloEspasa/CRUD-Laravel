@extends('layouts.app')
@section('title', 'Ver producto')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center" style="z-index: 999">
                <img src="{{ asset('image/body/ver producto.png') }}" class="img-fluid" width="500" alt="">
            </div>
        </div>
    </div>
    <div class="position-absolute top-0 end-0">
        <img src="{{ asset('image/body/lampara.png') }}" class="img-fluid" width="500">
    </div>
    <div class="position-absolute top-0 star-0">
        <img src="{{ asset('image/body/lampara.png') }}" class="img-fluid" width="700">
    </div>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card bg-transparent text-white border-warning"
                    style="box-shadow: 0 0 18px rgba(255, 193, 7, 1);">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 mx-auto pt-5">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $product->nombre }}
                                </div>
                                <div class="form-group">
                                    <strong>Precio:</strong>
                                    {{ $product->precio }}
                                </div>
                                <div class="form-group">
                                    <strong>Descripción:</strong>
                                    {{ $product->descripcion }}
                                </div>
                            </div>
                            <div class="col-md-6 mx-auto text-center">
                                <img src="{{ asset('/storage/productos/' . $product->imagen) }}" alt="Imagen del producto"
                                    width="200" class="rounded-5">
                            </div>

                        </div>

                    </div>
                    <div class="card-footer bg-transparent border-warning">
                        <div class="float-right border-warning">
                            <a class="btn btn-warning" href="{{ route('products.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
