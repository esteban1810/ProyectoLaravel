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
        @if(isset($categoria)) 
            <form action="{{url('/categoria/'.$categoria->id)}}" method="post" enctype="multipart/form-data">
            {{method_field('PATCH')}}
        @else
            <form action="{{url('/categoria')}}" method="post" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{isset($categoria)?$producto->nombre:old('nombre')}}"><br>
            </div>
            <input type="submit" class="btn btn-primary" value="Aceptar">
        </form>
    </div>
</div>
@endsection