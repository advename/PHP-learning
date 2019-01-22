<?php

class Todo
{

    protected $id;
    protected $title;
    protected $due;

    public function __construct(int $id, string $title, date $due)
    {

        $this->id = $id;
        $this->title = $title;
        $this->due = $due;

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDue()
    {
        return $this->due;
    }
}
