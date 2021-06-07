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


//------------------------- 2d 

foreach ($masyvas as $key => $_) {
    $masyvas[$key][] = rand(5, 25);
    $masyvas[$key][] = rand(5, 25);
}

_d($masyvas, '2d');

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


//------------------------- 10

$arejus = [];
$val = rand();
$color;

foreach (range(1, 10) as $key => $value) {
    foreach (range(1, 10) as $key2 => $value2) {
        # code...
    }
}

_d($arejus, '10');
