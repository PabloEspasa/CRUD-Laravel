@extends('layouts.app')
@section('title', 'Mi pedido')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center" style="z-index: 999">
                <img src="{{ asset('image/body/misPedidos.png') }}" class="img-fluid" width="500" alt="">
            </div>
        </div>
    </div>
    <div class="position-absolute top-0 end-0">
        <img src="{{ asset('image/body/mipedidoBurger.png') }}" class="img-fluid">
    </div>

    <div class="container">
        <div class="pedido">
            <div class="row justify-content-center p-2">
                <div class="col-md-8 rounded" style="z-index: 999">
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="cartTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @vite(['resources/js/pedido.js'])

@endsection
