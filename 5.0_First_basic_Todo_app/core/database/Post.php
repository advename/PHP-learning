<?php

class Post
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addTodo($table, $todo)
    {

        //Prepare adding values to database
        $statement = $this->pdo->prepare("INSERT INTO todos (title,due) VALUES (:title, :due)");

        //Add values to database using the $todo associative array.
        //When the execute was successfull, it returns true, else error
        if ($statement->execute($todo)) {
            echo "Successfully added";
            return $this->pdo->lastInsertId(); //return id
        } else {
            $error = $statement->errorInfo();
            echo $error[2];
        }

    }
}
