<?php

use eftec\bladeone\BladeOne;

class Deneme extends Controller {

    public function index()
    {
        $blade = new BladeOne();

        echo $blade->run("welcome",array("variable1"=>"value1"));
    }

    public function index2()
    {
        echo "deneme index method 2";
    }
}