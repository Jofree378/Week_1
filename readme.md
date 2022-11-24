# Выполнение домашнего задание №0

Для его выполнения понадобилось исправить написание некоторых слов и убрать ненужные пробелы, а также создать дополнительный файл с объявлением функции

### Основной файл PSR-2.php:
```
<?php
const TESTCONSTANTA = "asd";
$user_name = "Igor";

include "function.php";

if (1==1) {
    echo 'hi';
}
```

### Файл с функцией function.php:
```
<?php
function show_something()
{
    return 'SOMETHING';
}

```


# Выполнение домашнего задания №1

Все задания выолнены и пронумерованы task1, task2, task3 ... соответсвенно.

### task1
```
<?php
# Объявление переменных
$name = "Дмитрий";
$age = "19";

echo "Меня зовут: $name<br>";
echo "Мне $age лет<br>";
echo '"!|/\'"\\<br>';
```

### task2 (Подробные пояснения в самом файле)
```
const PICTURES = 80;
const FELT_PEN = 23;
const PENCIL = 40;

$paint = 0;

$paint = PICTURES - FELT_PEN - PENCIL;

# Вывод ответа:
echo "Количество рисунков выполненных красками равно: $paint";
```

### task3
```
<?php
$age = 78;

if (($age>=18) and ($age <=65)) {
    echo "Вам еще работать и работать";
} elseif ($age>65) {
    echo "Вам пора на пенсию";
} elseif (($age>=1) and ($age<=17)) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}
```

### task4
```
<?php
$day = 4;

switch ($day) {
    case (1):
    case (2):
    case (3):
    case (4):
    case (5):
        echo "Это рабочий день<br>";
        break;
    case (6):
    case (7):
        echo "Это выходной день<br>";
        break;
    default:
        echo "Неизвестный день<br>";
}
```

### task5
```
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
$CAR = [ 'bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

# Проходим по многомерному массиву последовательно
foreach ($CAR as $mark => $value) {
    echo "CAR $mark<br>";
    echo $mark;
    foreach ($value as $cell => $parameter) {
        echo " $parameter ";
    }
    echo "<br>";
}
```

### task6
```
<?php
echo "<table>";
for ($cols = 1; $cols <= 10; $cols++) {
    echo "<tr>";
    for ($rows = 1; $rows <= 10; $rows++) {
        if (($rows == 1) || ($cols == 1)) {
            if (($rows % 2 == 0) && ($cols % 2 == 0)) {
                echo "<th>" . "(" . $rows * $cols . ")" . "</th>";
            } elseif (($rows % 2 != 0) && ($cols % 2 != 0)) {
                echo "<th>" . "[" . $rows * $cols . "]" . "</th>";
            } else {
                echo "<th>" . $rows * $cols . "</th>";
            }
        } else {
            if (($rows % 2 == 0) && ($cols % 2 == 0)) {
                echo "<td> " . "(" . $rows * $cols . ")" . "</td>";
            } elseif (($rows % 2 != 0) && ($cols % 2 != 0)) {
                echo "<td>" . "[" . $rows * $cols . "]" . "</td>";
            } else {
                echo "<td>" .$rows * $cols . "</td>";
            }
        }
    }
    echo "</tr>";
}
echo "</table>";
```