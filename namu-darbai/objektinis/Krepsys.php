<?php


class Krepsys
{
    const DYDIS = 500;
    public $grybuKiekis, $krepsioSvoris = 0;

    public function eitiGrybauti()
    {
        while ($this->krepsioSvoris < Krepsys::DYDIS) {
            $grybas = new Grybas();

            if ($grybas->valgomas == true && $grybas->sukirmijes == false) {
                $this->grybuKiekis++;
                $this->krepsioSvoris += $grybas->svoris;
            }
        };
    }
}
