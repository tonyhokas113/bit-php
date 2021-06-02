<body style="background-color:FFFFE0"> </body>

<?php

# 1

// echo '<h3> 1. </h3>';

// for ($i = 0; $i < 400; $i++) {
//     echo '*';
// }

// echo '<hr>';

# 1a


// echo '<h5> 1a. </h5>';

// for ($i = 0; $i < 400; $i++) {
//     echo "<span> * </span>";
// }

// echo '<hr>';

# 1b

// echo '<h5> 1b. </h5>';

// for ($i = 1; $i <= 400; $i++) {
//     echo '*';
//     if (($i % 50) == 0) {
//         echo '<br>';
//     }
// }

// echo '<hr>';

# 2

// echo '<h3> 2. </h3>';

// $didesni = 0;

// for ($i = 0; $i < 300; $i++) {
//     $randomSkaiciai = rand(0, 300) . ' ';

//     if ($randomSkaiciai > 150) {
//         $didesni++;
//     }
//     if ($randomSkaiciai < 275) {
//         echo $randomSkaiciai;
//     }
//     if ($randomSkaiciai > 275) {
//         echo "<span style = 'color: red'> $randomSkaiciai </span>";
//     }
// }
// echo '<br>';
// echo '<br>';
// echo $didesni . ' skaiciai yra didesni uz 150.';

// echo '<hr>';

# 3

// echo '<h3> 3. </h3>';

// $randomiser = rand(3000, 4000);
// $array = [];
// $sk = 1;

// for ($i = 0; $i < $randomiser; $i++) {
//     $sk++;
//     if (($sk % 77) == 0) {
//         array_push($array, $sk);
//     }
// }

// for ($i = 0; $i < count($array); $i++) {
//     if ($i == count($array) - 1) {
//         echo $array[$i] . '.';
//     } else {
//         echo $array[$i] . ', ';
//     }
// }

// echo '<hr>';

# 4

// echo '<h3> 4. </h3>';

// $x = '';

// for ($i = 0; $i < 100; $i++) {
//     $x .= ' * ';
// }

// echo "<div style = 'width: 120px; padding-left: 50px; word-break: break-all;'> $x </div>";

// echo '<hr>';

# 5

// echo '<h3> 5. </h3>';

// $x = '';
// $toRight = 0;
// $toLeft = 9;

// for ($i = 0; $i < 100; $i++) {
//     if ($i == $toRight) {
//         $toRight += 11;
//         $x .= "<span style = 'color: red'>  *  </span>";
//     } else if ($i == $toLeft) {
//         $toLeft += 9;
//         $x .= "<span style = 'color: red'>  *  </span>";
//     } else {
//         $x .= ' * ';
//     }
// }

// echo "<div style = 'width: 120px; padding-left: 50px; word-break: break-all;'> $x </div>";


// echo '<hr>';

# 6

// echo '<h3> 6. </h3>';

// $coin = 2;

// echo '<b> 6a </b><br>';

// while ($coin != 0) {
//     $coin = rand(0, 1);
//     if ($coin == 1) {
//         echo 'S';
//     } else {
//         echo 'H';
//     }
// }

// echo '<br><b> 6b </b><br>';

// $counter = 0;

// while ($counter != 3) {
//     $coin = rand(0, 1);
//     if ($coin == 0) {
//         $counter++;
//         echo 'H';
//     } else {
//         echo 'S';
//     }
// }

// echo '<br><b> 6c </b><br>';

// $counter = 0;

// while ($counter != 3) {
//     $coin = rand(0, 1);
//     if ($coin == 0) {
//         $counter++;
//         echo 'H';
//     } else {
//         $counter = 0;
//         echo 'S';
//     }
// }

// echo '<hr>';

# 7

// echo '<h3> 7. </h3>';

// $petroTaskai = 0;
// $kazioTaskai = 0;
// $kasPirmas = 0;

// while ($kazioTaskai < 222 && $petroTaskai < 222) {
//     $petroTaskai += rand(10, 20);
//     $kazioTaskai += rand(5, 25);
//     if ($petroTaskai >= 222) {
//         $kasPirmas = 1;
//         echo 'Petro taskai: ' . $petroTaskai . '<br> Kazio taskai: ' . $kazioTaskai;
//         echo '<br>  Partiją laimėjo: Petras';
//     }
//     if ($kazioTaskai >= 222 && $kasPirmas == 0) {
//         echo 'Petro taskai: ' . $petroTaskai . '<br> Kazio taskai: ' . $kazioTaskai;
//         echo '<br> Partiją laimėjo: Kazys';
//     }
// }

// echo '<hr>';

# 8 !!!!

// echo '<h3> 8. </h3>';

// $x = [];
// $br = '<br>';

// for ($i = 0; $i <= 121; $i++) {
//     $r = rand(0, 255);
//     $g = rand(0, 255);
//     $b = rand(0, 255);
//     // $x .= "<div style = 'color: rgb($r,$g,$b)'> * </div>";
//     array_push($x, "<span style = 'color: rgb($r,$g,$b)'> * </span>");
// }


