<?php

# 1

echo '<h3> 1. </h3>';

$aktoriausVardas = 'Johnny';
$aktoriausPavarde = 'Depp';

echo strlen($aktoriausVardas) > strlen($aktoriausPavarde) ? $aktoriausPavarde : $aktoriausVardas;
echo '<br>';


# 2

echo '<h3> 2. </h3>';

$aktoriausVardas2 = 'Johnny';
$aktoriausPavarde2 = 'Depp';

echo strtoupper($aktoriausVardas2);
echo '<br>';
echo  strtolower($aktoriausPavarde2);
echo '<br>';

echo '<hr>';

# 3

echo '<h3> 3. </h3>';

$aktoriausVardas3 = 'Johnny';
$aktoriausPavarde3 = 'Depp';

$pirmuRaidziuStringas = substr($aktoriausVardas3, 0, 1) . substr($aktoriausPavarde3, 0, 1);

echo $pirmuRaidziuStringas;

echo '<hr>';


# 4

echo '<h3> 4. </h3>';

$aktoriausVardas4 = 'Johnny';
$aktoriausPavarde4 = 'Depp';
$paskutiniuRaidziuStringas = substr($aktoriausVardas4, -3) . substr($aktoriausPavarde4, -3);

echo $paskutiniuRaidziuStringas;

//---------------------------------------------------------------------------------------

// v2

// $name = 'Leonardo';

// $surname = 'DaVincio';

// $letters = substr($name, (strlen($name) - 3), 3) . substr($surname, (strlen($surname) - 3), 3);

// echo $letters;

echo '<hr>';

# 5

echo '<h3> 5. </h3>';

$stringas = 'An American in Paris';

$pakeistasStringas = str_ireplace('A', '*', $stringas);

echo $pakeistasStringas;

echo '<hr>';

# 6

echo '<h3> 6. </h3>';

$stringas2 = 'An American in Paris';

$raidesPasikartojimas = substr_count($stringas2, 'a') + substr_count($stringas2, 'A');

echo $raidesPasikartojimas;

//---------------------------------------------------------------------------------------

// v2 

// $pavadinimas = 'An American in Paris';
// echo substr_count(strtolower($pavadinimas), 'a');

echo '<hr>';

# 7

echo '<h3> 7. </h3>';

$stringas3 = 'An American in Paris';

echo str_ireplace(str_split('aeiyou'), ' ', $stringas3);
echo '<br>';

$stringas4 = 'Breakfast at Tiffany\'s';

echo str_ireplace(str_split('aeiyou'), ' ', $stringas4);
echo '<br>';

$stringas5 = '2001: A Space Odyssey';

echo str_ireplace(str_split('aeiyou'), ' ', $stringas5);
echo '<br>';

$stringas6 = 'It\'s a Wonderful Life';

echo str_ireplace(str_split('aeiyou'), ' ', $stringas6);
echo '<br>';

echo '<hr>';

# 8

echo '<h3> 8. </h3>';

$sugeneruotasStringas = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
echo $sugeneruotasStringas;

echo '<br>';

echo 'Epizodas: ' . str_ireplace(str_split('a-'), '', substr($sugeneruotasStringas, 18, 7));

//---------------------------------------------------------------------------------------

// v2 

// $name = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';

// echo $name . '<br>';

// echo 'Episode is: ' . substr(trim(substr($name, 18)), 0, 1);

//---------------------------------------------------------------------------------------

// $starwars = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';

// echo preg_replace('/\D/', '', $starwars);

//---------------------------------------------------------------------------------------

// $string = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';

// preg_match_all('!\d+!', $string, $episodeNumber);

// echo $string . '<br>Episode Nr. ' . $episodeNumber[0][0] . '.';

//---------------------------------------------------------------------------------------

// echo preg_replace('/[^0-9]/', '', $string);

//---------------------------------------------------------------------------------------

// $string = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';

// echo 'Epizodo nr. ' . preg_replace('/[^0-9]/', '', $string);

//---------------------------------------------------------------------------------------

echo '<hr>';

