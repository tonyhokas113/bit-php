<body style="background-color:FFFFE0"> </body>
<?php

######################################### 1

echo '<h3> Uzdavinys nr - 1 </h3>';

function txt($text)
{
    return "<h1> $text </h1>";
}
echo txt('Labas rytas');

echo '<hr>';

######################################### 2

echo '<h3> Uzdavinys nr - 2 </h3>';

function tag($arg1, $arg2)
{
    return "<h$arg2> $arg1 </h$arg2>";
}
echo tag('Labas rytas', 4);

echo '<hr>';

######################################### 3

echo '<h3> Uzdavinys nr - 3 </h3>';

$string = md5(time());
echo "Random stringas: $string";

preg_match_all('/\d{1,}/', $string, $nr);

foreach ($nr[0] as $value) {
    echo txt($value);
}

echo '<hr>';

######################################### 4

echo '<h3> Uzdavinys nr - 4 </h3>';

function modulus($nr)
{
    if (is_int($nr)) {
        $count = 0;
        for ($i = 2; $i < $nr; $i++) {
            if ($i != $nr) {
                if ($nr % $i == 0) {
                    $count++;
                }
            }
        }
        return $count;
    }
    return null;
}
$number = 10;
echo "Skaicius $number dalinasi -" . modulus($number) . ' kartus';

echo '<hr>';

######################################### 5

echo '<h3> Uzdavinys nr - 5 </h3>';

foreach (range(1, 100) as $key => $value) {
    $array[] = rand(33, 77);
}

foreach ($array as $key => $value) {
    $array2[] = modulus($value) . ' - ' . $value;
}

function sorted($a, $b)
{
    return - (substr($a, 0, 2) <=> substr($b, 0, 2));
}

usort($array2, 'sorted');

_d($array2, '5 (Sorted)');
print_r($array2);

echo '<hr>';

######################################### 6

echo '<h3> Uzdavinys nr - 6 </h3>';

foreach (range(1, 100) as $key => $value) {
    $array3[] = rand(333, 777);
}

foreach ($array3 as $key => $value) {
    if (modulus($value) == 0) {
        $array4[] = $value;
    }
}

_d($array3, '6');
_d($array4, '6 (Prime numbers)');
print_r($array4);

echo '<hr>';

######################################### 7

echo '<h3> Uzdavinys nr - 7 </h3>';

function generate($r)
{
    static $i = 1;
    if ($i <= $r) {
        $z = rand(10, 20);
        foreach (range(1, $z) as $key => $_) {
            if ($key == ($z - 1) && $i == $r) {
                $arr[] = 0;
            } elseif ($key == ($z - 1) && $i != $r) {
                $i++;
                $arr[] = generate($r);
            } else {
                $arr[] = rand(0, 10);
            }
        }
        return $arr;
    }
}

$r = rand(10, 30);
$arejus = generate($r);
_dc($arejus, '7');
echo "Gylis - $r masyvai";

echo '<hr>';

//-----------------------------------------------------------

// function doArray($limit) {
//     if (--$limit < 0) {
//         return 0;
//     }

//     $masyvas = [];
//     $random = rand(10, 20);

//         foreach(range(1, $random) as $key => $value) {
//             if($random - 1 == $key) {
//                 $masyvas[] = doArray($limit);
//             } else {
//                 $masyvas [] = rand(0, 10);
//             }
//         }
//     return $masyvas;
// }
// _dc(doArray(rand(10, 30)), '7 uzduotis');

######################################### 8

function counter($arr)
{
    static $count = 0;
    foreach ($arr as $value) {
        if (!is_array($value)) {
            $count += $value;
        } else {
            counter($value);
        }
    }
    return $count;
}

_d(counter($arejus), '8');

######################################### 9


foreach (range(1, 3) as $key => $value) {
    $masyvas[] = rand(1, 33);
}

