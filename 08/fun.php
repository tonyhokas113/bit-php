<?php


function recursive($num) {
    echo $num, '<br>';
    if ($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
        recursive($num + 1);
    }
    echo 'Iseinam', $num, '<br>';
}



$startNum = 1;
recursive($startNum);


$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];

function doSort($a, $b) {
    return $a[0] <=> $b[0];
}

$doS = function($a, $b) {
    return $a[0] <=> $b[0];
};


usort($masyvas, function($a, $b) {
    return $a[0] <=> $b[0];
});

usort($masyvas, fn($a, $b) => $a[0] <=> $b[0]);
    

// _d($masyvas);


usort($masyvas, 'doSort');

usort($masyvas, $doS);


$labas = 'labas';
$viso = 'viso';


$a1 = function() {
    var_dump($labas);
};

$a2 = fn() => var_dump($labas);



$a3 = function() use(&$labas, $viso) {
    var_dump($labas);
    var_dump($viso);
};


$labas = 'Viso gero';

// $a1();
// $a2();
$a3();


$func = function() use (&$func) { 
    static $current = 10; 
    // tikrinam eigą
    if ($current <= 0) { 
        //išeinam 
        return FALSE;
    } 
    // spausdinam reikšmę.
    echo "$current<br>"; 
    $current--; 
    $func(); 
 }; 
  //  Kviečiam funkciją
 $func();
 