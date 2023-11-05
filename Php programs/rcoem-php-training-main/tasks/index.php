<?php

require 'Task.php';

$tasks = [
    new Task('install xamp', '2023-10-26'),
    new Task('go through laracasts', '2023-10-23'),
    new Task('learn data types', '2023-10-25'),
];

$tasks[0]->completed = true;
$tasks[2]->completed = true;

echo '<ul>';

foreach ($tasks as $task) {
    echo '<li>';
    if ($task->completed) {
        echo '<strike>';
    }
    echo $task->description;
    echo ' : ';
    echo $task->dueDate;
    if ($task->completed) {
        echo '</strike>';
    }
    echo '</li>';
}

echo '</ul>';