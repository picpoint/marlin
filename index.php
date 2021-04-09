<?php

error_reporting(E_ALL);

require __DIR__ . '/autoload.php';


interface EngineInterface {
    public function on();
    public function off();
}



class Car {

    protected $color;
    protected $manufacture;
    protected $typeFuel;
    protected $dvig;
    protected $brk;


    public function __construct($color, $manufacture, $typeFuel, EngineInterface $dvig, $brk)
    {
        $this->color = $color;
        $this->manufacture = $manufacture;
        $this->typeFuel = $typeFuel;
        $this->engine = $dvig;
        $this->brakes = $brk;
    }


    public function actionStartEngine() {
        $this->engine->on();
    }


    public function actionStopEngine() {
        $this->engine->off();
    }


    public function actionWorkBrakes() {
        $this->brakes->on();
    }

}



class Engine implements EngineInterface {

    public function on() {
        echo "Engine on";
        echo "<br>";
    }


    public function off() {
        echo "Engine off";
        echo "<br>";
    }

}


class OtherEngine implements EngineInterface {

    public function on() {
        echo "Other Engine on";
        echo "<br>";
    }


    public function off() {
        echo "Other Engine off";
        echo "<br>";
    }

}



class Brakes {

    public function on() {
        echo "Brakes is brake";
        echo "<br>";
    }


    public function off() {
        echo "Brakes off";
    }

}




$dvig = new Engine();
$dvig2 = new OtherEngine();
$brk = new Brakes();

$car = new Car('Cyan', 'Hummer', 'Disel', $dvig, $brk);


$car->actionStartEngine();
$car->actionStopEngine();
$car->actionWorkBrakes();
