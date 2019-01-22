<?php

    // A class makes it easier to write Router->requestHanlder("contact")
    class Router{

        //routes paths and to be served files imported from routes.php
        protected $routes = [];

        //Only required if project is located in a subfolder
        protected $basename;

        //Fill $routes and $basename
        public function __construct(array $routes, string $basename = ""){

            $this->routes = $routes;
            $this->basename = $basename;

        }

        // Handle path requests and return the associated file
        public function requestHandler($uri){

            // Apply basename to $uri
            $requestedUri = str_replace($this->basename, "", $uri); //remove basename from requested uri
            trim($requestedUri,"/"); //remove slash from start and end of requested uri

            //First check if the requested path exists
            if(array_key_exists($requestedUri, $this->routes)){
               
                return $this->routes[$requestedUri]; //if yes, return the associated file

            }
            else{

                throw new Exception("No routes found for this URI"); //else display error

            }

        }

    }