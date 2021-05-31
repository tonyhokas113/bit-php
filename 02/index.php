<?php

$trecias = 5;
$ketvirtas = $trecias + 5;

echo $ketvirtas;
echo "<br>";

// Jeigu pliusai priekyje tai pirma padidinam reiksme vienetu ir po to atspausdinam
// Jeigu pliusai gale tai pirma atspausdinam reiksme o po to ja padidiname
echo $trecias++; // ++$trecias; = 6;
echo "<br>";
echo $trecias;
echo "<br>";

$sk = 1;

$sk = 1;

echo ++$sk * $sk++;
// 2 * 2

echo $sk++ * $sk++;
// 1 * 2

echo $sk++ * ++$sk;
// 1 * 3

echo ++$sk * ++$sk;
// 2 * 3


$ketvirtas = $ketvirtas + 5;
$ketvirtas += 5;

echo "<br>";
echo $ketvirtas;
echo "<br>";

$pirmas = 'bla bla';
$antras = 'ku kū';
$trecias = $pirmas . $antras; // Stringu sudejime naudojame ne + o .

echo "<br>";
echo $trecias;

// Jei naudojame stringa be kintamuju reikia naudoti viengubas kabutes.
// Jei naudojame stringa su kintamaisiais ar simboliais (\n) reikia dvigubu kabuciu.
// \n kelia teksta i kita eilute, Narsykleje to nerodo.
$pirmas = 'bla bla';
$antras = "ku $pirmas kū";

echo "<br>";

$pirmas = 'antras';
$antras = 'bla bla';
echo $$pirmas;

echo "<br>";

// print_r naudojamas atspausdinti masyvus, objektus.
// var_dump atspausdina kintamojo duomenis.

var_dump('ku ku');

// string(5) "ku ku" atspausdina tipa, stringo ilgi (baitais) ir reiksme.

echo "<br>";
echo '<hr>';

echo var_dump(0 == 0);

echo "<br>";


// Palyginimo operatorius <=> (spaceship) naudojamas sortinti 
echo 1 <=> 1; // 0

echo "<br>";

var_dump('1' == '01'); // 1 == 1 -> true

echo "<br>";

$drambliai = 2;
if ($drambliai) {
    echo 'Yra dramblių';
}

echo "<br>";

echo $rezultatas = (4 > 1) ? 'Yes' : 'No';

//match