$run = 1;
$from = 0;
while ($run == 1) {

    $prime = true;
    $row = 0;
    for ($i = $from; $i < count($masyvas); $i++) {

        if (modulus($masyvas[$i]) == 0 && $masyvas[$i] != 1) {
            $row++;
        } else {
            $prime = false;
        }
    }

    if ($prime == false) {
        $from++;
        $masyvas[] = rand(1, 33);
    }
    if ($row == 3) {
        $run = 0;
    }
}
_d($masyvas, '9');

//   2      3      5      7     11     13     17     19     23     29      31 

//-----------------------------------------------------------

// $masyvas = [];

// foreach (range(1, 3) as $_) {
//     $masyvas[] = rand(1, 33);
// }

// while (
//     isPrime($masyvas[(count($masyvas) - 1)]) > 0 ||
//     isPrime($masyvas[(count($masyvas) - 2)]) > 0 ||
//     isPrime($masyvas[(count($masyvas) - 3)]) > 0
// ) {
//     $masyvas[] = rand(1, 33);
// }

// _d($masyvas, '9 uzduotis');

//-----------------------------------------------------------

// function galeNebutuPirminiu(&$m)
// {

//     for ($i = count($m) - 1; $i > count($m) - 4; $i--) {
//         if (dalikliai($m[$i]) != 0) {
//             $m[] = rand(1, 33);
//             galeNebutuPirminiu($m);
//         }
//     }
//     return $m;
// }

//-----------------------------------------------------------

// do {
//     $last3Prime = true;
//     for ($i = count($masyvas4) - 1; $i >= count($masyvas4) - 3; $i--) {
//         if (test($masyvas4[$i]) !== 0) {
//             $last3Prime = false;
//             $masyvas4[] = rand(1, 33);
//         }
//     }
// } while (!$last3Prime);

// _dc($masyvas4);

######################################### 10


echo '<h3> Uzdavinys nr - 10 </h3>';

$suma = 0;
$nariai = 0;
foreach (range(1, 10) as $key => $value) {
    foreach (range(1, 10) as $key2 => $value2) {
        $arr2[$key2][] = rand(1, 100);
    }
}

$min = 10;
$ind = 0;
$d = 0;
foreach ($arr2 as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if (modulus($value2) == 0) {
            $nariai++;
            $suma += $value2;
        }
    }
}

if ($suma / $nariai < 70) {
    foreach ($arr2 as $key => $value) {
        foreach ($value as $key2 => $value2) {
            if ($value2 < $min) {
                $min = $value2;
                $ind = $key2;
            }
        }
        $d++;
    }
}

echo $min;
echo '<br>';
echo $ind;
echo '<br>';
echo $d;
echo '<br>';
echo $suma / $nariai;
_d($arr2, '10');

//-----------------------------------------------------------

// function averagePrimes2dArray($array)
// {
//     $sumPrimes = $countPrimes = 0;

//     foreach ($array as $value_ii) {
//         foreach ($value_ii as $value_i) {
//             if (test($value_i) === 0) {
//                 $sumPrimes += $value_i;
//                 $countPrimes++;
//             }
//         }
//     }
//     $average = $countPrimes !== 0 ? $sumPrimes / $countPrimes : 0;
//     return $average;
// }

// function customReplaceMin2dArray(&$array)
// {
//     $min = 999999999;
//     foreach ($array as $index_ii => $value_ii) {
//         foreach ($value_ii as $index_i => $value_i) {
//             if ($value_i < $min) {
//                 $min = $value_i;
//                 $minIndexX = $index_i;
//                 $minIndexY = $index_ii;
//             }
//         }
//     }
//     $array[$minIndexY][$minIndexX] += 3;
//     return $array[$minIndexY][$minIndexX];
// }

// $size2d = 10;
// foreach (range(0, $size2d - 1) as $ii) {
//     foreach (range(0, $size2d - 1) as $i) {
//         $masyvas5[$ii][$i] = rand(1, 100);
//     }
// }
// _d($masyvas5, '6-10');
// _d(averagePrimes2dArray($masyvas5), '6-10');

// while (averagePrimes2dArray($masyvas5) < 70) {
//     customReplaceMin2dArray($masyvas5);
// }

// _d($masyvas5, '6-10');
// _d(averagePrimes2dArray($masyvas5), '6-10');
