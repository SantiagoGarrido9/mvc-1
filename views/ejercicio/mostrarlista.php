<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Ver</title>
</head>
<body>
    <h1>Mostrar lista Ejercicio</h1>
    <ul>
        <?php foreach($listas as $lista) { ?>
            <li>
                <?= $lista ?>
            </li>
        <?php } ?>
    </ul>
    <hr>
    <pre>
        <?php
        print_r($_POST);
        ?>
    </pre>
</body>
</html>