<?php

$arr = ["apple", "banana", "cherry"];
$searchElement = "banana";

$key = array_search($searchElement, $arr);

if ($key !== false) {
    echo "Элемент найден, индекс: " . $key . "\n";
} else {
    echo "Элемент не найден\n";
}

?>
