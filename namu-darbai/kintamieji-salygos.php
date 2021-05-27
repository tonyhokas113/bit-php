<?php

// # 1

// $vardas = "Vaigaudas";
// $pavarde = "Kacenauskas";
// $gimimo_metai = 1993;
// $einamieji_metai = 2021;
// $kiekManMetu = $einamieji_metai - $gimimo_metai;

// echo "Aš esu $vardas $pavarde. Man yra $kiekManMetu metai." . "<br>";

// # 2

// $random_reiksme = rand(1, 4);
// $random_reiksme2 = rand(1, 4);

// if ($random_reiksme > $random_reiksme2) {
//     echo (round($random_reiksme / $random_reiksme2, 2)) . "<br>";
// } else {
//     echo (round($random_reiksme2 / $random_reiksme, 2)) . "<br>";
// }

// # 3

// $randomReiksme = rand(1, 25);
// $randomReiksme2 = rand(1, 25);
// $randomReiksme3 = rand(1, 25);

// if ($randomReiksme < $randomReiksme2 && $randomReiksme > $randomReiksme3 || $randomReiksme < $randomReiksme3 && $randomReiksme > $randomReiksme2) {
//     echo $randomReiksme . "<br>";
// }
// if ($randomReiksme2 < $randomReiksme && $randomReiksme2 > $randomReiksme3 || $randomReiksme2 < $randomReiksme3 && $randomReiksme2 > $randomReiksme) {
//     echo $randomReiksme2 . "<br>";
// }
// if ($randomReiksme3 < $randomReiksme && $randomReiksme3 > $randomReiksme2 || $randomReiksme3 < $randomReiksme2 && $randomReiksme3 > $randomReiksme) {
//     echo $randomReiksme3 . "<br>";
// }
// if ($randomReiksme == $randomReiksme2 || $randomReiksme2 == $randomReiksme3 || $randomReiksme3 == $randomReiksme) {
//     echo "Gavome 2 vienodus skaicius, tad neturime vidurines reiksmes skaiciaus." . "<br>";
// }

// #4 ?s

// $krastinesIlgisA = rand(1, 10);
// $krastinesIlgisB = rand(1, 10);
// $krastinesIlgisC = rand(1, 10);

// if ($krastinesIlgisA < $krastinesIlgisB + $krastinesIlgisC && $krastinesIlgisB < $krastinesIlgisA + $krastinesIlgisC && $krastinesIlgisC < $krastinesIlgisA + $krastinesIlgisB) {
//     echo "Trikampis susidaro" . "<br>";
// } else {
//     echo "Trikampis nesusidaro" . "<br>";
// }

// # 5

// $pirmasKintamasis = rand(0, 2);
// $antrasKintamasis = rand(0, 2);
// $treciasKintamasis = rand(0, 2);
// $ketvirtasKintamasis = rand(0, 2);

// $nulis = 0;
// $vienas = 0;
// $du = 0;

// switch ($pirmasKintamasis) {
//     case 0:
//         $nulis++;
//         break;
//     case 1:
//         $vienas++;
//         break;
//     case 2:
//         $du++;
//         break;
// }

// switch ($antrasKintamasis) {
//     case 0:
//         $nulis++;
//         break;
//     case 1:
//         $vienas++;
//         break;
//     case 2:
//         $du++;
//         break;
// }

// switch ($treciasKintamasis) {
//     case 0:
//         $nulis++;
//         break;
//     case 1:
//         $vienas++;
//         break;
//     case 2:
//         $du++;
//         break;
// }

// switch ($ketvirtasKintamasis) {
//     case 0:
//         $nulis++;
//         break;
//     case 1:
//         $vienas++;
//         break;
//     case 2:
//         $du++;
//         break;
// }

// echo "Suskaiciavome kiek turime - Nuliu: $nulis, Vienetu: $vienas, Dvejetu: $du." . "<br>";

// # 6

// $randomNr = rand(1, 6);

// echo "<h$randomNr>$randomNr</h$randomNr>" . "<br>";

// # 7

// $number = rand(-10, 10);

// if ($number > 0) {
//     echo "<p style='color:blue'>$number</p>" . "<br>";
// }
// if ($number < 0) {
//     echo "<p style='color:green'>$number</p>" . "<br>";
// }
// if ($number == 0) {
//     echo "<p style='color:red'>$number</p>" . "<br>";
// }

// # 8

// $zvakiuKiekis = rand(5, 3000);
// $zvakiuKaina = 0;
// $nuolaida = 0;

// if ($zvakiuKiekis <= 1000) {
//     $zvakiuKaina += $zvakiuKiekis;
//     echo "Perkama - $zvakiuKiekis zvakiu uz: $zvakiuKaina eur." . "<br>";
// }
// if ($zvakiuKiekis > 1000 && $zvakiuKiekis <= 2000) {
//     $nuolaida = $zvakiuKiekis * 0.03;
//     $zvakiuKaina = $zvakiuKiekis - $nuolaida;
//     echo "Perkama - $zvakiuKiekis zvakiu uz: $zvakiuKaina eur." . "<br>";
// }
// if ($zvakiuKiekis > 2000) {
//     $nuolaida = $zvakiuKiekis * 0.04;
//     $zvakiuKaina = $zvakiuKiekis - $nuolaida;
//     echo "Perkama - $zvakiuKiekis zvakiu uz: $zvakiuKaina eur." . "<br>";
// }

# 9

$kintamasis1 = rand(0, 100);
$kintamasis2 = rand(0, 100);
$kintamasis3 = rand(0, 100);
echo round($aritmetinisVidurkis = $kintamasis1 + $kintamasis2 + $kintamasis3 / 3);

if () {
    # code...
}