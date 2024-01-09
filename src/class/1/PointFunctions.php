<?php

require_once 'Point.php';

function getMidpoint($point1, $point2): Point
{
    $x = ($point1->x + $point2->x) / 2;
    $y = ($point1->y + $point2->y) / 2;
    return new Point($x, $y);
}

$point1 = new Point(1, 10);
$point2 = new Point(10, 1);

$midpoint = getMidpoint($point1, $point2);
echo $midpoint->x; // 5.5
echo $midpoint->y; // 5.5