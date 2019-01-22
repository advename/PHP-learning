<?php
class Todo{
    private $description;
    private $completed = false;
    private $due;

    // Type hinting for constructor
    public function __construct($desc, $due_date){

        //Type hinting for PHP v5 checking for string
        if(!is_string($desc)){
            throw new InvalidArgumentException("Expected string, received " . gettype($desc));
        }
        if(!is_string($due_date)){
            throw new InvalidArgumentException("Expected string, received " . gettype($due_date));
        }

        $this->description = $desc;
        $this->due = $due_date;
    }

    public function __toString(){
        return "The todo task is: {$this->description}"; // MUST be a string
    }

    // Type hinting for setters

    // Type hinting for PHP v7
    public function setDescription(string $desc){
        $this->description = $desc;
    }
    public function setCompleted($status){
        if(!is_bool($status)){
            throw new Exception("Expected boolean, received " . gettype($status));
        }

        $this->completed = $status;
    }
    public function setDue($date){
        if(!is_string($date)){
            throw new Exception("Expected string, received " . gettype($date));
        }

        $this->due = $date;
    }


    public function getDescription(){
        return $this->description;
    }
    public function getCompleted(){
        return $this->completed;
    }
    public function getDue(){
        return $this->due;
    }
}

$todos = array(new Todo("Buy milk", "Tomorrow"), new Todo("Walk the dog", "Today"), new Todo("Cook dinner", "Today"));

$todos[0]->setDescription(["Milk"]);
//and then add them inside the HTML with foreach loop
?>

<!DOCTYPE html>
<html lang="en">
    <ul>
        <?php foreach($todos as $todo): ?>
            <li> <?= $todo->getDescription() ?> (Completed: <?= $todo->getCompleted() ? "Yes" : "No"; ?>) </li>
        <?php endforeach?>
</html>