# Выполнение домашнего задание №0

Для его выполнения понадобилось исправить написание некоторых слов и убрать ненужные пробелы, а также создать дополнительный файл с объявлением функции

### Основной файл PSR-2.php:
```
<?php
const TEST_CONSTANTA = "asd";
$userName = "Igor";

include "function.php";

if (1 == 1) {
    echo 'hi';
}
```

### Файл с функцией function.php:
```
<?php
function showSomething()
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
$age = rand(0, 68);

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif (($age >= 1) && ($age <= 17)) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}
```

### task4
```
<?php
$day = rand(0, 8);

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день<br>";
        break;
    case 6:
    case 7:
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
```

### task6
```
<?php
echo "<table border='1'>";
for ($cols = 1; $cols <= 10; $cols++) {
    echo "<tr>";
    for ($rows = 1; $rows <= 10; $rows++) {
        if (($rows % 2 == 0) && ($cols % 2 == 0)) {
            echo "<td>" . "(" . $rows * $cols . ")" . "</td>";
        } elseif (($rows % 2 != 0) && ($cols % 2 != 0)) {
            echo "<td>" . "[" . $rows * $cols . "]" . "</td>";
        } else {
            echo "<td>" . $rows * $cols . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

```


# Выполнение домашнего задания №2

Выполнение задания №2 представлено в двух файлах(`index.php` и `src/functions.php`). В первом вызов всех функций
и необходимые переменные для вызова. Во втором файле объявление всех функций.

### Файл с вызовом:
```
<?php
require('src/functions.php');

$arr = ['t','a','f'];

echo task1($arr, 1);
task2('*', 5, 5);
task3(8, 7);
task4(time());
task4_1('24.02.2016 00:00:00');

$text = 'Карл у Клары украл Кораллы';
task5($text);
$phrase = 'Две бутылки лимонада';
task5_1($phrase);
$textFile = 'Hello again';
task6($textFile);
$nameFile = 'text.txt';
task6_1($nameFile);
```