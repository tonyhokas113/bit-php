<?php

function divisor(int $digit) : int
{
    if ($digit === 0 || $digit === 1) {
        return 1;
    }
    if ($digit === 2) {
        return 0;
    }
    $divisors = range(2, $digit - 1);
    $divCounter = 0;
    foreach ($divisors as $div) {
        if ($digit % $div === 0) {
            $divCounter++;
        }
    }
    return $divCounter;
}

$mas100 = [];

foreach (range(1, 100) as $_) {
    $mas100[] = rand(33, 77);
}

usort($mas100, function($a, $b) {
    static $cache = [];

    if (!isset($cache[$a])) {
        $cache[$a] = divisor($a);
    }
    if (!isset($cache[$b])) {
        $cache[$b] = divisor($b);
    }
    return $cache[$b] <=> $cache[$a];
});

_d($mas100);


