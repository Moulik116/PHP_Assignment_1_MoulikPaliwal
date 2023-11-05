<?php
require 'functions.php';

function sum(int $value1,int $value2): int{    //explicitly declaring data type of variable.
    $sum=$value1+$value2;
    return $sum;
}
function mul(int $value1,int $value2): int{    //explicitly declaring data type of variable.
    $mul=$value1*$value2;
    return $mul;
}

print_r($_POST);
echo'<br><br>';

if(isset($_POST['num1']) && $_POST['num2']){
    if(is_numeric($_POST['num1']) && is_numeric($_POST['num2'])){    //data validation using php.
         if($_POST['operation']=="sum") {                                                     
$result=sum((integer)$_POST['num1'],(integer)$_POST['num2']);  //ord()function used to get ascii values.
echo $result;
         }

                                              //(integer) is used for typecasting.
else if($_POST['operation']=="mul"){
$result=mul((integer)$_POST['num1'],(integer)$_POST['num2']);  //ord()function used to get ascii values.
echo $result;                                                  //(integer) is used for typecasting.
    }
} 
} // we can use switch case instead of if else here
echo'<br>';
switch ($_POST['operation']){
    case 'sum':
    $result=sum((integer)$_POST['num1'],(integer)$_POST['num2']);  //ord()function used to get ascii values.
    echo $result;
    break;
    case 'mul':
    $result=mul((integer)$_POST['num1'],(integer)$_POST['num2']);  
    echo $result;
    break;
    default:
        echo'Invalid operation';
}
?>