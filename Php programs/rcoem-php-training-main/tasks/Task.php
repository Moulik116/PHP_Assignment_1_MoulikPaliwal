<?php

class Task {
    
    public string $description;
    
    public string $dueDate;
    
    public bool $completed = false;

    public function __construct(string $description, string $dueDate)
    {
        $this->description = $description;
        $this->dueDate = $dueDate;
    }
}