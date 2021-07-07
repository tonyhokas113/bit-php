<?php

$masyvas = [];

// echo $masyvas;
echo '<pre>';
// print_r($masyvas);

$masyvas[10000000] = 'suo';
$masyvas['jsdkafhsdkjfhjsd'] = 'zebras';
array_push($masyvas, 'kate');
array_push($masyvas, 'kengura');
$masyvas[] = 'Liutas';
$masyvas[''] = 'Nieko';
$masyvas[''] = 'Nieko2';

$masyvas2 = ['pele', 'tupi', 'suo'];


// $masyvas3 = array('pele', 'tupi', 'suo')[rand(0, 2)];

// NETAIKOMAS !!!!!!
// for ($i = 0; $i<count($masyvas); $i++) {
//     echo $masyvas2[$i] . '<br>';
// }

asort($masyvas2);



foreach ($masyvas as $index => $val) {
    // echo "$index=>$val" . '<br>';
    // $val = 0;
    $masyvas[$index] = 'A';
}







// print_r($masyvas);


$A = 5;
$B = &$A;
$A = 6;
$B = 9;
_d($A, 'A');
_d($B, 'B');

$colors = ['red', 'green', 'blue', 'yellow'];
print_r($colors);

foreach ($colors as &$value){}

unset($value);

foreach ($colors as $index => $value) {
   echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
}

