<?php

class Delete
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {

        $this->pdo = $pdo;

    }

    public function deleteTodo($table, $todo_id)
    {

        $statement = $this->pdo->prepare("DELETE FROM {$table} WHERE id = {$todo_id}");

        //Add values to database using the $todo associative array.
        //When the execute was successfull, it returns true, else error
        if ($statement->execute()) {
            echo "Successfully deleted";
        } else {
            $error = $statement->errorInfo();
            echo $error[2];
        }
    }

}
