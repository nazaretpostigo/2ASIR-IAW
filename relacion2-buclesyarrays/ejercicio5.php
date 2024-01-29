<?php

for ($i = 0; $i < 20; $i++) {
    $num[$i] = rand(0, 100);
}

for ($i = 0; $i < 20; $i++) {
    $cuadrado[$i] = $num[$i] ** 2;
}

for ($i = 0; $i < 20; $i++) {
    $cubo[$i] = $num[$i] ** 3;
}

echo "<table><tr><th>Numero</th><th>Cuadrado</th><th>Cubo</th></tr>";
for ($i = 0; $i < 20; $i++) {
    echo "<tr><td>".$num[$i]."</td><td>".$cuadrado[$i]."</td><td>".$cubo[$i]."</td></tr>";
}
echo "</table>";
?>