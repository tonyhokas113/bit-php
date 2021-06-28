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
                return $kiekis;
            } else {
                $this->popieriniaiPinigai += round($kiekis, 2);
                return $kiekis;
            }
        }
    }

    public function skaiciuoti()
    {
        echo 'Piniginėje yra: ' . $this->popieriniaiPinigai + $this->metaliniaiPinigai . ' eur.' . '<br>';
    }
}
