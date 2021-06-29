<?php

require __DIR__ . '/Tenisininkas.php';


$t1 = new Tenisininkas('Rapolas');
$t2 = new Tenisininkas('Mykolas');

Tenisininkas::zaidimoPradzia();

echo '<pre>';
var_dump($t1);
var_dump($t2);

$t1->perduotiKamuoliuka();

echo '<pre>';
var_dump($t1);
var_dump($t2);