// $m = [];
// $stars = 1;

// for ($i = 0, $j = 1; $i < 21; $i++) {
//     for ($p = 0; $p < $j; $p++) { 

//         if ($i <= 11) {
//             array_push($m, "<div> * </div>");
//         }
//     }
// }



// print_r($x);
// echo "<div style = 'width: 120px; padding-left: 100px; word-break: break-all;'> $x </div>";

//121


// $x = '';

// for ($i = 0; $i < 121; $i++) {
//     $r = rand(0, 255);
//     $g = rand(0, 255);
//     $b = rand(0, 255);
//     $x .= "<span style = 'color: rgb($r,$g,$b)'> * </span>";
// array_push($x, "<span style = 'color: rgb($r,$g,$b)'> * </span>");
// }

// for ($i = 0; $i < 21; $i++) { 
//     # code...
// }

// echo $x;

// vietoje span html elemento panaudoti div elementa(nes jis yra block).

# 9

// echo '<h3> 9. </h3>';

// $time = 0;
// $time2 = 0;

// for ($a = 0; $a < 1; $a++) {
//     $mcStart = microtime(true);
//     for ($i = 0; $i < 1000000; $i++) {
//         $c = "10 bezdzioniu \n suvalge 20 bananu.";
//     }
//     $mcFinish = microtime(true);
//     $time = $mcFinish - $mcStart;
// }

// for ($a = 0; $a < 1; $a++) {
//     $mcStart = microtime(true);
//     for ($i = 0; $i < 1000000; $i++) {
//         $c = '10 bezdzioniu \n suvalge 20 bananu.';
//     }
//     $mcFinish = microtime(true);
//     $time2 = $mcFinish - $mcStart;
// }

// echo 'Dvigubos: ' . $time . '<br>';
// echo 'Viengubos: ' . $time2 . '<br>';
// echo '<br>';

// echo $time < $time2 ? 'Kodas greitesnis su dvigubom kabutem' :  'Kodas greitesnis su viengubom kabutem';

// echo '<hr>';

# 10

// echo '<h3> 10. </h3>';

// echo '<br><b> 10a </b><br>';

// $ilgis = 85;
// $kiekis = 5;
// $ikalta = 0;
// $smugiai = 0;

// while ($ikalta != $kiekis) {
//     $ilgis -= rand(5, 20);
//     if ($ilgis <= 0) {
//         $ilgis = 85;
//         $ikalta++;
//     }
//     $smugiai++;
// }

// echo "Vyniams ikalti prireike: $smugiai smugiu";

// echo '<br><b> 10b </b><br>';

// $ilgis2 = 85;
// $kiekis2 = 5;
// $ikalta2 = 0;
// $smugiai2 = 0;

// while ($ikalta2 != $kiekis2) {
//     $tikimybe = rand(0, 1);
//     if ($tikimybe == 1) {
//         $ilgis2 -= rand(20, 30);
//     }
//     if ($ilgis2 <= 0) {
//         $ilgis2 = 85;
//         $ikalta2++;
//     }
//     $smugiai2++;
// }

// echo "Vyniams ikalti prireike: $smugiai2 smugiu";

// echo '<hr>';

# 11

echo '<h3> 11. </h3>';

$stringas = '';
$arr = [];
$stringas2 = '';

for ($i = 0; $i < 50; $i++) {
    $add = true;
    $rn = rand(1, 200);
    array_push($arr, $rn);

    if (count($arr) > 1) {
        for ($j = 0; $j < count($arr) - 1; $j++) {
            if ($arr[$j] == $rn) {
                $add = false;
            }
        }
    }
    $add == true ? $stringas .= $rn . ' ' : $i--;
}

echo $stringas;
echo '<br>';
echo '<br>';

$explode = explode(' ', $stringas);
$arr2 = [];

for ($k = 0; $k < count($explode); $k++) {

    $dalinas = 0;

    for ($m = 1; $m <= $explode[$k]; $m++) {
        if ($explode[$k] % $m == 0) {
            $dalinas++;
        }
    }
    if ($dalinas == 2) {
        $stringas2 .= $explode[$k] . ' ';
    }
}

echo $stringas2;
echo '<br>';
echo '<br>';

// $arr2 = [];
// $explode2 = explode(' ', $stringas2);
// $stringas3 = '';

// for ($i = 0; $i < count($explode2) - 1; $i++) {
//     array_push($arr2, $explode2[$i]);
// }
// sort($explode2);


// for ($i = 1; $i < count($explode2); $i++) {
//     print_r($explode[$i] . ' ');
//     $stringas3 .= $explode[$i] . ' ';
// }

// echo '<br>';
// echo '<br>';
// echo $stringas3;





// print_r($arr);
// print_r($explode2);
