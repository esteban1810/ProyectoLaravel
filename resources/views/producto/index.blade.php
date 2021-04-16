<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Producto</title>
</head>
<body>
    <h1>INDEX PRODUCTO</h1>
    <table border="1">
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
                    <img src="{{asset('storage').'/'.$producto->imagen}}" height="250">
                @endif
                </td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>
                    <a href="{{url('producto/'.$producto->id)}}">Mostrar</a>
                    <form action="{{url('producto/'.$producto->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{url('producto/create')}}">Agregar</a>
</body>
</html>