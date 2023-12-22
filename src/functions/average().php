<?php

function average() {
    $args = func_get_args();
    $count = count($args);
    if ($count === 0) {
        return null;
    }
    return array_sum($args) / $count;
}

average(0); // 0
average(0, 10); // 5
average(-3, 4, 2, 10); // 3.25
average(); // null
