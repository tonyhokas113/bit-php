<?php

$trecias = 5;
$ketvirtas = $trecias % 3;


echo $ketvirtas;
echo '<br>';

echo ++$trecias;
echo '<br>';
echo $trecias;
echo '<br>';

$sk = 1;


echo ++$sk * $sk++;
// 2 * 2


echo $sk++ * $sk++;
// 1 * 2


echo $sk++ * ++$sk;
// 1 * 3


echo ++$sk * ++$sk;
// 2 * 3

// $ketvirtas = $ketvirtas + 5;
// $ketvirtas += 5;
$ketvirtas += 5;

echo '<br>';
echo $ketvirtas;
echo '<br>';


$pirmas = 'bla bla';
$antras = 'ku kū';
$trecias = $pirmas .' '. $antras;

echo '<br>';


echo $trecias;


$pirmas = 'bla bla';
$antras = "ku kū \n\n\n\n\n\n\n\n\n\n";


echo '<br>';
echo $antras;
echo $trecias;


$pirmas = 'antras';
$antras = 'bla_bla';


$bla_bla = 'Valio!';

echo '<br>';echo '<br><hr>';echo '<br><pre>';

echo $$$pirmas;
echo '<br>';

var_dump('裡');
var_dump(0 <=> 8);


var_dump(22 == '22'); // 1 == 1 -> true

echo '<br>';

$drambliai = 0;
if ($drambliai) {
    echo 'Yra dramblių';
}
echo 'Yra dramblių';


echo '<br>';

$rezultatas = (false) ? 'A' : ( (true) ? 'B' : 'C' ); // $rezultatas  yra 


echo $rezultatas;

echo '<br>';

unset($rezultatas);

// $rezultatas = null;

var_dump(isset($rezultatas));

// echo $rezultatas;
echo '<br>';

$paukstis = 'Varna';


echo $paukstis ?? 'Zyle';

$c = null;
$d = null;

echo '<br>';

echo ($c ?? 5) * ($d ?? 5);









