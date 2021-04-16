<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PRODUCTO</title>
</head>
<body>
    

    <h1>FORM PRODUCTO</h1>
    @if($producto->precio) 
        <form action="{{url('/producto/'.$producto->id)}}" method="post" enctype="multipart/form-data">
        {{method_field('PATCH')}}
    @else
        <form action="{{url('/producto')}}" method="post" enctype="multipart/form-data">
    @endif
        @csrf

    @if($producto->imagen)
        <img src="{{asset('storage').'/'.$producto->imagen}}" height="250">
    @endif
        <div class="campo">
            <label for="imagen">Imagen: </label>
            <input type="file" name="imagen" id="imagen" value="{{$producto->imagen}}"></input><br>
        </div>
        <div class="campo">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="{{$producto->nombre}}"><br>
        </div>
        <div class="campo">
            <label for="descripcion">Descripción: </label><br>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10">{{$producto->descripcion}}</textarea>
        </div>
        <div class="campo">
            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio" value="{{$producto->precio}}"><br>
        </div>
        <input type="submit" value="Enviar">
    </form>
    <a href="{{url('producto')}}">Index</a>
</body>
</html>