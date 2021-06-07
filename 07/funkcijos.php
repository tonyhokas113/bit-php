<body style="background-color:FFFFE0"> </body>
<?php

$labas = 'Labas';

// Funkcijos deklaracija
function vardas($parametras, $parametras2 = 12) // $parametras2 = 12 default reiksme
{
    //Global nekoks budas - geriau nenaudot.
    // global $labas, $viso;  Global padaro matomus kintamuosius visame dokumente.
    // echo $GLOBALS['labas'];  Totali seniena, NENAUDOTI!
    // echo $labas; Funkcijos viduje nematome kintamuju uz jos ribu.
    $viso = 'viso';
    $suma = $parametras + $parametras2;
    return $suma;
}
// echo $viso; Uz funkcijos ribu funkcijoje deklaruotu kintamuju nematome.

$suma = vardas(8, 25, 5); // Argumentai 8, 25;
echo $suma . '<br>';

$suma = vardas(14); // Argumentu gali buti tiek pat arba daugiau, maziau buti negali.
echo $suma . '<br>';

$suma = vardas(56, 25);
echo $suma . '<br>';

function calc($action, ...$arg) // Tritaskis priema visus argumentus.
{
    _d($arg);
    $answ = 0;
    foreach ($arg as $value) {
        if ($action == '+') {
            $answ += $value;
        }
        if ($action == '-') {
            $answ -= $value;
        }
    }
    return $answ;
}

_d(
    calc('-', 1, 5, 8)
);

function stepper()
{
    static $x = 0;
    _d(__FUNCTION__); // Parodo kokioje funkcijoje buvo iskviestas.
    return ++$x;
}

_d(stepper());
_d(stepper());
_d(stepper());
_d(stepper());
