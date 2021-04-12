<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Crear</title>
</head>
<body>
    <h1>Lista Ejercicios</h1>

    <form action="/ejercicio/mostrarlista" method="post">
        <div>
            <label for="">Lista</label>
            <br>
            Mesa <input type="checkbox" name="listas[]" value="mesa">
            Armario <input type="checkbox" name="listas[]" value="armario">
            Tocador <input type="checkbox" name="listas[]" value="tocador">
            Silla <input type="checkbox" name="listas[]" value="silla">
            Estanteria <input type="checkbox" name="listas[]" value="estanteria">
        </div>

        <input type="submit" value="crear">
    </form>
</body>
</html>