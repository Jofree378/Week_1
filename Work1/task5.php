<?php
# Объявление массивов
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
];
$toyota = [
    "model" => "Camry",
    "speed" => 110,
    "doors" => 5,
    "year" => "2012"
];
$opel = [
    "model" => "Astra",
    "speed" => 80,
    "doors" => 3,
    "year" => "2004"
];

# Объединение массивов
$car = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

# Проходим по многомерному массиву последовательно
foreach ($car as $mark => $value) {
    echo "CAR $mark<br>";
    echo $mark;
    foreach ($value as $cell => $parameter) {
        echo " $parameter ";
    }
    echo "<br>";
}
