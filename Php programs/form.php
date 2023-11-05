<?php
include 'functions.php';  //warning is issued if functions is not present
//require 'functions.php';(error) functions file must be present
?>
<?php
// print_r($_POST);
/* echo $_POST['name'];
echo'<br>';
echo $_POST['age'];
echo'<br>';
echo $_POST['Gender'];
echo'<br>';

print_r($_POST); //prints the entire array.
echo'</pre>'; */

// read documentation from php.net
?>
<h1>My name is <?= $_POST['name']?></h1>
<h1>My age is <?= $_POST['age']?></h1>
<h1>Gender is <?=$_POST['Gender']?></h1>
<h1>Subjects:
<?php
    foreach($_POST['subjects'] as $sub){
        echo $sub.' ';
    }
?>
</h1>
<?php
    if($_POST['Gender']=='M'){
        echo 'blue';
    } else{
        echo 'pink';
    }
?>
<?php if($_POST['Gender']=='M'):?>
    blue.
<?php else:?>
    pink.
<?php endif; ?> 
    <?php if(isset($_POST['subjects'])): ?>
    My favorite subjects are:
    <?php
         
        $total=count($_POST['subjects']);
        foreach($_POST['subjects'] as $subject){
            echo $subject.',';
        }
         
        ?>
        <?php endif; ?>

    <?php if(isset($_POST['subjects'])): ?>
    My favorite subjects are:
    <?php
    echo implode(',',$_POST['subjects']);
    ?>
    <?php endif; ?> 
    <br>I live in <?=$_POST['city']; ?>

    