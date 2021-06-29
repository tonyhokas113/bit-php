<?php

const DYDIS = 500;

class Krepsys
{
    public $grybuKiekis, $krepsioSvoris = 0;

    public function eitiGrybauti()
    {
        while ($this->grybuKiekis < DYDIS) {
            $grybas = new Grybas();

            if ($grybas->valgomas == true && $grybas->sukirmijes == false) {
                $this->grybuKiekis++;
                $this->krepsioSvoris += $grybas->svoris;
            }
        };
    }
}
