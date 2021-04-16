@extends('layouts.app')
@section('content')
<div class="container card">        
    <div class="card-body">
        @if(count($errors)>0)
            <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{$error}}</li>
            @endforeach
            </ul>
            <br>
        @endif
        <h1>FORM PRODUCTO</h1>
        @if(isset($producto)) 
            <form action="{{url('/producto/'.$producto->id)}}" method="post" enctype="multipart/form-data">
            {{method_field('PATCH')}}
        @else
            <form action="{{url('/producto')}}" method="post" enctype="multipart/form-data">
        @endif
            @csrf
    
        @if(isset($producto))
            <img src="{{asset('storage').'/'.$producto->imagen}}" height="250">
        @endif
            <div class="mb-3 form-group">
                <label for="imagen" class="form-label">Imagen: </label>
                <input type="file" class="form-control" name="imagen" id="imagen" value="{{isset($producto)?$producto->imagen:old('imagen')}}"></input><br>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{isset($producto)?$producto->nombre:old('nombre')}}"><br>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción: </label><br>
                <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10">{{isset($producto)?$producto->descripcion:old('descripcion')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio: </label>
                <input type="number" class="form-control" name="precio" id="precio" value="{{isset($producto)?$producto->precio:old('precio')}}"><br>
            </div>
            <input type="submit" class="btn btn-primary" value="Aceptar">
        </form>
        <br>
        <a href="{{url('producto')}}" class="btn btn-secondary">Index</a>
    </div>
</div>
@endsection