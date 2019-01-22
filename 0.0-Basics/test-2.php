<?php
    //Function to echo the task description with type hinting
    function echoTask(string $description){
        echo "The task for today is: {$description}";
    }

    echoTask("Buy milk"); // string -> no error
    echoTask(["Buy Milk"]); // array -> throws error: "Uncaught TypeError: Argument 1 passed to echoTask() must be of the type string, array given..."
    echoTask(4); // float -> throws error: "Uncaught TypeError: Argument 1 passed to echoTask() must be of the type string, integer given..."

?>