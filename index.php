<?php

$a = intval($argv[1]);
$b = intval($argv[2]);
$c = intval($argv[3]);

$discriminant = $b*$b - 4 * $a * $c;

if ($discriminant > 0) {
    $x1 = -$b + sqrt($discriminant) / (2 * $a);
    $x2 = -$b - sqrt($discriminant) / (2 * $a);

    echo "x1 = " . $x1 . " x2 = " . $x2;
} elseif ($discriminant == 0) {
    $x = -$b / (2 * $a);
    echo "x = " . $x;
} else {
    echo "Уравнение не имеет значение";
}