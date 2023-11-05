<?php
class Task{
    public int $id;
    public string $description;
    public string $due_date;
    public bool $completed_status=false;
    
    // function __construct($description,$dueDate){
    //     $this->description=$description;
    //     $this->dueDate=$dueDate;
    // }
}
?>