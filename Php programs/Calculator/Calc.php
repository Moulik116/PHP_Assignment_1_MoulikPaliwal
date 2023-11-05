<?php
abstract class Calc{
    public int $value1;
    public int $value2;
    function __construct($value1,$value2){
        $this->value1=$value1;
        $this->value2=$value2;
    }

    abstract public function calculate():int;
}

