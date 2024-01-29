<!-- EJERCICIO 4 
    Escribe un programa que sume, reste, multiplique y divida dos números introducidos por un
    formulario. -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

    <form action="prueba.php" method="get">
        <input type="number" name="num1">
        <select name="ecuacion" id="ecuacion">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2">
        <input type="submit" value="resultado">
    </form>

</body>

</html>

<?