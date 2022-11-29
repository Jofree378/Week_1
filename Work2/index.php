<?php
require('src/functions.php');

$arr = ['t','a','f'];

echo task1($arr, true);
task2('/', 2, 1);
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
