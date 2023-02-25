<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/Patterns/AutoLoader.php');
AutoLoader::autoload();

use Decorator\{AddStrong, AddWorldWord, Hello};

// Sandbox

// Decorator
echo '<b>1. Decorator</b></br>';
$hello = new Hello();

// case 1
$addWorldWord = new AddWorldWord($hello);
$addStrong = new AddStrong($addWorldWord);
echo 'case 1: ' . $addStrong->operation() . '</br>';

// case 2
$addStrong2 = new AddStrong($hello);
$addWorldWord2 = new AddWorldWord($addStrong2);
echo 'case 2: ' . $addWorldWord2->operation() . '</br>';