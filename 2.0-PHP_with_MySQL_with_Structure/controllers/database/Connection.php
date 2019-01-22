<?php

class Connection
{
    //Make connection to the database
    public static function make($config)
    {
        //By default, wrap a PDO inside a try-catch statement!
        try {
            return new PDO(
                "mysql:host={$config["host"]};port={$config["port"]};dbname=mytodo", 
                $config["username"], 
                $config["password"],
                $config["options"]
            
            );
            //Connection successfull
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
