<?php 

$num = readline("Introduce un numero para multiplicarlo: ");

echo "Tabla de multiplicar del $num:\n";

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " .($num * $i). "\n" ;
}
?>