<div class="">
    {{ Form::label('nombre') }}
    {{ Form::text('nombre', $product->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="">
    {{ Form::label('Seleccione una categoria') }}
    <select class="form-select" aria-label="Default select example" id="id_categoria" name="id_categoria">
        <option value="">Categorias</option>
        @foreach ($categorias as $cat)
            <option @if ($cat->id == $product->id_categoria) selected @endif value="{{ $cat->id }}">{{ $cat->nombre }}
            </option>
        @endforeach
    </select>
    {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="">
    {{ Form::label('precio') }}
    {{ Form::text('precio', $product->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
    {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="">
    {{ Form::label('descripcion') }}
    {{ Form::text('descripcion', $product->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
    {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="">
    {{ Form::label('descripcion') }}
    <input type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" id="imagen"
        name="imagen" placeholder="Descripción">
    {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="flex mt-5">
    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-warning m-1">{{ __('Enviar') }}</button>
        <a href="{{ route('products.index') }}" class="btn btn-warning m-1">{{ __('Atras') }}</a>
    </div>
</div>
