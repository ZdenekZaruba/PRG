<?php
$size = 8;

for($y = 0; $y < $size; $y++){
    for($x = 0; $x < $size; $x++){ 
        echo (($x + $y) % 2) ? "O" : "X";
    }
    //echo "\n";
    //echo "<br />";
    echo"<br>";
    //echo "</br>";
    //echo PHP_EOL;
}
