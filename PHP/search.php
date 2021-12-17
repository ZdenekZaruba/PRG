<?php

$haystack = [1, 5, 8, 9, 12, 21, 30, 35, 36, 37, 40, 50, 70, 81, 94, 99];
$needle = 30;
$isIn = false;

$left = 0;
$right = count($haystack) - 1;
$middle = floor(($left + $right) / 2);

while ($left <= $right) {
    
    if ($needle == $haystack[$middle]) {
        $isIn = true;
        break;
    } else if ($needle > $haystack[$middle]) {
        $left = $middle + 1;
    } else {
        $right = $middle - 1;
    }
    $middle = floor(($left + $right) / 2);
}

echo("Needle is " . ($isIn ? $middle : "not ") . " in haystack.");