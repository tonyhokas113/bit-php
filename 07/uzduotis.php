<?php

foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
    }
}

$max = 5;
foreach ($masyvas as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if ($value2 > $max) {
            $max = $value2;
            $big = $key;
            $small = $key2;
        }
    }
}

_d($masyvas, 'masyvas');
_d($max, 'max');
_d("$big - $small", 'coord');


$sums = [];

foreach ($masyvas as $index1 => $val1) {
    foreach ($val1 as $index2 => $val2) {
        $sums[$index2] = ($sums[$index2] ?? 0) + $val2;
    }
}
