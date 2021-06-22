<?php

class Kibiras1
{

    protected $akmenuKiekis = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        if (is_integer($kiekis) && $kiekis > 0) {
            $this->akmenuKiekis += $kiekis;
            echo "Akmenys pridėti <br>";
        } else {
            echo 'Prašome įvesti skaičiaus tipo reikšmę, kuri yra didesnė už 0! <br>';
        }
    }

    public function kiekPririnktaAkmenu()
    {
        echo "Akmenų kiekis kibire: $this->akmenuKiekis <br>";
    }
}
