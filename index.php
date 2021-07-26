<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <form action="calcular.php" method="POST">
        valor 1:
        <input type="text" name="valor1" size="5" />
        <select name='tipo'>
        <option selected="selected">Somar</option>
        <option>Subtrair</option>
        <option>Multiplicar</option>
        <option>Dividir</option>
        </select>

        valor 2:
        <input type="text" name="valor2" size="5">

        <input type="submit" name="calcularbtn" value="Calcular"/>
    </form>

</body>
</html>