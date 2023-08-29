@extends('layouts.app')

@section('title', 'Editar producto')


@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center" style="z-index: 999">
                <img src="{{ asset('image/body/editar.png') }}" class="img-fluid" width="500" alt="">
            </div>
        </div>
    </div>

    <div class="position-absolute top-0 end-0">
        <img src="{{ asset('image/body/lampara.png') }}" class="img-fluid" width="500">
    </div>
    <div class="position-absolute top-0 star-0">
        <img src="{{ asset('image/body/lampara.png') }}" class="img-fluid" width="700">
    </div>


    <div class="mx-auto" style="max-width: 600px;">
        @includeif('partials.errors')
        <div class="card bg-transparent text-white border-warning" style="box-shadow: 0 0 18px rgba(255, 193, 7, 1);">
            <div class="card-body">
                <form method="POST" action="{{ route('products.update', $product->id) }}" role="form"
                    enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf
                    @include('product.form')
                </form>
            </div>
        </div>
    </div>
@endsection
