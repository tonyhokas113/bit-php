<?php

echo '<br>---------------1------------<br>';

$sk = rand(0, 10);
while ($sk < 9) {
   echo $sk . '<br>';
   $sk = rand(0, 10);
}

echo '<br>-------------2--------------<br>';

do {
    $sk = rand(0, 10);
echo $sk . '<br>';
} while ($sk < 9);


echo '<br>-------------3--------------<br>';

for ($x = 1; $x <= 5; $x++) {
    echo 'Numeris: '.$x.' <br>';
 }
 


 $ciklai = 0;

 while ($ciklai < 5) {  // turetu buti FOR ciklas
    echo 'Ciklas: '.$ciklai.' <br>';
    $ciklai++;
 }


 echo '<br>-------------4--------------<br>';
 for ($i = 1;$i <= 15;$i++){
    echo '<br>';
    echo $i.'-';
    if (rand(0, 10)> 4){
        continue;
    }
    echo $i;
    
  }
  echo 'Ciklo pabaiga';


  echo '<br>-------------4--------------<br>';
  for ($a = 1; $a <= 5; $a++) {
    echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';
    for ($x = 1; $x <= 5; $x++) {
        if ($x == 3) {
            continue 2;
        }
        echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
    }
    echo '<b>********************</b><br>';
 }
 