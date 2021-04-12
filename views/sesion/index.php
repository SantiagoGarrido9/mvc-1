<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion Ver</title>
</head>
<body>
    <h1>Mostrar Sesion</h1>
    <ul>
        <?php  echo $usuario ;
        ?>
    </ul>
    <hr>
    <pre>
        <?php
        print_r($_SESSION);
        ?>
    </pre>
</body>
</html>