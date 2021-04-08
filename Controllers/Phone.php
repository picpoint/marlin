<?php


namespace Controllers;


class Phone
{

    public $manufacturer;
    public $size;
    public $color;


    public function actionTakeCall() {
        echo "Phone take call";
        echo "<br>";
    }


    public function actionEndCall() {
        echo "Phone end call";
        echo "<br>";
    }


    public function actionShowParams() {
        echo $this->manufacturer;
        echo "<br>";
        echo $this->size;
        echo "<br>";
        echo $this->color;
    }


}