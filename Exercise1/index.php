<?php

echo "<table><tbody>";
for ($i = 1; $i <= 100; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 100; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
} 

echo "</tbody></table>";

?>