<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    $cantidadDigitos = strlen($numero);

    echo "<p>El número $numero tiene $cantidadDigitos dígito(s).</p>";
}
?>


<?php
echo"Ingresa un numero: ";
$numero = abs(intval(readline()));

$numeroComoCadena = strval($numero);
$cantidadDigitos = strlen($numeroComoCadena);

echo "El numero $numero tiene $cantidadDigitos digitos.";
?>

