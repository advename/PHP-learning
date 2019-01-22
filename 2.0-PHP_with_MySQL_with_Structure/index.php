<?php

//Configs
$config = require "configs/config.php";

//Models
require "models/Todo.php";

//Controllers
require "controllers/database/Connection.php";
require "controllers/database/QueryBuilder.php";


//Make connection to database
$pdo = Connection::make($config['database']);

// Make QueryBuilder collaborate with the $pdo connection
$query = new QueryBuilder($pdo);

//Get all data from todos table
$todos = $query->selectAll("todos", "Todo");


//Views
//Display data inside the viewer/html
require "views/index.view.php";