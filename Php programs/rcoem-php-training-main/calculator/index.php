<?php

require 'Sum.php';
require 'Multiply.php';

$sum = new Sum(30, 10);
echo $sum->calculate();
echo '<br>';
$multiply = new Multiply(25, 25);
echo $multiply->calculate();