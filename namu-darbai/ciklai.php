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

//-------------------------------------------------------------------

// $numberCount = 0;
// for ($i=0; $i < 300; $i++) { 
//     $random = rand(0,300);
//     if($random > 150) {
//         $numberCount++;
//     }
//     if($random > 275) {
//         echo "<div style='color: red; display: inline-block;'> $random </div>" . ' ';
//     } else {
//         echo $random . ' ';
//     }
// }

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

//-----------------------------------------------------------------------

// $dal = 77;
// $sk = rand(3000, 4000);
// echo "sugeneruotas skaičius yra $sk, <br> o seka toliau <br>";
// $i = 77;
// echo "$i";
// while ($i <= $sk-77) {
//         echo ", ";
//         $i += 77;
//         echo $i;
//     }

//-----------------------------------------------------------------------

// $iki = rand(3000, 4000);

// for ($i = 1; $i < $iki; $i++) {
//     if ($i % 77 == 0) {
//         echo $i;
//         if ($i + 77 < $iki) {
//             echo ', ';
//         }
//     }
// }

//-----------------------------------------------------------------------

// echo 'Trecia uzduotis:<br>';
// $randNum = rand(3000, 400);
// $a = [];
// $c = 0;
// for ($i = 1; $i < $randNum; $i++) {
//     if ($i % 77 == 0) {
//         $c = $i;
//         array_push($a, $c);
//     }
// }
// $a = implode(',', $a);
// echo $a . '<br><hr>';

//-----------------------------------------------------------------------

// $string = '';
// $limit = rand(3000, 4000);
// // echo $limit . '<br>';
// for ($i = 1; $i <= $limit; $i++) {
//     if ($i % 77 === 0) {
//         $string = $i >= $limit - 76 ? $string . $i : $string . $i . ', ';
//     }
// }
// echo $string;

//-----------------------------------------------------------------------

// echo 77;
// for ($i = 78; $i < rand(3000, 4000); $i++) {

//     $random = $i;
//     if ($random % 77 == 0) {
//         echo ", $random";
//     }
// }

//-----------------------------------------------------------------------


// $sk = 77;
// $limit = rand(3000, 4000);

// echo "Skaicuoju nuo 1 iki $limit <br>";
// echo $sk;

// for ($i = $sk+1; $i <= $limit; $i++) {
//     if ($i % 77 == 0) {
//         echo ', ';
//         echo $i;
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

//---------------------------------------------------------------------

// $kvadratas = '';
// $ilgis = 50;

// for ($i = 0; $i < $ilgis; $i++) {
//     $kvadratas = '';
//     for ($m = 0; $m < $ilgis; $m++) {
//         $kvadratas .= '*';
//     }
//     echo "<div style='line-height: 11px; font-size: 22px;'>$kvadratas</div>";
// }

//---------------------------------------------------------------------

// <style>
//   .kvadratas {
//     white-space: nowrap;
//   }
//   .kvadratas span{
//     padding: 3px;
//   }
// </style>

// <?php
// echo "<div class='kvadratas' id='kvadratas'>";
// for ($i = 0 ; $i < $krastine ; $i++)
// {

//     for ($j = 0 ; $j < $krastine ; $j++)
//     {
//         if($i==$j){
//             echo '<span class="red">* </span>';
//         }
//         elseif($i+$j == $krastine-1){
//             echo '<span class="red">* </span>';
//         }
//         else {
//          echo '<span>* </span>';
//         }
//     }
//     echo '<br>';
// }
// echo '</div>';
// echo '<hr>';

//---------------------------------------------------------------------


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

//---------------------------------------------------------------------

// echo '<br>';
// $h = 0;
// do {
//     $coin = rand(0, 1);
//     if ($coin === 1) {
//         echo 'S';
//         $h = 0;
//     } else {
//         echo 'H';
//         $h++;
//     }
// } while ($h < 3);

//---------------------------------------------------------------------

// $winner = 222;
// $leader = 0;
// $petras = 0;
// $kazys = 0;

// do {
//     $petras += rand(10, 20);
//     if ($petras > $leader) {
//         $leader = $petras;
//     }
//     $kazys += rand(5, 25);
//     if ($kazys > $leader) {
//         $leader = $kazys;
//     }

