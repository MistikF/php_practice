<?php

function getSameCount($array1, $array2)
{
    $uniqueArray1 = array_unique($array1);
    $uniqueArray2 = array_unique($array2);
    $commonElements = array_intersect($uniqueArray1, $uniqueArray2);
    return count($commonElements);
}

getSameCount([], []); // 0
getSameCount([4, 4], [4, 4]); // 1
getSameCount([1, 10, 3], [10, 100, 35, 1]); // 2
getSameCount([1, 3, 2, 2], [3, 1, 1, 2]); // 3
