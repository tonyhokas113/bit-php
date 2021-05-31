<?php

# 1

// $aktoriausVardas = 'Johnny';
// $aktoriausPavarde = 'Depp';

// echo substr($aktoriausVardas, -3);
// echo '<br>';
// echo substr($aktoriausPavarde, -3);
// echo '<br>';

# 2

// $aktoriausVardas2 = 'Johnny';
// $aktoriausPavarde2 = 'Depp';

// echo strtoupper($aktoriausVardas2);
// echo '<br>';
// echo  strtolower($aktoriausPavarde2);
// echo '<br>';

# 3

// $aktoriausVardas3 = 'Johnny';
// $aktoriausPavarde3 = 'Depp';

// $pirmuRaidziuStringas = substr($aktoriausVardas3, 0, 1) . substr($aktoriausPavarde3, 0, 1);

// echo $pirmuRaidziuStringas;

# 4

// $aktoriausVardas4 = 'Johnny';
// $aktoriausPavarde4 = 'Depp';
// $paskutiniuRaidziuStringas = substr($aktoriausVardas4, -3) . substr($aktoriausPavarde4, -3);

// echo $paskutiniuRaidziuStringas;

# 5

// $stringas = 'An American in Paris';

// $pakeistasStringas = str_ireplace('A', '*', $stringas);

// echo $pakeistasStringas;

# 6

// $stringas2 = 'An American in Paris';

// $raidesPasikartojimas = substr_count($stringas2, 'a') + substr_count($stringas2, 'A');

// echo $raidesPasikartojimas;

# 7

// $stringas3 = 'An American in Paris';

// echo str_ireplace(str_split('aeiyou'), ' ', $stringas3);
// echo '<br>';

// $stringas4 = 'Breakfast at Tiffany\'s';

// echo str_ireplace(str_split('aeiyou'), ' ', $stringas4);
// echo '<br>';

// $stringas5 = '2001: A Space Odyssey';

// echo str_ireplace(str_split('aeiyou'), ' ', $stringas5);
// echo '<br>';

// $stringas6 = 'It\'s a Wonderful Life';

// echo str_ireplace(str_split('aeiyou'), ' ', $stringas6);
// echo '<br>';

# 8

// $sugeneruotasStringas = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
// echo $sugeneruotasStringas;

// echo '<br>';

// echo 'Epizodas: ' . str_ireplace(str_split('a-'), '', substr($sugeneruotasStringas, 18, 7));

# 9

$stringas7 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$ilgesniZodziai = 0;

$atskirtiZodziai = (explode(' ', $stringas7));
