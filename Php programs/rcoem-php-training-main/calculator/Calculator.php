<?php

abstract class Calculator {
    public int $value1;
    public int $value2;
    function __construct(int $value1, int $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    abstract public function calculate(): int;
}