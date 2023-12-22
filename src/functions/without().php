<?php

function without($array, ...$values) {
    return array_values(array_diff($array, $values));
}

print_r(without([3, 4, 10, 4, 'true'], 4)); // [3, 10, 'true']
print_r(without(['3', 2], 0, 5, 11)); // ['3', 2]
