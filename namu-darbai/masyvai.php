<body style="background-color:FFFFE0"> </body>
<?php

############################### 1

echo '<h3> Uzdavinys nr - 1 </h3>';

$array = [];

for ($i = 0; $i < 30; $i++) {
    $array[$i] = rand(5, 25);
}

foreach ($array as $value) {
    echo $value . ' ';
}

echo '<hr>';

############################# 2

echo '<h3> Uzdavinys nr - 2 </h3>';


echo '<b> 2a </b><br>';

$counter = 0;

foreach ($array as $value) {
    if ($value > 10) {
        $counter++;
    }
}
echo "$counter skaiciai yra didesni uz 10.";

//---------------------------------------------------------------

echo '<br><br><b> 2b </b><br>';

$max = max($array);
$key = array_search($max, $array);

echo "Indeksas: $key, Reiksme: $max";

// v2

$max = 5;
$indexes = [];

foreach ($array as $key => $value) {
    if ($value > $max) {
        $max = $value;
        $indexes = [];
    }
    if ($value == $max) {
        $indexes[] = $key;
    }
}

echo "<br> Didziausias skaicius $max<br>";
echo 'Kuriuose indeksuose yra si reiksme: ';
foreach ($indexes as $key => $value) {
    echo $value . ' ';
}


//---------------------------------------------------------------

echo '<br><br><b> 2c </b><br>';

$sum = 0;

foreach ($array as $i => $value) {
    if ($i % 2 === 0) {
        $sum += $value;
    }
}

echo $sum;

//---------------------------------------------------------------

echo '<br><br><b> 2d </b><br>';

$newArray = [];

foreach ($array as $i => $value) {
    $newArray[] = ($value - $i);
}

foreach ($newArray as $key => $value) {
    echo $value . ' ';
}

//---------------------------------------------------------------

echo '<br><br><b> 2e </b><br>';

for ($i = 0; $i < 10; $i++) {
    $array[] = rand(5, 25);
}

print_r($array);

//---------------------------------------------------------------

echo '<br><br><b> 2f </b><br>';

$even = [];
$odd = [];

foreach ($array as $i => $value) {
    if ($i % 2 === 0) {
        $even[] = $value;
    }
    if ($i % 2 !== 0) {
        $odd[] = $value;
    }
}

echo 'Arejus is poriniu reiksmiu: ';
foreach ($even as $key => $value) {
    echo $value . ' ';
}

echo '<br>';

echo 'Arejus is neporiniu reiksmiu: ';
foreach ($odd as $key => $value) {
    echo $value . ' ';
}

//---------------------------------------------------------------

echo '<br><br><b> 2g </b><br>';

foreach ($array as $i => $value) {
    if ($i % 2 === 0 && $value > 15) {
        $value = 0;
    }
    echo $value . ' ';
}

// v2 

// foreach ($masyvas3 as $key => &$value) {
//     if ($value > 15) {
//         $value = 0;
//     }
// }

// unset($value);

//---------------------------------------------------------------

echo '<br><br><b> 2h </b><br>';         // 16:30 kodas.

$min = 0;
$found = false;

foreach ($array as $i => $value) {
    if ($value > 10 && $found == false) {
        $min = $i;
        $found = true;
    }
}

echo $min;

//---------------------------------------------------------------

echo '<br><br><b> 2i </b><br>';

foreach ($array as $i => $value) {
    if ($i % 2 === 0) {
        unset($array[$i]);
    }
}

print_r($array);

echo '<hr>';

//---------------------------------------------------------------

########################## 3

echo '<h3> Uzdavinys nr - 3 </h3>';

$random = [];
$a = 0;
$b = 0;
$c = 0;
$d = 0;

for ($i = 0; $i < 200; $i++) {
    $random[] = chr(rand(65, 68));
}

foreach ($random as $i => $value) {
    if ($value == 'A') {
        $a++;
    }
    if ($value == 'B') {
        $b++;
    }
    if ($value == 'C') {
        $c++;
    }
    if ($value == 'D') {
        $d++;
    }
}

echo "A = $a, B = $b, C = $c, D = $d";

echo '<hr>';

##########################  4

