<?php

class Grybas
{
    private $valgomas, $sukirmijes, $svoris;

    public function __construct()
    {
        $this->valgomas = rand(true, false);
        $this->sukirmijes = rand(true, false);
        $this->svoris = rand(5, 45);
    }
    public function __get($prop)
    {
        return $this->$prop;
    }
}
