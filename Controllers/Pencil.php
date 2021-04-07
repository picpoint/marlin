<?php


namespace Controllers;


class Pencil
{

    public $manufacture;
    public $color;
    public $long;


    public function actionDraw() {
        echo "pencil draw";
        echo "<br>";
    }

    public function showParams() {
        echo $this->manufacture;
        echo "<br>";
        echo $this->color;
        echo "<br>";
        echo $this->long;
    }

}