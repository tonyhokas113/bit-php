<head>
    <style>
        .bebras {
            border: 1px dotted blue;
            display: inline-block;
            width: 100px;
            height: 120px;
            padding: 10px;
            word-break: break-all;
        }
    </style>
</head>

<body style="background-color:silver"> </body>

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

echo '<h3> 4. </h3>';

$x = '';

for ($i = 0; $i < 100; $i++) {
    $x .= '*';
}

echo "<div class = 'bebras'> $x </div>";

// echo "<span class = 'bebras'> * </span>";
