<?php
// Задание 1
function task1(array $arr, $str = false)
{
    if (!$str) {
        foreach ($arr as $value) {
            echo '<p>' . $value . '</p>';
        }
    } else {
        $result = implode($arr);
        return "$result <br>";
    }
}

// Задание 2
function task2(string $operation, ...$numbers)
{
    $result = $numbers[0];
    $print = implode($operation, $numbers);
    for ($i = 1; $i < sizeof($numbers); $i++) {
        if ($operation == '+') {
            $result += $numbers[$i];
        } elseif ($operation == '-') {
            $result -= $numbers[$i];
        } elseif ($operation == '*') {
            $result *= $numbers[$i];
        } elseif ($operation == '/') {
            $result /= $numbers[$i];
        }
    }
    echo "$print = $result<br>";
}

//Задание 3
function task3(int $num1, int $num2)
{
    $numbers = func_get_args();
    if (count($numbers) > 2 || count($numbers) < 2) {
        echo 'Количество параметров задано неверно<br>';
        return;
    }
    echo "<table>";
    for ($rows = 1; $rows <= $num1; $rows++) {
        echo "<tr>";
        for ($cols = 1; $cols <= $num2; $cols++) {
            $result = $rows * $cols;
            if (($rows == 1) || ($cols == 1)) {
                echo "<th>" . $result . "</th>";
            } else {
                echo "<td>" . $result . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>" . '<br>';
}

// Задание 4
function task4($time)
{
    echo date('d.m.Y H:i', $time) . '<br>';
}

function task4_1($date)
{
    echo strtotime($date) . '<br>';
}

// Задание 5
function task5($text)
{
    echo str_replace('К', "", $text) . '<br>';
}

function task5_1($phrase)
{
    echo str_replace('Две', "Три", $phrase) . '<br>';
}

// Задание 6
function task6($text)
{
    file_put_contents('text.txt', $text);
    echo file_get_contents('text.txt') . '<br>';
}

function task6_1($nameFile)
{
    echo file_get_contents($nameFile) . '<br>';
}
