<?php

//Import
$config = require "config.php"; //require configs
require "core/database/Connection.php"; //require database connection
require "core/database/Get.php";
require "core/database/Post.php";
require "core/database/Delete.php";

//Establish Database connection with post and get requests
$connection = new Connection();
$pdo = $connection->start($config["database"], "todo_app_first_try");
$get = new Get($pdo);
$post = new Post($pdo);
$delete = new Delete($pdo);

//Fetch all data from "todos"
$todos = $get->all("todos");

//Check if title POST requests exsist
if (isset($_POST["title"])) {

    $new_todo = $_POST; // transform associative array into object
    $new_todo["title"] = htmlspecialchars($_POST["title"]);

    $id = $post->addTodo("todos", $new_todo); //add new todo to database and get the returned id
    var_dump($id);
    array_push($todos, (object) ["title" => $new_todo['title'], "id" => $id]); //needed because for direct display, else is the new todo first added after refresh

} 
//Check if it's a GET request with id to delete
elseif (isset($_GET)) {

    var_dump($_GET);

    $delete_todo = htmlspecialchars($_GET["delete_id"]);
    $delete->deleteTodo("todos", $delete_todo); //add new todo to database and get the returned id

} else {
    //do nothing
}

require "views/index.views.php";
