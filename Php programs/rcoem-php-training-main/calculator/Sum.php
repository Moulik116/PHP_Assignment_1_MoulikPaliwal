<?php

require_once 'Calculator.php';

class Sum extends Calculator {
    public function calculate(): int
    {
        return $this->value1 + $this->value2;
    }
}