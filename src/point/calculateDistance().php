<?php

function calculateDistance($point1, $point2) {
    $x_diff = $point2[0] - $point1[0];
    $y_diff = $point2[1] - $point1[1];

    return sqrt($x_diff * $x_diff + $y_diff * $y_diff);
}

$point1 = [0, 0];
$point2 = [3, 4];

echo calculateDistance($point1, $point2); // Выводит: 5
