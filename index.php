<?php


//error show
require __DIR__ . '/displayerrors.php';
//
require __DIR__ . '/config.php';
require __DIR__ . '/helpers.php';
require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/route.php';
require __DIR__ . '/controller/controller.php';
require __DIR__ . '/database/db.php';


//for blade it is necessary :)
use eftec\bladeone\BladeOne;
use eftec\bladeone\BladeOneCache;
//



Route::run('/','deneme@index');

Route::run('/deneme2','deneme@index2');

Route::run('/post','deneme@post','post');


