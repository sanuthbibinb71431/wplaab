<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($k = 1; $k < $i; $k++) {
        echo "&nbsp;";
    }

    for ($j = $rows; $j >= $i; $j--) {
        echo "*";
    }

    echo "<br>";
}
?>
