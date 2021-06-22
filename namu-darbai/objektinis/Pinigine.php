<?php

class Pinigine
{

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis)
    {
        if (is_integer($kiekis) && $kiekis > 0 || is_float($kiekis) && $kiekis > 0) {
            if ($kiekis <= 2) {
                $this->metaliniaiPinigai += round($kiekis, 2);
                echo "Pridėjom $kiekis eur. prie metalinių pinigų.<br>";
            } else {
                $this->popieriniaiPinigai += round($kiekis, 2);
                echo "Pridėjom $kiekis eur. prie popierinių pinigų.<br>";
            }
        } else {
            echo 'Prašome įvesti skaičiaus tipo reikšmę, kuri yra didesnė už 0! <br>';
        }
    }

    public function skaiciuoti()
    {
        echo 'Piniginėje yra: ' . $this->popieriniaiPinigai + $this->metaliniaiPinigai . ' eur.' . '<br>';
    }
}
