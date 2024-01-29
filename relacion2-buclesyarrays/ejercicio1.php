<?php

echo "FOR: ";
for ($i = 0; $i <= 100; $i += 5) {
    echo $i . " ";
}
?>


<?php
echo "WHILE: ";
$j = 0;
while ($j <= 100) {
    echo $j . " ";
    $j += 5;
}
?>


<?php
echo "DO: ";
$k = 0;
do {
    echo $k . " ";
    $k += 5;
} while ($k <= 100);


?>