<?php

use eftec\bladeone\BladeOne;

class Deneme extends Controller {

    public function index()
    {
        $blade = new BladeOne(); // MODE_DEBUG allows to pinpoint troubles.

        echo $blade->run("welcome",array("variable1"=>"value1")); // it calls /views/hello.blade.php
    }

    public function index2()
    {
        echo "deneme index method 2";
    }
}