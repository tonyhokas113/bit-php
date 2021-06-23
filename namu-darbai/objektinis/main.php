<?php

require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';

# 1

$kibiras = new Kibiras1;

// $kibiras->prideti1Akmeni();
// $kibiras->kiekPririnktaAkmenu();
// $kibiras->prideti1Akmeni();
// $kibiras->prideti1Akmeni();
// $kibiras->prideti1Akmeni();
// $kibiras->kiekPririnktaAkmenu();


// $kibiras->pridetiDaugAkmenu(5);
// _d($kibiras->kiekPririnktaAkmenu());

# 2

$pinigine = new Pinigine;

// $pinigine->ideti(1);
// $pinigine->ideti(5);
// $pinigine->skaiciuoti();
$pinigine->ideti(1.39);
$pinigine->ideti(8);
_d($pinigine->skaiciuoti());

# 3
