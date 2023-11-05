<?php

require_once 'Calculator.php';
class Multiply extends Calculator {
    public function calculate(): int
    {
        return $this->value1 * $this->value2;
    }
}