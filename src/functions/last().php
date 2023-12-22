<?php

$last = function ($str) {
    return $str === '' ? null : substr($str, -1);
};

$last('');     // null
$last('0');    // 0
$last('210');  // 0
$last('pow');  // w
$last('kids'); // s
