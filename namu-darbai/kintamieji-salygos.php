<?php

// # 1

// $vardas = 'Vaigaudas';
// $pavarde = 'Kacenauskas';
// $gimimo_metai = 1993;
// $einamieji_metai = 2021;
// $kiekManMetu = $einamieji_metai - $gimimo_metai;

// echo "Aš esu $vardas $pavarde. Man yra $kiekManMetu metai.";

// echo '<br>';

// echo '<hr>';

// # 2

// $random_reiksme = rand(0, 4);
// $random_reiksme2 = rand(0, 4);

// if ($random_reiksme > $random_reiksme2) {
//     echo (round($random_reiksme / $random_reiksme2, 2));
//     echo '<br>';
// } else {
//     echo (round($random_reiksme2 / $random_reiksme, 2));
//     echo '<br>';
// }

// echo '<hr>';

# 3

// $randomReiksme = rand(0, 25);
// $randomReiksme2 = rand(0, 25);
// $randomReiksme3 = rand(0, 25);

// if ($randomReiksme < $randomReiksme2 && $randomReiksme > $randomReiksme3 || $randomReiksme < $randomReiksme3 && $randomReiksme > $randomReiksme2) {
//     echo $randomReiksme;
//     echo '<br>';
// }
// if ($randomReiksme2 < $randomReiksme && $randomReiksme2 > $randomReiksme3 || $randomReiksme2 < $randomReiksme3 && $randomReiksme2 > $randomReiksme) {
//     echo $randomReiksme2;
//     echo '<br>';
// }
// if ($randomReiksme3 < $randomReiksme && $randomReiksme3 > $randomReiksme2 || $randomReiksme3 < $randomReiksme2 && $randomReiksme3 > $randomReiksme) {
//     echo $randomReiksme3;
//     echo '<br>';
// }
// if ($randomReiksme == $randomReiksme2 || $randomReiksme2 == $randomReiksme3 || $randomReiksme3 == $randomReiksme) {
//     echo 'Gavome 2 vienodus skaicius, tad neturime vidurines reiksmes skaiciaus.';
//     echo '<br>';
// }

// echo '<hr>';

// #4 ?s

// $krastinesIlgisA = rand(1, 10);
// $krastinesIlgisB = rand(1, 10);
// $krastinesIlgisC = rand(1, 10);

// if ($krastinesIlgisA < $krastinesIlgisB + $krastinesIlgisC && $krastinesIlgisB < $krastinesIlgisA + $krastinesIlgisC && $krastinesIlgisC < $krastinesIlgisA + $krastinesIlgisB) {
//     echo 'Trikampis susidaro';
//     echo '<br>';
// } else {
//     echo 'Trikampis nesusidaro';
//     echo '<br>';
// }

// echo '<hr>';

# 5

// $pirmasKintamasis = rand(0, 2);
// $antrasKintamasis = rand(0, 2);
// $treciasKintamasis = rand(0, 2);
// $ketvirtasKintamasis = rand(0, 2);

// $nulis = 0;
// $vienas = 0;
// $du = 0;

// match ($pirmasKintamasis) {
//     0 => $nulis++,
//     1 => $vienas++,
//     2 => $du++
// };

// match ($antrasKintamasis) {
//     0 => $nulis++,
//     1 => $vienas++,
//     2 => $du++
// };

// match ($treciasKintamasis) {
//     0 => $nulis++,
//     1 => $vienas++,
//     2 => $du++,
// };

// match ($ketvirtasKintamasis) {
//     0 => $nulis++,
//     1 => $vienas++,
//     2 => $du++
// };

// echo "Suskaičiavome kiek turime - Nulių: $nulis, Vienetų: $vienas, Dvejetų: $du.";

// echo '<hr>';

// # 6

// $randomNr = rand(1, 6);

// echo "<h$randomNr>$randomNr</h$randomNr>";

// echo '<hr>';

// # 7

// $number = rand(-10, 10);

// if ($number > 0) {
//     echo "<h2><p style='color:blue'>$number</p></h2>";
// }
// if ($number < 0) {
//     echo "<h2><p style='color:green'>$number</p></h2>";
// }
// if ($number == 0) {
//     echo "<h2><p style='color:red'>$number</p></h2>";
// }

// echo '<hr>';

# 8

// $zvakiuKiekis = rand(5, 3000);
// $zvakiuKaina = 0;
// $nuolaida = 0;

// if ($zvakiuKiekis <= 1000) {
//     $zvakiuKaina += $zvakiuKiekis;
//     echo "Perkam $zvakiuKiekis žvakes už: $zvakiuKaina eur.";
//     echo '<br>';
// }
// if ($zvakiuKiekis > 1000 && $zvakiuKiekis <= 2000) {
//     $nuolaida = $zvakiuKiekis * 0.03;
//     $zvakiuKaina = $zvakiuKiekis - $nuolaida;
//     echo "Perkam $zvakiuKiekis žvakes už: $zvakiuKaina eur.";
//     echo '<br>';
// }
// if ($zvakiuKiekis > 2000) {
//     $nuolaida = $zvakiuKiekis * 0.04;
//     $zvakiuKaina = $zvakiuKiekis - $nuolaida;
//     echo "Perkam $zvakiuKiekis žvakes už: $zvakiuKaina eur.";
//     echo '<br>';
// }

