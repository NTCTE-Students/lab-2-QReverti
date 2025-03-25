<?php

$data = [
    ["Имя", "Возраст", "Город"],
    ["Иван", 30, "Москва"],
    ["Мария", 25, "Санкт-Петербург"],
    ["Петр", 40, "Казань"]
];

echo "<table border='1'>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

