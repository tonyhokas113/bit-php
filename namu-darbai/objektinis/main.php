<?php

require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';
require __DIR__ . '/Kibiras2.php';
require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';
require __DIR__ . '/Miskas.php';
require __DIR__ . '/Zveris.php';
require __DIR__ . '/Stikline.php';
require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';
require __DIR__ . '/Pinigine2.php';
require __DIR__ . '/MarsoPalydovas.php';
require __DIR__ . '/Tenisininkas2.php';

# 1

// $kibiras = new Kibiras1;

// $kibiras->prideti1Akmeni();
// $kibiras->kiekPririnktaAkmenu();
// $kibiras->prideti1Akmeni();
// $kibiras->prideti1Akmeni();
// $kibiras->prideti1Akmeni();
// $kibiras->kiekPririnktaAkmenu();


// $kibiras->pridetiDaugAkmenu(5);
// _d($kibiras->kiekPririnktaAkmenu());

# 2

// $pinigine = new Pinigine;

// $pinigine->ideti(1);
// $pinigine->ideti(5);
// $pinigine->skaiciuoti();
// $pinigine->ideti(1.39);
// $pinigine->ideti(8);
// _d($pinigine->skaiciuoti());
// $pinigine->skaiciuoti();

# 3

// $kibiras1 = new Kibiras2;
// $kibiras2 = new Kibiras2;
// $kibiras3 = new Kibiras2;

// $kibiras1->pridetiDaugAkmenu(10);
// $kibiras2->pridetiDaugAkmenu(10);
// $kibiras3->pridetiDaugAkmenu(10);

// echo Kibiras2::getAkmenuKiekisVisuoseKibiruose();

# 4

// $stones = new KibirasNePo1;

// $stones->pridetiDaugAkmenu(5);
// $stones->prideti1Akmeni();

// echo $stones->kiekPririnktaAkmenu();

# 5

// $zveris = new Zveris('vilkas');

// echo $zveris->paleisk();

# 6

// $stikline1 = new Stikline(200);
// $stikline2 = new Stikline(150);
// $stikline3 = new Stikline(100);


// $stikline1->ipilti(300);
// $stikline2->ipilti($stikline1->ispilti());
// $stikline3->ipilti($stikline2->ispilti());

// echo '<pre>';
// var_dump($stikline1);
// var_dump($stikline2);
// var_dump($stikline3);

# 7

// $grybai = new Krepsys;
// $grybai->eitiGrybauti();
// echo '<pre>';
// var_dump($grybai);

# 8

// $pinigine2 = new Pinigine2;

// $pinigine2->ideti(1);
// $pinigine2->ideti(1.5);
// $pinigine2->ideti(5);
// $pinigine2->ideti(1.39);
// $pinigine2->ideti(8);
// $pinigine2->ideti(10);
// $pinigine2->ideti(20);
// $pinigine2->skaiciuoti();

// echo $pinigine2->monetos();
// echo $pinigine2->banknotai();

# 9

// $objektas1 = MarsoPalydovas::kontrole();
// $objektas2 = MarsoPalydovas::kontrole();
// $objektas3 = MarsoPalydovas::kontrole();
// $objektas4 = MarsoPalydovas::kontrole();

// echo '<pre>';
// var_dump($objektas1);
// echo '<br>';
// var_dump($objektas2);
// echo '<br>';
// var_dump($objektas3);

# 10

// $tenisininkas1 = Tenisininkas2::zaidejai('Jonas');
// $tenisininkas2 = Tenisininkas2::zaidejai('Petras');
// $tenisininkas3 = Tenisininkas2::zaidejai('Juozas');

// Tenisininkas2::zaidimoPradzia();

// echo $tenisininkas1->arTuriKamuoliuka();
// echo $tenisininkas2->arTuriKamuoliuka();

// echo '<hr>';

// echo '<pre>';
// var_dump($tenisininkas1);
// echo '<br>';
// var_dump($tenisininkas2);
// echo '<br>';
// var_dump($tenisininkas3);

// $tenisininkas1->perduotiKamuoliuka();

// echo '<pre>';
// var_dump($tenisininkas1);
// echo '<br>';
// var_dump($tenisininkas2);
