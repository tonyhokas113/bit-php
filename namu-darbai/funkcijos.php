<body style="background-color:FFFFE0"> </body>
<?php

######################################### 1

echo '<h3> Uzdavinys nr - 1 </h3>';

function h($text)
{
    return "<h1> $text </h1>";
}
echo h('Labas rytas');

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

// echo '<h3> Uzdavinys nr - 3 </h3>';

// $string = md5(time());
// echo $string;

// $string2 = preg_replace_callback('/\d{1,}/', 'h', $string);
// print_r($string2);

// echo '<hr>';

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
echo modulus(10);

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

for ($i = 0; $i < rand(10, 30); $i++) { 
    $z = rand(10, 20);
    foreach (range(1, $z) as $key => $value) {
        if ($key == $z) {
            $arr{$i}[] = 
        } else {
            $arr{$i}[] = rand(0, 10);
        }
    }
}


// _d($array5, '7');
echo x();
