<?php

use function App\PointFunctions\dup;

require '/Users/fellaio/php_practice/src/class/2/Point.php';
require '/Users/fellaio/php_practice/src/class/2/PointFunctions.php';

$point1 = new \App\Point();
$point2 = dup($point1);

var_dump($point1 == $point2); // true
var_dump($point1 === $point2); // false
