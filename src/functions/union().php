<?php

function union(...$arrays) {
    $merged = [];
    foreach ($arrays as $array) {
        $merged = [...$merged, ...$array];
    }
    return array_values(array_unique($merged));
}

print_r(union([3])); // [3]
print_r(union([3, 2], [2, 2, 1])); // [3, 2, 1]
print_r(union(['a', 3, false], [true, false, 3], [false, 5, 8])); // ['a', 3, false, true, 5, 8]
