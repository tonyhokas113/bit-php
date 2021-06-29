<?php

class Stikline
{
    private $turis, $kiekis = 0;

    public function __construct($turis)
    {
        $this->turis = $turis;
    }

    public function ipilti(int $kiekis)
    {
        if ($kiekis > 0) {
            if (($this->kiekis + $kiekis) > $this->turis) {
                $this->kiekis = $this->turis;
            } else {
                $this->kiekis += $kiekis;
            }
        }
        return;
    }

    public function ispilti()
    {
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;
    }
}
