<?php


namespace Controllers;


class Batery
{

    public $size;
    public $voltage;
    public $capacity;


    public function actionShowParams() {
        echo $this->size;
        echo "<br>";
        echo $this->voltage;
        echo "<br>";
        echo $this->capacity;
    }


}