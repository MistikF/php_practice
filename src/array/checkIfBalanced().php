<?php

function checkIfBalanced($expression)
{
    $stack = [];
    for ($i = 0; $i < strlen($expression); $i++) {
        if ($expression[$i] == '(') {
            array_push($stack, '(');
        } elseif ($expression[$i] == ')') {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }
    return empty($stack);
}

checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'); // true
checkIfBalanced('(4 + 3))'); // false