# 9

echo '<h3> 9. </h3>';

$stringas7 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$ilgesniZodziai = 0;

$atskirtiZodziai = explode(' ', $stringas7);

for ($i = 0; $i < count($atskirtiZodziai); $i++) {
    if (iconv_strlen($atskirtiZodziai[$i]) <= 5) {
        $ilgesniZodziai++;
    }
}

echo "<b>$ilgesniZodziai</b>" . '<br>';

$ilgesniZodziai = 0;

$stringas8 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$atskirtiZodziai2 = (explode(' ', $stringas8));

for ($i = 0; $i < count($atskirtiZodziai2); $i++) {
    if (iconv_strlen($atskirtiZodziai2[$i]) <= 5) {
        $ilgesniZodziai++;
    }
}

echo "<b>$ilgesniZodziai</b>";

//---------------------------------------------------------------------------------------

// v2

// $string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale.';



// echo $string2;

// echo '<br>';
// echo '<br>';



// $words = explode(' ', $string2);



// $counter = 0;

// for ($i = 0; $i < count($words); $i++) {

//     if (mb_strlen($words[$i], 'UTF-8') <= 5) {

//         $counter++;
//     }
// }

// echo "Žodžių, trumpenių arba lygių nei 5 raidės skaičius: $counter";

echo '<hr>';

# 10

echo '<h3> 10. </h3>';

$raides = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3);
echo "<b>$raides</b>";

//---------------------------------------------------------------------------------------

// v2

// $randomStringChars = str_split('abcdefghijklmnopqrstuvwxyz' . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');

// shuffle($randomStringChars);

// $rand = '';

// foreach (array_rand($randomStringChars, 3) as $k) $rand .= $randomStringChars[$k];

// echo 'Atsitiktiniai 3 lotyniski simboliai:<br>';

// echo $rand;

//---------------------------------------------------------------------------------------

// echo chr(rand(97, 122)) . chr(rand(97, 122)) . chr(rand(97, 122));

//---------------------------------------------------------------------------------------

// $characters = range('a', 'z');

// $string = implode($characters);



// echo "Full ABC string: $string";

// echo '<br>';



// $randomString = substr(str_shuffle($string), 0, 3);

// echo $randomString;


echo '<hr>';



# 11

echo '<h3> 11. </h3>';

$string1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$words1 = explode(' ', $string1);
$words2 = explode(' ', $string2);

echo '<br>';

$array = [];
$array2 = [];
$randomString = '';

for ($i = 0; $i < 5; $i++) {
    $add = true;
    $randomNr = rand(0, str_word_count($string1) - 1);
    array_push($array, $randomNr);

    if (count($array) > 1) {
        for ($j = 0; $j < count($array) - 1; $j++) {
            if ($array[$j] == $randomNr) {
                $add = false;
                break;
            }
        }
    }
    $add == true ? $randomString .= $words1[$randomNr] . ' ' : $i--;
}

for ($i = 0; $i < 5; $i++) {
    $add2 = true;
    $randomNr2 = rand(0, str_word_count($string2) - 2);
    array_push($array2, $randomNr2);

    if (count($array2) > 1) {
        for ($j = 0; $j < count($array2) - 1; $j++) {
            if ($array2[$j] == $randomNr2) {
                $add2 = false;
                break;
            }
        }
    }
    $add2 == true ? $randomString .= $words2[$randomNr2] . ' ' : $i--;
}

echo "<b>$randomString</b>";

// -------------------------------------------------------------------

// v2 

// Papildomas.
// 11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų
// žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai
// neturi kartotis. (reikės masyvo)

// $pirmas = preg_replace('/[.,]/', '', $pirmas);
// $antras = preg_replace('/[,.]/', '', $antras);
// $string = array_merge(explode(" ", $pirmas), explode(" ", $antras));
// $kiek = count($string);
// $random = [];
// while (count($random) < 10) {
//     array_push($random, $string[rand(0, $kiek - 1)]);
//     $random = array_unique($random);
// }
// print_r($random);
