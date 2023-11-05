<?php
namespace Sum;

class Calculator{
    public $num1;
    public $num2;

    public function setData(int $num1,int $num2){
        $this->num1=$num1;
        $this->num2=$num2;

        return $this;
    }
    public function execute(){
        return $this->num1+$this->num2;
    }
}