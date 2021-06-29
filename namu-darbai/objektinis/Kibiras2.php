<?php

class Kibiras2
{
    protected $akmenuKiekis = 0;
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        if (is_integer($kiekis) && $kiekis > 0) {
            $this->akmenuKiekis += $kiekis;
            self::$akmenuKiekisVisuoseKibiruose += $kiekis;
            return;
        }
    }

    public function kiekPririnktaAkmenu()
    {
        return "$this->akmenuKiekis";
    }

    public static function getAkmenuKiekisVisuoseKibiruose()
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }
}
