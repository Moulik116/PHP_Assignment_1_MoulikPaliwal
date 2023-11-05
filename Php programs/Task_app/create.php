<?php

require '../functions.php';

$pdo=connectToDb('tasks_app');

$description='my new task.';
$due_date='2023-11-01';
$completed_status=0;

$sql="INSERT INTO tasks(description,due_date,completed_status)
      VALUES('$description','$due_date',$completed_status)";
$statement=$pdo->prepare($sql);
$statement->execute();

//alternative option to insert
// $sql1="INSERT INTO tasks SET description='$description',due_date='$due_date',completed_status=$completed_status";
// $statement=$pdo->prepare($sql1);
// $statement->execute();

//var_dump($sql);