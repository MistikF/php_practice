<?php

require_once 'Point.php';

function getMidpoint($point1, $point2): Point
{
    $midpoint = new Point();
    $midpoint->x = ($point1->x + $point2->x) / 2;
    $midpoint->y = ($point1->y + $point2->y) / 2;
    return $midpoint;
}

$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;

$midpoint = getMidpoint($point1, $point2);
echo $midpoint->x; // 5.5
echo $midpoint->y; // 5.5
