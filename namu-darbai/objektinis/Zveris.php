<?php

class Zveris extends Miskas
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function papasakok()
    {
        echo "Aš esu žvėris vardu $this->name.";
        parent::papasakok();
    }

    public function paleisk()
    {
        $this->papasakok();
    }
}