// echo '<hr>';

# 9

// $kintamasis1 = rand(0, 100);
// $kintamasis2 = rand(0, 100);
// $kintamasis3 = rand(0, 100);
// echo 'Vidurkis: ' . round($aritmetinisVidurkis = $kintamasis1 + $kintamasis2 + $kintamasis3 / 3);
// echo '<br>';

// echo 'Skaičių su neleistinom reikšmėm vidurkis: ';

// if ($kintamasis1 >= 10 && $kintamasis1 <= 90) {
//     echo $kintamasis1;

//     if ($kintamasis2 >= 10 && $kintamasis2 <= 90) {
//         echo ' + ' . $kintamasis2;

//         if ($kintamasis3 >= 10 && $kintamasis3 <= 90) {
//             echo ' + ' . $kintamasis3 . ' = ' . ($kintamasis1 + $kintamasis2 + $kintamasis3) . ' / 3 = ' . round((($kintamasis1 + $kintamasis2 + $kintamasis3) / 3));
//             echo '<br>';
//         } else {
//             echo ' = ' . ($kintamasis1 + $kintamasis2) . ' / 2 = ' . round(($kintamasis1 + $kintamasis2) / 2);
//             echo '<br>';
//         }
//     } else {
//         if ($kintamasis3 >= 10 && $kintamasis3 <= 90) {
//             echo ' + ' . $kintamasis3 . ' = ' . ($kintamasis1 + $kintamasis3) . ' / 2 = ' . round((($kintamasis1 + $kintamasis3) / 2));
//             echo '<br>';
//         }
//     }
// } else {
//     if ($kintamasis2 >= 10 && $kintamasis2 <= 90) {
//         echo $kintamasis2;

//         if ($kintamasis3 >= 10 && $kintamasis3 <= 90) {
//             echo ' + ' . $kintamasis3 . ' = ' . ($kintamasis2 + $kintamasis3) . ' / 2 = ' . round((($kintamasis2 + $kintamasis3) / 2));
//             echo '<br>';
//         }
//     } else {
//         echo $kintamasis3;
//         echo '<br>';
//     }
// }

// echo '<hr>';

#10

// $valandos = rand(0, 23);
// $minutes = rand(0, 59);
// $sekundes = rand(0, 59);

// $sekundziuSkaicius = rand(0, 300);

// if ($valandos < 10) {
//     echo '0' . $valandos;
// } else {
//     echo $valandos;
// }
// if ($minutes < 10) {
//     echo ':' . '0' . $minutes;
// } else {
//     echo ':' . $minutes;
// }
// if ($sekundes < 10) {
//     echo ':' . '0' . $sekundes;
// } else {
//     echo ':' . $sekundes;
// }

// $ekstraMinutes;
// $ekstraValanda;

// $papildomosMinutes = floor($sekundziuSkaicius / 60);
// $papildomosSekundes = $sekundziuSkaicius - ($papildomosMinutes * 60);

// if ($papildomosSekundes + $sekundes >= 60) {
//     $ekstraMinutes = floor(($papildomosSekundes + $sekundes) / 60);
//     $sekundes = ($papildomosSekundes + $sekundes) % 60;
// } else {
//     $ekstraMinutes = 0;
//     $sekundes = $papildomosSekundes + $sekundes;
// }

// echo '<br>';

// $minuciuSuma = $minutes + $papildomosMinutes + $ekstraMinutes;
// $ekstraValanda = floor($minuciuSuma / 60);
// $minutes = $minuciuSuma % 60;

// if ($valandos < 10) {
//     echo '0' . $valandos + $ekstraValanda;
// } else if ($valandos + $ekstraValanda == 24) {
//     echo '00';
// } else {
//     echo $valandos + $ekstraValanda;
// }
// if ($minutes < 10) {
//     echo ':' . '0' . $minutes;
// } else {
//     echo ':' . $minutes;
// }
// if ($sekundes < 10) {
//     echo ':' . '0' . $sekundes;
// } else {
//     echo ':' . $sekundes;
// }

# 11

$var1 = rand(1000, 9999);
$var2 = rand(1000, 9999);
$var3 = rand(1000, 9999);
$var4 = rand(1000, 9999);
$var5 = rand(1000, 9999);
$var6 = rand(1000, 9999);

echo "Skaičius1 = $var1; Skaičius2 = $var2; Skaičius3 = $var3; Skaičius4 = $var4; Skaičius5 = $var5; Skaičius6 = $var6.<br>";

$string = strval($var1) . ' ' . strval($var2) . ' ' . strval($var3) . ' ' . strval($var4) . ' ' . strval($var5) . ' ' . strval($var6) . ' ';

$stringParts = str_split($string, 5);

rsort($stringParts);

echo 'String of descending variables: ' . implode($stringParts) . '<br><br>';
