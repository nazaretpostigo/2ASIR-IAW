<?

$nums = array();
for ($i = 0; $i < 15; $i++) {
  $nums[] = rand(1, 50);
}

echo "Array original: ";
print_r($nums);

$lastElement = array_pop($nums);
array_unshift($nums, $lastElement);

echo "Array rotado: ";
print_r($nums);
?>