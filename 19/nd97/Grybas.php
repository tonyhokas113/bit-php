<?php

class Grybas {

    private $valgomas, $sukirmijes, $svoris;

    public function __construct()
    {
        $this->valgomas = rand(0, 1) ? true : false;
        $this->sukirmijes = rand(0, 1) ? true : false;
        $this->svoris = rand(5, 45);
        // echo '<h6>Grybas</h6>';
    }

    public function __get($prop)
    {
        return $this->$prop;
    }



}