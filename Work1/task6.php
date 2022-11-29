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
