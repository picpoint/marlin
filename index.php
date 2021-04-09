<?php

error_reporting(E_ALL);

require __DIR__ . '/autoload.php';






class Car {

    private $color;
    private $typeFuel;
    private $manufacture;
    private $engine;


    public function __construct($color, $typeFuel, $manufacture, $newEngine)
    {
        $this->color = $color;
        $this->typeFuel = $typeFuel;
        $this->manufacture = $manufacture;
        $this->engine = $newEngine;
    }


    public function actionStartEngine() {
        $this->engine->on();
    }


    public function actionStopEngine() {
        $this->engine->off();
    }



}









class Engine {

    public function on() {
        echo "Engine on";
    }

    public function off() {
        echo "Engine off";
    }


}


$engine = new Engine();

$car = new Car('Blue', 'Disel', 'Audi', $engine);
$car->actionStartEngine();
$car->actionStopEngine();