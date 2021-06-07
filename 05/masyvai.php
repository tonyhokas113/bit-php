<?php

$masyvas = [];

// echo $masyvas; - taip neisprintinsim masyvo. Reikia naudoti print_r.
// print_r($masyvas);

// Masyvo indexai php nebutinai turi buti iteger tipo. Taipat gali buti stringai ir pan.
// Masyvas gali buti isdeliotas random seka.
// key negali buti double ar float reiksmes.
// Negali but vienodu indeksu. Jei indeksai vienodi jo indekso reiksme overaidinama.

$masyvas[-1000000] = 'suo';
$masyvas['adsasfs'] = 'zeb';
$masyvas[1] = 'zebras';
array_push($masyvas, 'kate');
array_push($masyvas, 'kengura');
$masyvas[] = 'Liutas';
$masyvas[''] = 'Nieko';

// Geriausias variantas:
// $masyvas2 = ['pele', 'kate' => 'tupi', 'suo'][rand(0, 2)];
$masyvas2 = ['pele', 'kate', 'suo'][rand(0, 2)];

$masyvas3 = array('pele', 'tupi', 'suo')[rand(0, 2)];

// php for ciklas masyvams NETAIKOMAS (nebent sugeneruot masyva)
// for ($i = 0; $i < count($masyvas); $i++) {
//     echo $masyvas[$i] . ' ';
// }

print_r($masyvas2);
_d($masyvas2);

// Php masyvams reikia naudoti for each cikla. 
// foreach ($masyvas as $key => $value) {
//     # code...
// }

// Priskirimas pagal nuoroda
$C = 77;
$A = 5;
$B = &$A;
$A = 6;
$B = &$C;

_d($A, 'A');
_d($B, 'B');
_d($C, 'C');

// Nereikalingu nuorodu nepalikti, reikia jas unsetinti

unset($A);
