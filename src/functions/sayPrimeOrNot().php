<?php

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function sayPrimeOrNot($num) {
    echo isPrime($num) ? 'yes' : 'no';
}

sayPrimeOrNot(5); // yes
sayPrimeOrNot(4); // no
