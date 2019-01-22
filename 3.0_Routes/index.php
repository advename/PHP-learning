<?php

//Configs
$config = require "configs/config.php";

//Models
require "core/models/models.php";

// Core/Database
require "core/database/database.php"; //imports Connection and QueryBuilder

//Make connection to database
$pdo = Connection::make($config['database']);

// Make QueryBuilder collaborate with the $pdo connection
$query = new QueryBuilder($pdo);

//Get all data from todos table
$todos = $query->selectAll("todos", "Todo");

//####################
//##### ROUTER #######

require "core/routing/routes.php";
require "core/routing/Router.php";

$router = new Router($routes, $config['basename']); //instantiate the Router with the routes values

require $router->requestHandler($_SERVER["REQUEST_URI"]);

//Views
//Display data inside the viewer/html
