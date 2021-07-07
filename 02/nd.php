<?php

// Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Jonas surenka taškų kiekį nuo 5 iki 25. Išvesti žaidėjų vardus su taškų kiekiu ir
//  “Laimėjo: laimėtojo vardas”;
// Taškų kiekį generuokite funkcija rand();


$jonas = rand(5, 25);
$petras = rand(10, 20);

echo "Jonas: $jonas - Petras: $petras";

if ($jonas > $petras) {
    echo '<h1>Jonai, Jonai!</h1>';
}
elseif ($jonas < $petras) {
    echo '<h1>Valio Petrui!</h1>';
}
else {
    echo '<h1>Niekam ne valio!</h1>';
}