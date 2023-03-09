<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/Patterns/AutoLoader.php');
AutoLoader::autoload();

use Decorator\{AddStrong, AddWorldWord, Hello};
use Factory\HumanFactory;
use Strategy\AscSortStrategy;
use Strategy\Context;
use Strategy\DescSortStrategy;

// Sandbox

// #Decorator
echo '<p><b>1. Decorator</b></p>';
$hello = new Hello();

// case 1
$addWorldWord = new AddWorldWord($hello);
$addStrong = new AddStrong($addWorldWord);
echo '1) ' . $addStrong->operation() . '</br>';

// case 2
$addStrong2 = new AddStrong($hello);
$addWorldWord2 = new AddWorldWord($addStrong2);
echo '2) ' . $addWorldWord2->operation() . '</br>';

// #Factory
echo '<p><b>2. Factory</b></p>';

$humanFactory = new HumanFactory();
$human1 = $humanFactory->create('Ivan', 25);
echo '1) ' . 'name = ' . $human1->getName() . '; age = ' . $human1->getAge() . '</br>';
$human2 = $humanFactory->create('Jason', 21);
echo '2) ' . 'name = ' . $human2->getName() . '; age = ' . $human2->getAge() . '</br>';

// #Strategy
echo '<p><b>3. Strategy</b></p>';
$context = new Context(new AscSortStrategy());
echo 'Default data: <b>' . $context->getDefaultData() . '</b></br>';

// case 1
echo '1) ' . $context->doSomeBusinessLogic() . '</br>';

// case 2
$context->setStrategy(new DescSortStrategy());
echo '2) ' . $context->doSomeBusinessLogic() . '</br>';