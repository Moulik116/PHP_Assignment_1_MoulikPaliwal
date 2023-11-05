<?php
require_once 'Calc.php';

class Mul extends Calc{
    public function calculate():int
    {
        return $this->value1*$this->value2;
    } 
}
?>