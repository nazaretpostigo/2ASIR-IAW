<?
include 'funciones.php';

echo "Numeros primos entre 1 y 99999:\n";

for ($i = 1; $i <= 99999; $i++){
    if (esCapicua($i)){

        echo $i . " ";
    }
}
