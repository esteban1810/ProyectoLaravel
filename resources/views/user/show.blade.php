@extends('layouts.app')
@section('content')
<div class="container card">        
    <div class="card-body  d-flex justify-content-center">
        <div>
            <h1>{{$user->name}}</h1>
            <div>
                <p><strong>Nombre:</strong> {{$user->name}}</p>
                <p><strong>Correo:</strong> {{$user->email}}</p>
            </div>
            <form action="{{url('user/'.$user->id)}}" class="d-inline" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-danger" value="Eliminar">
            </form>
            <a href="{{url('user/'.$user->id.'/edit')}}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>
@endsection