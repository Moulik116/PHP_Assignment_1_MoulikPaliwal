<?php
require 'functions.php';
require 'User.php';
$pdo=connectToDb('user_data'); #connecting to database

#obtaining values from form and validating them
if(isset($_GET['name'])){
    $Name=$_GET['name'];
}
else{
    die("Name cannot be empty!");
}
if(filter_var($_GET['emailid'],FILTER_VALIDATE_EMAIL) && isset($_GET['emailid'])){
    $emailId=$_GET['emailid'];
}
else{
    die("Invalid Email Format/Email Id cannot be empty");
}
if(isset($_GET['gender'])){
$Gender=$_GET['gender'];
}
else{
    die("Gender must be selected!"); 
}
if(isset($_GET['city'])){
    $City=$_GET['city'];
}
else{
    die("City must be selected!"); 
}


#inserting into database
$sql="INSERT IGNORE INTO users(name,emailId,gender,city)
      VALUES('$Name','$emailId','$Gender','$City')";
$statement=$pdo->prepare($sql);
$statement->execute();

$users=selectAll($pdo,'users','User');

require 'form.view.php';