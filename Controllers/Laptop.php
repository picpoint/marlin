<?php

namespace Controllers;


class Laptop
{

    public $manufacture;
    public $cpu;
    public $ram;
    public $vga;


    public function starting() {
        echo "OS is starting";
        echo "<br>";
    }


    public function ending() {
        echo "OS is ending";
        echo "<br>";
    }


    public function showVideo() {
        echo "show Movie";
        echo "<br>";
    }

    public function playMusic() {
        echo "play music";
        echo "<br>";
    }


}