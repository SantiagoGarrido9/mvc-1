<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>

    <form action="/usuario/mostrar" method="post">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <br>

        <label>Apellido</label>
        <input type="text" name="apellido">
        <br>

        Sexo: 
        <select name="sexo" id="">
            <option value="">Elija uno</option>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>

        <div>
            <label for="">Aficiones</label>
            <br>
            Futbol <input type="checkbox" name="aficiones[]" value="futbol">
            Música <input type="checkbox" name="aficiones[]" value="musica">
            Montaña <input type="checkbox" name="aficiones[]" value="montaña">
        </div>

        <input type="submit" value="crear">
    </form>
</body>
</html>