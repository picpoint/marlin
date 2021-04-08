<?php


namespace Controllers;


class VideoCamera
{

    public $manufactured;
    public $size;
    public $color;
    public $weight;
    public $powered;
    public $formatWrite;
    public $bitreit;


    public function actionStartWrite() {
        echo "camera write video";
        echo "<br>";
    }


    public function actionStopWrite() {
        echo "camera stop write";
        echo "<br>";
    }


    public function actionPlayVideo() {
        echo "camera play video";
        echo "<br>";
    }


    public function actionShowParams() {
        echo $this->manufactured;
        echo "<br>";
        echo $this->size;
        echo "<br>";
        echo $this->color;
        echo "<br>";
        echo $this->weight;
        echo "<br>";
        echo $this->powered;
        echo "<br>";
        echo $this->formatWrite;
        echo "<br>";
        echo $this->bitreit;
    }


}