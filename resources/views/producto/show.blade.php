<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Producto</title>
</head>
<body>
    <h1>{{$producto->nombre}}</h1>
    <div>
        <p>{{$producto->imagen}}</p>
        <p>{{$producto->descripcion}}</p>
        <p>{{$producto->precio}}</p>
    </div>
    <div>
        <a href="{{url('producto/'.$producto->id.'/edit')}}">Editar</a>
        <form action="{{url('producto/'.$producto->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" value="Eliminar">
        </form>
    </div>
</body>
</html>