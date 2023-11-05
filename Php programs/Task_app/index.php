<?php
require 'Task.php';
require '../functions.php';
// require 'database/DbConnection.php';
// $pdo=DbConnection::make();

// $tasks=[
//     new Task('t1','2023-10-21'), 
//     new Task('t2','2023-10-22'),
//     new Task('t3','2023-10-23'),
// ];

//$task1= new Task('Hello','2023-10-21'); //yyyy-mm-dd format -- sort easily hota
//$task2 = new Task('World','2023-10-22');
//$task3 = new Task('Hola','2023-10-23');
//dump($task1);
//dump($task2);
//dump($task3);
//dump($tasks);

// $tasks[0]->completed=true;
// $tasks[2]->completed=true;




$pdo=connectToDb('tasks_app');
$tasks=selectAll($pdo,'tasks','Task');



require 'index.view.php';
?>

<!-- echo '<ul>';
foreach($tasks as  $task){
    echo '<li>';
    if ($task->completed){
        echo '<strike>';
    }
    echo $task->description.': '.$task->dueDate.'<br>';
    if ($task->completed){
        echo '</strike>';
    }
    echo '</li>';
}
echo'</ul>'; -->
