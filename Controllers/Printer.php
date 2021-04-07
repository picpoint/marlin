<?php


namespace Controllers;


class Printer
{

    public $manufacture;
    public $colorsGamma;
    public $speedPrinting;


    public function on() {
        echo "printer on";
        echo "<br>";
    }

    public function off() {
        echo "printer off";
        echo "<br>";
    }

    public function printing() {
        echo "printer is printing $this->speedPrinting lists in minuts";
        echo "<br>";
    }

}