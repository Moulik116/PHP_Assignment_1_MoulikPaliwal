<?php
require 'functions.php';

function sum(int $value1, int $value2): int
{
   return $value1 + $value2;
}

function multiply(int $value1, int $value2): int
{
    return $value1 * $value2;
}

function calculate()
{
    if (!(is_numeric($_POST['value1']) && is_numeric($_POST['value2']))) {
        echo 'Please put numbers in the input fields.';
        return;
    }
    
    switch ($_POST['operation']) {
        case 'Sum':
            echo 'SUM: ' . sum((integer)$_POST['value1'], (integer)$_POST['value2']);
            break;
        case 'Multiply':
            echo 'PRODUCT: ' . multiply((integer)$_POST['value1'], (integer)$_POST['value2']);
            break;
        default:
            echo 'Unauthorized operation.';
    }
}

if (isset($_POST['value1']) && isset($_POST['value2'])) {
    calculate();
}

require 'calculator.template.php';
?>