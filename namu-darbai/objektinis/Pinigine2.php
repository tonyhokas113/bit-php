<?php

class Pinigine2
{
    private $popieriniaiPinigai, $metaliniaiPinigai, $popieriniuKiekis, $metaliniuKiekis = 0;

    public function ideti($kiekis)
    {
        if (is_integer($kiekis) && $kiekis > 0 || is_float($kiekis) && $kiekis > 0) {
            if ($kiekis <= 2) {
                $this->metaliniaiPinigai += round($kiekis, 2);
                $this->metaliniuKiekis++;
                return $kiekis;
            } else {
                $this->popieriniaiPinigai += round($kiekis, 2);
                $this->popieriniuKiekis++;
                return $kiekis;
            }
        }
    }

    public function skaiciuoti()
    {
        echo 'Piniginėje yra: ' . $this->popieriniaiPinigai + $this->metaliniaiPinigai . ' eur.' . '<br>';
    }

    public function monetos()
    {
        return "Monetos piniginėje: $this->metaliniuKiekis.<br>";
    }

    public function banknotai()
    {
        return "Banknotai piniginėje: $this->popieriniuKiekis.<br>";
    }
}
