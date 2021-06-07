<?php

$masyvas = [];

// Masyvo sukurimas su foreach ciklu
foreach (range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}

_d(range(1, 30), 'mano masyvas');

reset($masyvas);

$ind10 = false;

do {

    $ind10 = key($masyvas);

    $val = current($masyvas);

    next($masyvas);
} while (key($masyvas) !== null && $val < 10);
