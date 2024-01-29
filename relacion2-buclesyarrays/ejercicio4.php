<?php


$n = readline("Introduce una cantidad de numeros para el Fibonacci: ");

$primernumero = 0;
$segundonumero = 1;

echo "Serie de Fibonacci:\n";

for ($i = 1; $i <= $n; $i++) {
    echo "$primernumero";

    $variabletemporal = $primernumero + $segundonumero;
    $primernumero = $segundonumero;
    $segundonumero = $variabletemporal;
}

echo "\n";
?>