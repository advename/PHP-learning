<?php 
    $members = [
        "Jeremy" => "jerem@gmail.com",
        "Susan" => "sus@gmail.com",
        "Pedro" => "ped@gmail.com",
        "Jessica" => "jess29@hotmail.com",
        "Eric" => "mtsjbb@yandex.ru",
        "Heinrich" => "hwian@mail.de"
    ];

    $task = [
        "title" => "Clean kitchen",
        "due" => "today",
        "assigned_to" => "Jeffry",
        "completed" => false
    ];

    function dd($variable){
        die(var_dump($variable));
      }

    
// Defining Constructor Name
class Task{

    //Create the object keys using "$protected keyName"
    protected $description;
    protected $completed = false; // -> by default false
    protected $due;
    
    /*
      public function __construct(parameters){} is a function
      that is called by default and takes over whatever parameter is
      passed to the Constructor. The function, however, has to be
      named "__construct" in order to work.
    */
    public function __construct($desc, $date){
      $this->description = $desc; // -> notice that theres no dollar symbol before description
      $this->due = $date; // -> notice that theres no dollar symbol before due
      // When using "$this->", the variable/key does not need a dollar symbol
      }

    /*
      toString is a default function only allowed to return a string and 
      called by echoing the constructor
    */
    public function __toString(){
        return  $this->description; //echo the protected property
    }

    //custom function to return all key/propertie -> values
    public function getData(){
        return (object)[
            "description" =>  $this->description,
            "completed" =>  $this->completed,
            "due" =>  $this->due
        ];
    }
  }
  
  $tasks = array(
    new Task("Buy milk","Tomorrow"),
    new Task("Walk the dog", "Today"),
    new Task("Cook dinner", "Today")
  );
/*
  Each single "new Task" represents an object looking like:
         (object)[
          "description" => "Buy milk",
          "completed" => false,
          "due" => "Tomorrow"
          ];
*/
  dd($tasks[0]->getData()->description); // -> Error
  dd($tasks);
    

require "index.view.php";