//     echo "Petro taskai: $petras, Kazio taskai: $kazys. Partija laimejo: " . ($petras > $kazys ? 'Petras.' : ($petras == $kazys ? 'Lygiosios.' : 'Kazys.'));
//     echo '<br>';
// } while ($leader < $winner);

//---------------------------------------------------------------------

// $kscore = 0;
// $pscore = 0;
// while ($pscore <= 222 & $kscore <= 222) {
//     $kscore += rand(5, 25);
//     $pscore += rand(10, 20);
//     if ($kscore > $pscore) {
//         echo "Partiją laimėjo Kazys (Kazys $kscore:$pscore Petras)<br>";
//     }
//     if ($kscore < $pscore) {
//         echo "Partiją laimėjo Petras (Petras $pscore:$kscore Kazys)<br>";
//     }
//     if ($kscore == $pscore) {
//         echo "Lygiosios ($kscore:$pscore)<br>";
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

//---------------------------------------------------------------------

// echo 'Septinta uzduotis:<br>';
// $petras = 0;
// $kazys = 0;
// $finish = false;
// do {
//     $petras += rand(10, 20);
//     $kazys += rand(5, 25);
//     echo "Petras surinko: $petras<br>Kazys surinko: $kazys<br>";
//     if ($petras >= 222 && $finish == false) {
//         $finish = true;
//         echo "Partija laimejo: Petras su $petras taskais!<br>";
//     }
//     if ($kazys >= 222 && $finish == false) {
//         $finish = true;
//         echo "Partija laimejo: Kazys su $kazys taskais!<br>";
//     }
// } while (!$finish);

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

//---------------------------------------------------------------------

// echo '<div class=\'rombas\'>';
// $len = 21;
// for ($x = 0; $x < $len; $x++) {
//     echo '<br>';
//     for ($y = 0; $y < $len; $y++) {
//         if (($x + $y >= 10 && $x - $y <= 10) &&
//             ($x + 10 >= $y) &&
//             ($x + $y <= 30)
//         ) {
//             echo '<span style="color: rgb(', rand(0, 255), ', ', rand(0, 255), ', ', rand(0, 255), ');">*</span>';
//         } else {
//             echo "<span style=\"opacity: 0\">_</span>";
//         }
//     }
// }
// echo '</div>';

//---------------------------------------------------------------------

// $dHorizontalOfRhombus = 101;
// $dVerticalOfRhombus = 30;
// $diagRatio = $dVerticalOfRhombus / $dHorizontalOfRhombus;
// echo '<div style="text-align:center;">';
// for ($ii = 0; $ii < $dVerticalOfRhombus; $ii++) {
//     for ($i = 0; $i < $dHorizontalOfRhombus; $i++) {
//         if ($ii >= $diagRatio  * $i + 1 && $ii <= $diagRatio  * ($dHorizontalOfRhombus - $i) - 1) {
//             echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255) . ');">*</span>';
//         }
//     }
//     echo '<span style="font-size: 1px;"><br></span>';
// }
// echo '</div><br>';

//---------------------------------------------------------------------

// echo "<div style='width: 300px; height: 300px; text-align: center; display: inline-block;'>";

// for ($i = 1; $i < 12; $i++) {
//     $times = 0;
//     while ($times < $i) {
//         echo "<span style='margin: 0; color: rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . "); font-size: 30px; line-heigh: 3px; height: 30px'> * </span>";
//         $times++;
//     }
//     $times = 0;
//     echo '<br>';
// }
// for ($i = 10; $i > 0; $i--) {
//     $times = 0;
//     while ($times < $i) {
//         echo "<span style='margin: 0; color: rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . "); font-size: 30px; line-heigh: 3px; height: 30px'> * </span>";
//         $times++;
//     }
//     $times = 0;
//     echo '<br>';
// }

// echo '</div>';

//---------------------------------------------------------------------

// echo '<hr>';

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

//---------------------------------------------------------------------

// $nail_length = 85;

