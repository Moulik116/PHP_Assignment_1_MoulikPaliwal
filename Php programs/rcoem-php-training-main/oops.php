<?php

include 'functions.php';
class Calculator {
    public int $value1;
    public int $value2;
    function __construct(int $value1, int $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }
    
    function sum(): int
    {
        return $this->value1 + $this->value2;
    }

    function multiply(): int
    {
        return $this->value1 * $this->value2;
    }
}

$calcutor = new Calculator(45, 10);

echo $calcutor->sum();
echo '<br />';
echo $calcutor->multiply();