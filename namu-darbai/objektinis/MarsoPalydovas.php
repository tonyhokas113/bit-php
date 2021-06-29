<?php

class MarsoPalydovas
{
    private $title;
    private static $obj = [];

    public static function kontrole()
    {
        if (count(self::$obj) < 2) {
            if (count(self::$obj) == 1) {
                return self::$obj[] = new self('Fobas');
            } else {
                return self::$obj[] = new self('Deimas');
            }
        }
        return self::$obj[rand(0, count(self::$obj) - 1)];
    }

    private function __construct($title)
    {
        $this->title = $title;
    }
}