// // 5 nails with small strikes:
// $strikes = 0;
// for ($i = 0; $i < 5; $i++) {
//     $progress = 0;
//     while ($progress < $nail_length) {
//         $small_strike = rand(5, 20);
//         $progress += $small_strike;
//         $strikes++;
//     }
// }
// echo "Fully hammering 5 nails with small strikes took $strikes strikes. <br>";

// // 5 nails with small strikes:
// $strikes = 0;
// for ($i = 0; $i < 5; $i++) {
//     $progress = 0;
//     while ($progress < $nail_length) {
//         $big_strike = rand(20, 30);
//         if (rand(0, 1) == 1) {
//             $progress += $small_strike;
//         }
//         $strikes++;
//     }
// }
// echo "Fully hammering 5 nails with big strikes took $strikes strikes. <br>";

// echo '<hr>';

# 11

// echo '<h3> 11. </h3>';

// $stringas = '';
// $arr = [];
// $stringas2 = '';

// for ($i = 0; $i < 50; $i++) {
//     $add = true;
//     $rn = rand(1, 200);
//     array_push($arr, $rn);

//     if (count($arr) > 1) {
//         for ($j = 0; $j < count($arr) - 1; $j++) {
//             if ($arr[$j] == $rn) {
//                 $add = false;
//             }
//         }
//     }
//     $add == true ? $stringas .= $rn . ' ' : $i--;
// }

// echo $stringas;
// echo '<br>';
// echo '<br>';

// $explode = explode(' ', $stringas);
// $arr2 = [];

// for ($k = 0; $k < count($explode); $k++) {

//     $dalinas = 0;

//     for ($m = 1; $m <= $explode[$k]; $m++) {
//         if ($explode[$k] % $m == 0) {
//             $dalinas++;
//         }
//     }
//     if ($dalinas == 2) {
//         $stringas2 .= $explode[$k] . ' ';
//     }
// }

// echo $stringas2;
// echo '<br>';
// echo '<br>';

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

//---------------------------------------------------------------------

// $rand1 = [];
// while (count($rand1) <= 50) {
//     array_push($rand1, strval(rand(1, 200)));
//     $rand1 = array_unique($rand1, SORT_NUMERIC);
// }
// $rand1_str = implode(" ", $rand1);

// $dups = [];
// foreach (array_count_values($rand1) as $val => $c)
//     if ($c > 1) $dups[] = $val;
// $dups_str = implode(' ', $dups);
// echo "Random string 1: $rand1_str <br>";
// echo "Duplicates check - number of dupes in string 1: $dups_str <br>";
// $rand2 = sort($rand1);
// $rand2_str = '';

// for ($i = 0; $i < count($rand1); $i++) {
//     if (isPrime($rand1[$i]) == true) {
//         $rand2_str .= strval($rand1[$i]) . ' ';
//     }
// }

// echo "Sorted primes: $rand2_str";

// function isPrime($num)
// {
//     $prime = false;
//     if ($num < 2) {
//         return false;
//     }
//     for ($i = 2; $i <= $num; $i++) {
//         if ($num % $i == 0 && $num / $i > 1 && $num != $i) {
//             $prime = false;
//             break;
//         }
//         if ($num % $i == 0 && $num / $i == 1 && $num == $i) {
//             $prime = true;
//         }
//     }
//     return $prime;
// }

//---------------------------------------------------------------------

// $array = [];

// while (count($array) <= 50) {
//     $sk = rand(1, 200);

//     if (count($array) == 0) {
//         array_push($array, $sk);
//     } else {
//         foreach ($array as $i) {
//             if ($sk === $i) {
//                 continue 2;
//             }
//         }
//         array_push($array, $sk);
//     }
// }

// echo implode(" ", $array);

// echo '<br>';
// echo '<br>';

// $new_array = [];

// for ($i = 0; $i < count($array); $i++) {
//     $sk = $array[$i];
//     $dalikliai = 0;
//     for ($o = 2; $o < $sk; $o++) {
//         if ($sk % $o === 0) {
//             $dalikliai++;
//         }
//     }
//     if ($dalikliai === 0) {
//         array_push($new_array, $sk);
//     }
// }

// sort($new_array);

// echo implode(" ", $new_array);
