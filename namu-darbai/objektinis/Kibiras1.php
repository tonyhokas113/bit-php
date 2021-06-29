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
            return;
        }
    }

    public function kiekPririnktaAkmenu()
    {
        return "$this->akmenuKiekis";
    }
}
