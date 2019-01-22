<?php

class Get
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function all($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    //return all data as an object
    // return $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $model);

}