echo '<h3> Uzdavinys nr - 4 </h3>';

sort($random);

foreach ($random as $key => $value) {
    echo $value . ' ';
}

echo '<hr>';

##########################  5 

echo '<h3> Uzdavinys nr - 5 </h3>';

$array1 = [];
$array2 = [];
$array3 = [];
$final = [];
$original = [];
$original2 = [];
$uni = 0;
$uni2 = 0;

for ($i = 0; $i < 200; $i++) {
    $array1[] = chr(rand(65, 68));
    $array2[] = chr(rand(65, 68));
    $array3[] = chr(rand(65, 68));
    $final[] = $array1[$i] . $array2[$i] . $array3[$i];
}

for ($i = 0; $i < count($final); $i++) {
    $add = true;
    for ($j = 0; $j < count($final); $j++) {
        if ($i != $j) {
            if ($final[$i] === $final[$j]) {
                $add = false;
            }
        }
    }
    if ($add == true) {
        $original[] = $final[$i];
        $uni++;
    }
}

for ($i = 0; $i < count($final); $i++) {
    $add = true;
    if (count($original2) > 1) {
        for ($j = 0; $j < count($original2) - 1; $j++) {
            if ($original2[$j] == $final[$i]) {
                $add = false;
            }
        }
    }
    if ($add == true) {
        $original2[] = $final[$i];
        $uni2++;
    }
}

foreach ($final as $key => $value) {
    echo $value . ' ';
}

echo '<br>';
echo '<br>';

echo "Unikalios reiksmes ($uni) : ";
foreach ($original as $key => $value) {
    echo $value . ' ';
}

echo '<br>';

echo "Unikalios kombinacijos ($uni2) : ";
foreach ($original2 as $key => $value) {
    echo $value . ' ';
}

echo '<hr>';

##########################  6

echo '<h3> Uzdavinys nr - 6 </h3>';

$pirmas = [];
$antras = [];

for ($i = 0; $i < 100; $i++) {
    $add = true;
    $rn = rand(100, 999);

    if (count($pirmas) > 1) {
        for ($j = 0; $j < count($pirmas) - 1; $j++) {
            if ($pirmas[$j] == $rn) {
                $add = false;
            }
        }
    }
    $add == true ? $pirmas[] = $rn . ' ' : $i--;
}

foreach ($pirmas as $key => $value) {
    echo $value . ' ';
}

echo '<br>';
echo '<br>';

for ($i = 0; $i < 100; $i++) {
    $add = true;
    $rnd = rand(100, 999);

    if (count($antras) > 1) {
        for ($j = 0; $j < count($antras) - 1; $j++) {
            if ($antras[$j] == $rnd) {
                $add = false;
            }
        }
    }
    $add == true ? $antras[] = $rnd . ' ' : $i--;
}

foreach ($antras as $key => $value) {
    echo $value . ' ';
}

echo '<hr>';

##########################  7

echo '<h3> Uzdavinys nr - 7 </h3>';

// Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra 6 uzdavinio pirmame 
// masyve, bet nėra 6 uzdavinio antrame masyve.

$masyvas = [];

foreach ($pirmas as $i => $value) {
    $equal = false;
    foreach ($antras as $a => $value2) {
        if ($value == $value2) {
            $equal = true;
        }
    }
    if ($equal == false) {
        $masyvas[] = $value;
    }
}

foreach ($masyvas as $key => $val) {
    echo $val . ' ';
}

echo '<hr>';

##########################  8

echo '<h3> Uzdavinys nr - 8 </h3>';

$masyvas2 = [];

foreach ($pirmas as $i => $value) {
    $equal = false;
    foreach ($antras as $a => $value2) {
        if ($value == $value2) {
            $equal = true;
        }
    }
    if ($equal == true) {
        $masyvas2[] = $value;
    }
}

foreach ($masyvas2 as $key => $val) {
    echo $val . ' ';
}

echo '<hr>';

##########################  9

echo '<h3> Uzdavinys nr - 9 </h3>';

// Sugeneruokite masyvą, kurio indeksus sudarytų 6 uždavinio
//  pirmo masyvo reikšmės, o jo reikšmės būtų iš antrojo masyvo.

