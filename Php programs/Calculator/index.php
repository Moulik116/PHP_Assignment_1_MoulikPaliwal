<?php

require 'Sum.php';
require 'Mul.php';

$sum= new Sum($_POST['num1'],$_POST['num2']);
$mul= new Mul($_POST['num1'],$_POST['num2']);

echo 'Sum: '.$sum->calculate();
echo '<br>';
echo 'Product: '.$mul->calculate();
?>