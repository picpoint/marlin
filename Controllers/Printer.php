<?php


namespace Controllers;


class Printer
{

    private $manufacture;
    private $colorsGamma;
    private $speedPrinting;


    public function __construct($manufacture, $colorGamma, $speedPrinting)
    {
        $this->manufacture = $manufacture;
        $this->colorsGamma = $colorGamma;
        $this->speedPrinting = $speedPrinting;
    }


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



    public function actionChangeSpeedPrinting(string $speedPrinting) {
        $this->speedPrinting = $speedPrinting;
    }


    public function showParams() {
        echo $this->manufacture;
        echo "<br>";
        echo $this->colorsGamma;
        echo "<br>";
        echo $this->speedPrinting;
    }


}