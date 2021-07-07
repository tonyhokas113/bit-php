<?php

$masyvas = [];
do {
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


foreach ($masyvas as &$user) {

    $user['name'] = '';
    $user['surname'] = '';
    foreach(range(1, rand(5, 15)) as $_) {
        $user['name'] .= range('a', 'z')[rand(0, 25)];
    }
    foreach(range(1, rand(5, 15)) as $_) {
        $user['surname'] .= range('a', 'z')[rand(0, 25)];
    }
}


_d($masyvas);
