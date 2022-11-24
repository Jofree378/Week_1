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
