<body style="background-color:FFFFE0"> </body>
<?php


#################### 1

$masyvas = [];

foreach (range(1, 10) as $key => $_) {
    foreach (range(1, 5) as $key2 => $_) {
        $masyvas[$key][$key2] = rand(5, 25);
    }
}

_d($masyvas, '1');


#################### 2

//------------------------- 2a

$count = 0;

foreach ($masyvas as $value) {
    foreach ($value as $value2) {
        if ($value2 > 10) {
            $count++;
        }
    }
}

_d($count, '2a');

//------------------------- 2b

$bigVal = 0;

foreach ($masyvas as $value) {
    foreach ($value as $value2) {
        if ($value2 > $bigVal) {
            $bigVal = $value2;
        }
    }
}

_d($bigVal, '2b');


//------------------------- 2c

$sum = 0;
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;

foreach ($masyvas as $value) {
    foreach ($value as $key => $value2) {
        match ($key) {
            0 => $sum += $value2,
            1 => $sum1 += $value2,
            2 => $sum2 += $value2,
            3 => $sum3 += $value2,
            4 => $sum4 += $value2,
        };
    }
}

_d("$sum $sum1 $sum2 $sum3 $sum4", '2c');

//----------------------------------------------------------


// $reiksmes = [];
// $reiksme = 0;
// foreach (range(1, 5) as $key => $value) {
//     foreach (range(1, 10) as $key2 => $value2) {
//         $reiksme += $masyvas[$key2][$key];
//     }
//     $reiksmes[] = $reiksme;
//     $reiksme = 0;
// }
// print_r($reiksmes);

//----------------------------------------------------------

// foreach ($masyvas[0] as $o => $outerValue) {
//     $sum = 0;
//     foreach ($masyvas as $i => $innerValue) {
//         $sum += $masyvas[$i][$o];
//     }

//     echo $sum . "<br>";
// }


//------------------------- 2d 

foreach ($masyvas as $key => $_) {
    $masyvas[$key][] = rand(5, 25);
    $masyvas[$key][] = rand(5, 25);
}

_d($masyvas, '2d');

//----------------------------------------------------------

// foreach ($masyvas as $index_ii => &$value) {
//     $value[] =  rand(5, 25);
//     $value[] =  rand(5, 25);
// }


//------------------------- 2e

for ($i = 0; $i < 10; $i++) {
    ${'suma' . $i} = 0;
}

$naujasMasyvas = [];

foreach ($masyvas as $key => $value) {
    foreach ($value as $value2) {
        match ($key) {
            0 => $suma0 += $value2,
            1 => $suma1 += $value2,
            2 => $suma2 += $value2,
            3 => $suma3 += $value2,
            4 => $suma4 += $value2,
            5 => $suma5 += $value2,
            6 => $suma6 += $value2,
            7 => $suma7 += $value2,
            8 => $suma8 += $value2,
            9 => $suma9 += $value2,
        };
    }
}

for ($i = 0; $i < 10; $i++) {
    $naujasMasyvas[] = ${'suma' . $i};
}
_d($naujasMasyvas, '2e');

//----------------------------------------------------------

// echo 'Antras namu darbas: E<br>';

// $sum = 0;

// foreach($masyvas as $x){
//     foreach($x as $y){
//         $sum += $y;
//     }
//     $naujasMasyvas[] = $sum;

//     $sum = 0;

// }

// _d($naujasMasyvas, 'Naujas masyvas, Antras namu darbas: E');

//----------------------------------------------------------

// foreach ($masyvas as $i => $el) {
//     $sumos[$i] = array_sum($el);
// }

// print_r($sumos);

//------------------------- 3

$array = [];

foreach (range(1, 10) as $key => $_) {
    foreach (range(1, rand(5, 25)) as $key2 => $_) {
        $array[$key][$key2] = chr(rand(65, 90));
    }
}

foreach ($array as $key => $value) {
    array_multisort($array[$key], SORT_ASC, SORT_STRING);
}

_d($array, '3');


//------------------------- 4 

function sorter($a, $b)
{
    foreach ($a as $value) {
        if ($value === 'K') {
            return 1;
        }
    }
    foreach ($b as $value) {
        if ($value === 'K') {
            return 1;
        }
    }
}

sort($array);
usort($array, "sorter");

_d($array, '4');

//----------------------------------------------------------

function proSort($a, $b)
{
    $ak = (int) in_array('K', $a);
    $bk = (int) in_array('K', $b);

    if ($ak + $bk == 1) {
        return $bk <=> $ak;
    }
    return count($a) <=> count($b);
}

usort($array, "proSort");

_d($array, '4');

//------------------------- 5

$arr = [];

foreach (range(1, 30) as $key => $_) {
    foreach (range(1, 2) as $key2 => $_) {
        $id = rand(1, 1000000);
        $place = rand(0, 100);
        if ($key2 == 0) {
            $arr[$key][$key2] = "user_id => $id";
        }
        if ($key2 == 1) {
            $arr[$key][$key2] = "place_in_row => $place";
        }
    }
}

