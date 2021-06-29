<?php

class Tenisininkas2
{
    private $vardas;
    private $kamuoliukas = false;
    private static $tf;
    private static $zaidejas1;
    private static $zaidejas2;

    private function __construct(string $vardas)
    {
        $this->vardas = $vardas;
    }

    public static function zaidejai(string $name)
    {
        if (self::$zaidejas1 == null || self::$zaidejas2 == null) {
            return self::$zaidejas1 ? self::$zaidejas2 = new self($name) : self::$zaidejas1 = new self($name);
        }
        return 'Vienu metu gali žaisti tik 2 žaidėjai!';
    }

    public function arTuriKamuoliuka()
    {
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            return 'Neturim 2 žaidėjų! lol';
        }
        return $this->kamuoliukas ? "$this->vardas turi kamuoliuką.<br>" : "$this->vardas neturi kamuoliuko.<br>";
    }

    public static function zaidimoPradzia()
    {
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            echo 'Tam, kad pradėti žaidimą reikia 2 žmonių!';
            die;
        }
        $random = rand(0, 1);
        $random == 1 ? self::$tf = 0 : self::$tf = 1;
        return $random ? self::$zaidejas1->kamuoliukas = true : self::$zaidejas2->kamuoliukas = true;
    }

    public function perduotiKamuoliuka()
    {
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            echo 'Neturim 2 žaidėjų!';
            die;
        }
        if (self::$tf == 1) {
            self::$zaidejas1->kamuoliukas = true;
            self::$zaidejas2->kamuoliukas = false;
        } else {
            self::$zaidejas2->kamuoliukas = true;
            self::$zaidejas1->kamuoliukas = false;
        }
    }
}
