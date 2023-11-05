<?php

$names=['moulik','shantanu','mayank','devesh']; #declaration of array

print_r($names); #prints all elements of array

echo '<ul>';
for($i=0;$i<4;$i++){
    echo '<li>'.$names[$i].'</li>';
}


foreach($names as $value){
    echo '<li>';
    echo $value;
    echo '</li>';
}
foreach($names as $index=> $value){ #to get both index and values.
    echo '<li>';                    #aslo we cannot access only keys.
    echo $index.' '.$value;
    echo '</li>';
}
echo '</ul>';

##$arr2=['moulik',20,95.98,true];
$arr2=['name'=>'moulik','age'=>20,'percentage'=>95.98,'locelatie'=>false]; #key of true will be 10 which is highest numeric value if it is not assigned.
echo '<ul>';
foreach($arr2 as $index=> $value){ 
    echo '<li>';                    
    echo ucfirst($index).'-'.$value; #ucfirst fn is used to capitalize first letter
    echo '</li>';
}

foreach($arr2 as $index=> $value){
    if(is_bool($value))
}
echo '</ul>';

?>

