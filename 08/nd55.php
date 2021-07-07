<?php

$masyvas = [];
$count = 0;
do {
    $count++;
    $uid = rand(1, 50);
    foreach ($masyvas as $user) {
        if ($user['user_id'] == $uid) {
            continue 2;
        }
    }
    $masyvas[] = [
        'user_id' => $uid,
        'place_in_row' => rand(0, 100)
    ];
} while(count($masyvas) < 30);

_d($masyvas);
_d($count);