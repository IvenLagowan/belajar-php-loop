<?php
echo "<table border='1'><br />";

for ($row = 0; $row < 9; $row ++) {
echo "<tr>";

for ($col = 0; $col < 9; $col ++) {
echo "<td>", (($col + $row) % 9) + 1, "</td>";
}

echo "</tr>";
}

echo "</table>";
?>