_d($arr, '5');

//----------------------------------------------------------

// $masyvas = [];
// $count = 0;

// do {
//     $count++;
//     $uid = rand(1, 50);
//     foreach ($masyvas as $user) {
//         if ($user['user_id'] == $uid) {
//             continue 2;
//         }
//     }

//     $masyvas[] = [
//         'user_id' => $uid,
//         'place_in_row' => rand(0, 100)
//     ];
// } while (count($masyvas) < 30);

//------------------------- 6


// Issortinta pagal id.

function idSort($a, $b)
{
    if (substr($a[0], 10, 10) == substr($b[0], 10, 10)) {
        return 0;
    }
    return (substr($a[0], 10, 10) < substr($b[0], 10, 10)) ? -1 : 1;
}

usort($arr, "idSort");

_d($arr, '6 - (ID)');


// Issortinta pagal place.

function placeSort($a, $b)
{
    if (substr($a[1], 15, 15) == substr($b[1], 15, 15)) {
        return 0;
    }
    return (substr($a[1], 15, 15) < substr($b[1], 15, 15)) ? 1 : -1;
}

usort($arr, "placeSort");

_d($arr, '6 - (PLACE)');

//----------------------------------------------------------

// usort($arr, function ($a, $b) {
//     return $a <=> $b;
// });

// _d($arr);
// print_r($arr);

// usort($arr, function ($a, $b) {
//     return $a['place_in_row'] <=> $b['place_in_row'];
// });

// _d($arr);
// print_r($arr);


//------------------------- 7

function randomString()
{
    $letters = '';

    for ($i = 0; $i < rand(5, 15); $i++) {
        if ($i == 0) {
            $letters .= chr(rand(65, 90));
        } else {
            $letters .= chr(rand(97, 122));
        }
    }
    return $letters;
}

foreach ($arr as $key => $value) {
    $arr[$key][] = 'Name => ' . randomString();
    $arr[$key][] = 'Surname => ' . randomString();
}

_d($arr, '7');


//------------------------- 8

$newArr = [];

foreach (range(1, 10) as $key => $value) {
    $randNr = rand(0, 5);
    if ($randNr > 0) {
        foreach (range(1, $randNr) as $key2 => $value2) {
            $newArr[$key][] = rand(0, 10);
        }
    } else {
        $newArr[] = rand(0, 10);
    }
}

_d($newArr, '8');


//------------------------- 9

$valueSum = 0;

foreach ($newArr as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key2 => $value2) {
            $valueSum += $value2;
        }
    } else {
        $valueSum += $value;
    }
}

// Sort

function mySort($a, $b)
{
    $av = 0;
    $bv = 0;
    if (is_array($a)) {
        foreach ($a as $value) {
            $av += $value;
        }
        $a = $av;
    }
    if (is_array($b)) {
        foreach ($b as $value) {
            $bv += $value;
        }
        $b = $bv;
    }
    if ($a == $b) {
        return 0;
    }
    return ($a > $b ? 1 : -1);
}

usort($newArr, "mySort");

_d($valueSum, '9 - Sum');
_d($newArr, '9 - Array sort');

//----------------------------------------------------------

// usort($masyvas, function($a, $b) {
//     $asum = 0;
//     if(is_array($a)) {
//         foreach($a as $value) {
//             $asum += $value
//         }
//         $a = $asum;
//     }

//     $bsum = 0; 
//     if(is_array($b)) {
//         foreach($b as $value) {
//             $bsum += $value;
//         }
//         $b = $bsum;
//     }
//     return $a <=> $b;
// }
// );

//------------------------- 10

echo '<h3> Uzdavinys nr - 10 </h3>';

$val = ['#', '%', '+', '*', '@', '裡'];

function color()
{
    $hex = '#';
    for ($i = 0; $i < 6; $i++) {
        $r = rand(0, 1);
        $r == 0 ? $hex .= rand(0, 9) : $hex .= chr(rand(65, 70));
    }
    return $hex;
}

foreach (range(1, 10) as $key => $value) {
    foreach (range(1, 10) as $key2 => $value2) {
        $arejus[$key][] = $val[rand(0, 5)] . '  ' . color();
    }
}
$div = '';
foreach ($arejus as $ind => $valu) {
    foreach ($valu as $ind2 => $valu2) {
        $div .= '<span style="color:' . substr($valu2, 3) . '">' . substr($valu2, 0, 3) . '</span>';
    }
}
echo "<div style='width: 200px; text-align: justify; padding: 5px; border: 1px solid black;'> $div </div>";

_d($arejus, '10');

echo '<hr>';

//------------------------- 11

echo '<h3> Uzdavinys nr - 11 </h3>';
