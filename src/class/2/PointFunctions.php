<?php

namespace App\PointFunctions;

use App\Point;

function dup(Point $point)
{
    $newPoint = new Point();
    $newPoint->x = $point->x;
    $newPoint->y = $point->y;

    return $newPoint;
}
