<?php

class Kibiras1 {

    protected $akmenuKiekis = 0;
    protected static $visasAkmenuKiekis = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
        self::$visasAkmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        }
        $this->akmenuKiekis+= $kiekis;
        self::$visasAkmenuKiekis+= $kiekis;
    }

    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }

    public static function kiekVisoPririnktaAkmenu()
    {
        return self::$visasAkmenuKiekis;
    }
}