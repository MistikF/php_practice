<?php

function makeDecartPoint($x, $y) {
    return ['x' => $x, 'y' => $y];
}

function getX($point) {
    return $point['x'];
}

function getY($point) {
    return $point['y'];
}

function makeSegment($point1, $point2) {
    return ['beginPoint' => $point1, 'endPoint' => $point2];
}

function getBeginPoint($segment) {
    return $segment['beginPoint'];
}

function getEndPoint($segment) {
    return $segment['endPoint'];
}

function getMidpointOfSegment($segment) {
    $x1 = getX(getBeginPoint($segment));
    $y1 = getY(getBeginPoint($segment));
    $x2 = getX(getEndPoint($segment));
    $y2 = getY(getEndPoint($segment));

    $midX = ($x1 + $x2) / 2;
    $midY = ($y1 + $y2) / 2;

    return makeDecartPoint($midX, $midY);
}

$segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));

print_r(getMidpointOfSegment($segment)); // (1.5, 1)
print_r(getBeginPoint($segment)); // (3, 2)
print_r(getEndPoint($segment)); // (0, 0)
