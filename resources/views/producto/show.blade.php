@extends('layouts.app')
@section('content')
<div class="container card">        
    <div class="card-body">
        <h1>{{$producto->nombre}}</h1>
        <div>
        @if($producto->imagen)
            <img src="{{asset('storage').'/'.$producto->imagen}}" height="150">
        @endif
            <br>
            <br>
            <p>Descripcion: {{$producto->descripcion}}</p>
            <p>Precio: ${{$producto->precio}}</p>
        </div>
        <div>
            <form action="{{url('producto/'.$producto->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-danger" value="Eliminar">
            </form>
        </div>
        <br>
        <a href="{{url('producto/'.$producto->id.'/edit')}}" class="btn btn-warning">Editar</a>
        <a href="{{url('producto/create')}}" class="btn btn-primary">Agregar</a>
        <a href="{{url('producto')}}" class="btn btn-secondary">Index</a>
    </div>
</div>
@endsection