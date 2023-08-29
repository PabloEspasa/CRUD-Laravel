@extends('layouts.app')
@section('title', 'Rolo burgers')
@section('content')
    <div class="text-center" id="productos">
        <img src="{{ asset('image/body/contactos.png') }}" class="img-fluid" width="400" alt="">
    </div>
    <div class="container mt-5 text-white">
        <div class="row">
            <div class="col-md-6">
                <h2>Contactos</h2>
                <p>¡Conéctate con nosotros en nuestras redes sociales!</p>
                <a href="https://www.instagram.com/roloburgers/" target="_blank" class="btn btn-warning"><i
                        class="fab fa-instagram">/roloburgers</i></a>
            </div>
            <div class="col-md-6">
                <h2>Envíanos tus Sugerencias</h2>
                <form action="{{ route('procesar_formulario') }}" method="post">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="sugerencias" class="form-label">Sugerencias</label>
                        <textarea class="form-control" id="sugerencias" name="sugerencias" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Enviar Sugerencias</button>
                </form>
            </div>
        </div>
    </div>
@endsection
