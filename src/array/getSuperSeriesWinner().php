<?php

function getSuperSeriesWinner($scores) {
    $canadaWins = 0;
    $ussrWins = 0;

    foreach ($scores as $score) {
        if ($score[0] > $score[1]) {
            $canadaWins++;
        } elseif ($score[0] < $score[1]) {
            $ussrWins++;
        }
    }

    if ($canadaWins > $ussrWins) {
        return 'canada';
    } elseif ($canadaWins < $ussrWins) {
        return 'ussr';
    } else {
        return null;
    }
}
$scores = [
    [3, 7], // Первая игра
    [4, 1], // Вторая игра
    [4, 4],
    [3, 5],
    [4, 5],
    [3, 2],
    [4, 3],
    [6, 5],
];

print_r(getSuperSeriesWinner($scores)); // 'canada'