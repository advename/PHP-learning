<?php


return [

    "database" => [
        "host" => "127.0.0.1",
        "port" => "3306",
        "username" => "root",
        "password" => "", //empty
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // display additional error logs when connection has issues
        ]
    ]

];




