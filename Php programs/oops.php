<?php
include 'functions.php';
//PascalCase
//camelCase
//snake_case
//lowercase
//UPPERCASE
//this-is-kebab-case
class Calculator{
    public int $num1;
    public int $num2;
    function __construct($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;
    }
    function sum(): int{
        return $this->num1+$this->num2;
    }

    function mul(): int{    
    return $this->num1*$this->num2;
    }
}
$calculator=new Calculator(10,20);

//dump($calculator);
echo'<br>';
echo $calculator->sum();
echo'<br>';
echo $calculator->mul();

?>