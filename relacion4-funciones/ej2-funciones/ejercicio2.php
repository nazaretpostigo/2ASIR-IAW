<?
include 'funciones.php';

echo "Numeros primos entre 1 y 1000:\n";

for ($i = 1; $i <= 1000; $i++){
    if (esPrimo($i)){
        echo $i . " ";
    }
}

