<?php

function getSameParity($numbers) {
    $result = [];
    if (!empty($numbers)) {
        $parity = $numbers[0] % 2;
        foreach ($numbers as $number) {
            if ($number % 2 == $parity) {
                $result[] = $number;
            }
        }
    }
    return $result;
}


getSameParity([]);        // []
getSameParity([1, 2, 3]); // [1, 3]
getSameParity([1, 2, 8]); // [1]
getSameParity([2, 2, 8]); // [2, 2, 8]