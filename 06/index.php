<?php

$masyvas = [];

foreach (range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}

_d($masyvas, 'mano masyvas');

$max = 5;
$indexes = [];

foreach($masyvas as $key => $val) {
    if ($val > $max) {
        $max = $val;
        $indexes = [];
    }
    if ($val == $max) {
        $indexes[] = $key;
        array_push($indexes, $key);
    }
}
_d($max, 'max');




reset($masyvas);
$ind10 = false;
do {
    $ind10 = key($masyvas);
    $val = current($masyvas);
    next($masyvas);
} while(key($masyvas)!==null && $val < 10);

_d($ind10, '$ind10');