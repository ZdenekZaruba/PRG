<?php
define("SIRKA", 20);
define("VYSKA", 5);
$pole = init();
show($pole);

function show(array $p): void {
    for($y = 0 ; $y < VYSKA; $y++){
        for($x = 0 ; $x < SIRKA; $x++){
        echo $p[$x][$y];
        }
        echo "<br>";
    }   
}

function init(): array {
    for($y = 0 ; $y < VYSKA; $y++){
        for($x = 0 ; $x < SIRKA; $x++){
        $p[$x][$y] = 0;
        }
    }
    return $p;
}