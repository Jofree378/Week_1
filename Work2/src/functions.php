<?php
// Задание 1
function task1(array $arr, $str = false)
{
    $result = "";
    if (!$str) {
        foreach ($arr as $value) {
            echo '<p>' . $value . '</p>';
        }
    } else {
        foreach ($arr as $value) {
            $result .= "$value";
        }
        return "$result <br>";
    }
}

// Задание 2
function task2(string $operation)
{
    $numbers = func_get_args();
    $print = '';
    $result = 0;
    if ($operation == '+') {
        for ($i=1; $i < sizeof($numbers); $i++) {
            $result += $numbers[$i];
            if (($i) != (sizeof($numbers) - 1)) {
                $print .= $numbers[$i] . " " . "$operation ";
            } else {
                $print .= $numbers[$i] . ' = ' . $result;
            }
        }
    } elseif ($operation == '-') {
        $result = $numbers[1];
        $print = $numbers[1];
        for ($i=2; $i < sizeof($numbers); $i++) {
            $result -= $numbers[$i];
            if (($i) != (sizeof($numbers))) {
                $print .= " $operation" . " " . $numbers[$i];
            }
        }
        $print .= ' = ' . $result;
    } elseif ($operation == '*') {
        $result = 1;
        for ($i=1; $i < sizeof($numbers); $i++) {
            $result *= $numbers[$i];
            if (($i) != (sizeof($numbers) - 1)) {
                $print .= $numbers[$i] . " " . "$operation ";
            } else {
                $print .= $numbers[$i] . ' = ' . $result;
            }
        }
    } elseif ($operation == '/') {
        $result = $numbers[1];
        $print = $numbers[1];
        for ($i=2; $i < sizeof($numbers); $i++) {
            $result /= $numbers[$i];
            if (($i) != (sizeof($numbers))) {
                $print .= " $operation" . " " . $numbers[$i];
            }
        }
        $print .= ' = ' . $result;
    }
    echo "$print<br>";
}

//Задание 3
function task3(int $num1, int $num2)
{
    $numbers = func_get_args();
    if (count($numbers) == 2) {
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
    } else {
        echo 'Количество параметорв задано неверно<br>';
    }
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
    $fp = fopen($nameFile, 'r');
    echo fgets($fp) . '<br>';
    fclose($fp);
}
