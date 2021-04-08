<?php


namespace Controllers;


class Table
{

    public $size;
    public $color;
    public $material;


    public function actionShowParams() {
        echo $this->size;
        echo "<br>";
        echo $this->color;
        echo "<br>";
        echo $this->material;
    }

}