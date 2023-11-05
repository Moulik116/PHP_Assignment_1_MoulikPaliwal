<?php

echo 'hello world <br>'; //for pritnting string.

//$greeting= "Hola";
//$greeting= 'Hola'; //creating a string variable.
//$var=123;
//$var1=123.23;
//$var2= false;
$greeting= 123;
$a='hola';
$b=123.5;
$c=false;

var_dump($greeting);
echo'<br><br>';
var_dump($a);
echo'<br>';
var_dump($b);
echo'<br>';
var_dump($c);

$greet="hello world";
echo"<h1> $greet </h1>";
?>
<h1>
    <?php echo $greet; ?>
</h1>

<?php

$greeting="hello";
$place="world";
echo $greeting.' '.$place; # dot is concatenation operator.

