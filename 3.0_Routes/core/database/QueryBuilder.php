<?php

class QueryBuilder
{
    protected $pdo;

    //Use pdo
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    //Get all data from a table as an object
    public function selectAll($table, $model)
    {
        //Prepare statement (not executed yet)
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        //Execute it
        $statement->execute();

        //return all data as an object
        return $statement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $model);
    }
}
