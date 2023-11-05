<?php

require 'Sum/Calculator.php';
require 'Multiply/Calculator.php';

use Sum\Calculator;
use Multiply\Calculator as Mcalculator;

$sum =new Calculator();
$mul =new Mcalculator();
print 'Sum: '.$sum->setData(4,2)->execute();
echo '<br/>';
print 'Product: '.$mul->setData(4,2)->execute();

// print $sum->execute();
// print $mul->execute();