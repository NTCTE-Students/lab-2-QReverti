<?php

$numbers = [5, 2, 9, 1, 5, 6];

$min = $numbers[0];
$max = $numbers[0];

foreach ($numbers as $number) {
  if ($number < $min) {
    $min = $number;
  }
  if ($number > $max) {
    $max = $number;
  }
}

echo "Минимальное значение: " . $min . "\n";
echo "Максимальное значение: " . $max . "\n";

?>
