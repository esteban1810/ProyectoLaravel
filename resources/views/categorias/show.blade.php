@extends('layouts.app')
@section('content')
<div class="container card">        
    <div class="card-body d-flex justify-content-center">
        <div>
            <h1>{{$producto->nombre}}</h1>
            <a href="{{url('producto/'.$producto->id.'/edit')}}" class="btn btn-warning">Editar</a>
            <form action="{{url('producto/'.$producto->id)}}" class="d-inline" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-danger" value="Eliminar">
            </form>
        </div>
    </div>
</div>
@endsection