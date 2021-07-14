<?php

$users = [
    ['name' => 'ona', 'pass' => md5('321')],
    ['name' => 'jonas', 'pass' => md5('123')],
    ['name' => 'petras', 'pass' => md5('333')],
];

file_put_contents(__DIR__ . './json/bankUsers.json', json_encode($users));
