<?php


namespace Controllers;


class ChandelierRemote
{

    public $radiusOfAction;
    public $voltage;
    public $modes;


    public function actionOnLight() {
        echo "on light";
        echo "<br>";
    }


    public function actionOffLight() {
        echo "off light";
        echo "<br>";
    }


    public function actionChangeModes() {
        echo "change modes";
        echo "<br>";
    }


}