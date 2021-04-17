@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{url('user/create')}}" class="btn btn-success">Agregar Nuevo Producto</a>
    <br>
    <br>
    <div class="card">        
        <div class="card-body">
            @if(Session::has('mensaje'))
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">{{Session::get('mensaje')}}</li>
            </ul>
            @endif
            <h1 class="card-title">INDEX USER</h1>
            
            <table  class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{url('user/'.$user->id)}}" class="btn btn-info">Mostrar</a>
                            <!-- <br>
                            <br> -->
                            <form action="{{url('user/'.$user->id)}}" class="d-inline" method="post">
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
    {!! $users->links() !!}
</div>
@endsection
