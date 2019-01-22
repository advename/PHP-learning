<?php

class Connection
{

    public function start(array $config, string $table_name)
    {
        try {
            return new PDO(
                "mysql:host={$config["db_host"]};port={$config["db_port"]};dbname={$table_name}",
                $config["db_username"],
                $config["db_password"],
                $config["db_options"]
            );
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

}
