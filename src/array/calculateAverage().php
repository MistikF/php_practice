<?php

function calculateAverage($temperatures) {
    if (empty($temperatures)) {
        return 0;
    }
    $sum = array_sum($temperatures);
    return $sum / count($temperatures);
}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];
echo calculateAverage($temperatures); // 38.5
