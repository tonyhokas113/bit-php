<?php

require __DIR__ . '/Kibiras1.php';


$kibirasA = new Kibiras1;
$kibirasB = new Kibiras1;

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');
_d(Kibiras1::kiekVisoPririnktaAkmenu(), 'VISO');

$kibirasA->prideti1Akmeni();
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();
$kibirasB->pridetiDaugAkmenu(10);
$kibirasA->pridetiDaugAkmenu(3);

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');
_d(Kibiras1::kiekVisoPririnktaAkmenu(), 'VISO');

