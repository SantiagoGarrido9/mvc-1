<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion</title>
</head>
<body>
    <h1>Operacion</h1>

    <form action="/calculadora/calcular" method="post">
        <label>Operador 1</label>
        <input type="text" name="op1">
        <br>

        Operación: 
        <select name="operador" id="">
            <option value="">Elija uno</option>
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multi">*</option>
            <option value="division">/</option>
        </select>
        <br>
        
        <label>Operador 2</label>
        <input type="text" name="op2">

        <input type="submit" value="crear">
    </form>
</body>
</html>