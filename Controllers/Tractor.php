<?php


namespace Controllers;


class Tractor
{
    public $power;
    static public $typeOfTransport = 'Traktor';


    public function startEngine() {
        echo "Engine start";
    }

    public function stopEngine() {
        echo "Engine stop";
    }

    public function toRide() {
        echo static::$typeOfTransport . " is ride";
    }

}