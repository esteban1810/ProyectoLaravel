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
    <form action="" method="post" enctype="multipart/form-data">
        <div class="campo">
            <label for="imagen">Imagen: </label>
            <input type="file" name="imagen" id="imagen"><br>
        </div>
        <div class="campo">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre"><br>
        </div>
        <div class="campo">
            <label for="descripcion">Descripción: </label><br>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        </div>
        <div class="campo">
            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio"><br>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>