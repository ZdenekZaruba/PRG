<?php
define("SIRKA", 3);
define("VYSKA", 3);
$pole = init();
generujMiny($pole, 8);
ukaz($pole);

function generujMiny($p, $count){
    for($i = 1; $i <= $count; $i++){
        do {
            $x = rand(0, SIRKA - 1);
            $y = rand(0, VYSKA - 1);
        } while ($p[$x][$y] !== 0);
        $p[$x][$y] = "M";
    }
    return $p;
}

function ukaz(array $p): void {
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