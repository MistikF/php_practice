<?php

function getIntersectionOfSortedArray($array1, $array2)
{
    $result = [];
    $i = 0;
    $j = 0;
    while ($i < count($array1) && $j < count($array2)) {
        if ($array1[$i] == $array2[$j]) {
            $result[] = $array1[$i];
            $i++;
            $j++;
        } elseif ($array1[$i] < $array2[$j]) {
            $i++;
        } else {
            $j++;
        }
    }
    return $result;
}

print_r(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30])); // [10, 24]
print_r(getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4])); // []
print_r(getIntersectionOfSortedArray([], [2])); // []
