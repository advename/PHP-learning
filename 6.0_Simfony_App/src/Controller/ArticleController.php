<?php

// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response; // component used to create an HTTP response
use Symfony\Component\Routing\Annotation\Route; /* component to write routes inside here as instead in "routes.yaml"
                                                    This is called annotation and needs an extra installation
                                                    --> "composer require annotations"
                                                */
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // component used to specify GET, POST, DELETE, UPDATE requests
use Symfony\Bundle\FrameworkBundle\Controller\Controller; //makes "extends Controller" possible. Makes using twigs template possible

class ArticleController extends Controller{

    //The following comment setup defines the route
    //The function that follows is executed when path matches
    /**
     * @Route("/")
     * @Method({"GET"})
     */

    public function index()
    {

        $articles = ["Article 1", "Article 2"];

        //return new Response("<h1>Hello my friend 2 </h1>");
        return $this->render("articles/index.html.twig", ["articles" => $articles]);
    }

}
