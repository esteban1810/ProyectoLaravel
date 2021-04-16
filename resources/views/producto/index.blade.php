@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{url('producto/create')}}" class="btn btn-success">Agregar Nuevo Producto</a>
    <br>
    <br>
    <div class="card">        
        <div class="card-body">
            @if(Session::has('mensaje'))
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">{{Session::get('mensaje')}}</li>
            </ul>
            @endif
            <h1 class="card-title">INDEX PRODUCTO</h1>
            
            <table  class="table">
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>
                            @if($producto->imagen)
                            <img src="{{asset('storage').'/'.$producto->imagen}}" height="150">
                            @endif
                        </td>
                        <td>{{$producto->nombre}}</td>
                        <td>${{$producto->precio}}</td>
                        <td>
                            <a href="{{url('producto/'.$producto->id)}}" class="btn btn-info">Mostrar</a>
                            <!-- <br>
                            <br> -->
                            <form action="{{url('producto/'.$producto->id)}}" class="d-inline" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
