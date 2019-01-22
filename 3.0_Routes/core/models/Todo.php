<?php

class Todo
{
    private $description;
    private $completed;
    private $due;


    public function __construct(string $description = "", bool $completed = false, string $due = "")
    {
        $this->description = $description;
        $this->completed = $completed;
        $this->due = $due;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCompleted()
    {
        return $this->completed;
    }
}
