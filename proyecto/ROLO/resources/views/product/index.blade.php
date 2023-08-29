@extends('layouts.app')

@section('title', 'Producto')


@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <img src="{{ asset('image/body/inventario.png') }}" class="img-fluid" width="500" alt="" style="z-index: 999">
    </div>
    <div class="position-absolute top-0 end-0">
        <img src="{{ asset('image/body/lampara.png') }}" class="img-fluid" width="500">
    </div>
    <div class="position-absolute top-0 star-0">
        <img src="{{ asset('image/body/lampara.png') }}" class="img-fluid" width="700">
    </div>

    <div class="container text-center p-5">
        <div class="row justify-content-md-center">
            <div class="col-8" style="z-index: 999">
                <a href="{{ route('products.create') }}" class="btn btn-warning btn-sm"><i
                        class="fa-solid fa-square-plus fa-xl" style="color: #ffffff;"></i>
                    {{ __('Agregar Producto') }}
                </a>
            </div>
            @if (Session::has('swal_success'))
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '{{ Session::get('swal_success') }}',
                        showConfirmButton: false,
                        timer: 2000
                    });
                </script>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center p-2">
            <div class="col-md-11 rounded" style="z-index: 999">
                <table class="table1">
                    <thead class="thead">
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                            <th>Categoria</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->nombre }}</td>
                                <td>${{ $product->precio }}</td>
                                <td>{{ $product->descripcion }}</td>
                                <td class="text-center">{{ $product->categoria->nombre }}</td>
                                <td>
                                    <form id="delete-form-{{ $product->id }}"
                                        action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary m-1"
                                            href="{{ route('products.show', $product->id) }}"><i
                                                class="fa fa-fw fa-eye"></i></a>
                                        <a class="btn btn-sm btn-success m-1"
                                            href="{{ route('products.edit', $product->id) }}"><i
                                                class="fa fa-fw fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm m-1"
                                            onclick="confirmDelete({{ $product->id }})"><i
                                                class="fa fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="paginado">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
