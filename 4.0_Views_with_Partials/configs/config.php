<?php

return [

    "basename" => "/php-basics/4.0_Views_with_Partials/",

    "database" => [
        "host" => "127.0.0.1",
        "port" => "3306",
        "username" => "root",
        "password" => "", //empty
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // display additional error logs when connection has issues
        ],
    ],

];
