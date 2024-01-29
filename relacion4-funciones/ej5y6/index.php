<?
include 'funciones.php';

echo "Numeros primos entre 1 y 99999:\n";

$tamanoArray = 10;
$arrayAleatorio = generaArrayInt($tamanoArray);

echo "Array: " . implode(", " , $arrayAleatorio) . "\n";

echo "Número máximo del Array: " . maximoArrayInt($arrayAleatorio) . "\n";
echo "Número mínimo del Array: " . minimoArrayInt($arrayAleatorio) . "\n";