$arejus = [];


for ($i = 0; $i < count($pirmas); $i++) {
    $arejus[$pirmas[$i]] = 0;
    for ($j = 0; $j < count($antras); $j++) {
        $arejus[$pirmas[$i]] = $antras[$j];
        if ($j == $i) {
            break;
        }
    }
}

print_r($arejus);

echo '<hr>';

##########################  10

echo '<h3> Uzdavinys nr - 10 </h3>';

$arr = [];
$n = 0;

for ($i = 0; $i < 10; $i++) {
    if ($i <= 1) {
        $arr[] = rand(5, 25);
    } else {
        $arr[] = $arr[0 + $n] + $arr[1 + $n];
        $n++;
    }
}

print_r($arr);

echo '<hr>';

##########################  11

echo '<h3> Uzdavinys nr - 11 </h3>';

$arr1 = [];
$newArr = [];

for ($i = 0; $i < 101; $i++) {
    $arr1[] = rand(0, 300);
}

for ($k = 0; $k < 10; $k++) {
    foreach ($arr1 as $key => $value) {
        $same = false;
        foreach ($arr1 as $key2 => $value2) {
            if ($key != $key2) {
                if ($value == $value2) {
                    $same = true;
                }
            }
        }
        if ($same == true) {
            $arr1[$key] = rand(0, 300);
        }
    }
}

foreach ($arr1 as $value) {
    echo $value . ' ';
}

echo '<br><br>';

sort($arr1);
foreach ($arr1 as $value) {
    echo $value . ' ';
}

echo '<br><br>';

for ($i = 50, $j = 100; $i >= 0; $i--, $j -= 2) {
    $newArr[$i] = $arr1[$j];
}
for ($i = 51, $j = 99; $i <= 100; $i++, $j -= 2) {
    $newArr[$i] = $arr1[$j];
}

ksort($newArr);
print_r($newArr);

$sum1 = 0;
$sum2 = 0;

foreach ($newArr as $key => $value) {
    if ($key < 50) {
        $sum1 += $value;
    }
    if ($key > 50) {
        $sum2 += $value;
    }
}
$diff = abs($sum1 - $sum2);

echo "<br><br>Pirmos dalies suma: $sum1 <br> Antros dalies suma: $sum2 <br> Sumu skirtumas: $diff";

//------------------------------------------------------------------

// $size = 101;
// $array11 = [];
// $newArray11 = [];
// while (count($array11) < $size) {
//     $array11[] = rand(0, 300);
//     $array11 = array_unique($array11);
// }

// foreach ($array11 as $value) {
//     echo $value . ' ';
// }
// echo '<br><br>';

// sort($array11);
// foreach ($array11 as $value) {
//     echo $value . ' ';
// }
// echo '<br><br>';

// for ($i = 50, $j = 100; $i >= 0; $i--, $j -= 2) {
//     $newArray11[$i] = $array11[$j];
//     $newArray11[101 - $i] = $array11[$j - 1];
// }
// // for ($i = 51, $j = 99; $i <= 100; $i++, $j -= 2) {
// //     $newArray11[$i] = $array11[$j];
// // }

// ksort($newArray11);
// print_r($newArray11);



// $dydis = 101;
// $random1 = [];
// while (count($random1) < $dydis) {
//     array_push($random1, rand(0, 300));
//     $random1 = array_unique($random1);
// }
// print_r($random1);
// $maxval = max($random1);
// $isrusiuotas = [];
// $isrusiuotas[$dydis / 2] = $maxval;
// unset($random1[array_keys($random1, $maxval)[0]]);
// echo '<hr>';
// $middle = ceil($dydis / 2);
// for ($i = 0; $i < $middle - 1; $i++) {
//     $maxval = max($random1);
//     $isrusiuotas[($dydis / 2) + $i + 1] = $maxval;
//     unset($random1[array_keys($random1, $maxval)[0]]);
//     if (!empty($random1)) {
//         $maxval = max($random1);
//         $isrusiuotas[($dydis / 2) - $i - 1] = $maxval;
//         unset($random1[array_keys($random1, $maxval)[0]]);
//     }
// }
// print_r($isrusiuotas);
// echo '<br>';
