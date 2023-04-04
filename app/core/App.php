<?php
class App
{
    private $controller = 'Home';
    private $method = 'index';
    function splitURL()
    {
        //To prevent an error of not finding a URL when one doesn't exist
        $URL = $_GET['url'] ?? 'home';
        //To separate the webpages by / in the URL
        $URL = explode("/", trim ($URL, "/"));
        return $URL;
    }

    function loadController()
    {
        $URL = $this->splitURL();
        /**select controller */
        $filename = "../app/controllers/".ucfirst($URL[0]).".php"; //UCFIRST ensures that we capitalise whatever is in the URL
        //Check if file exists
        if(file_exists($filename))
        {
            require $filename;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        }
        else
        {
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = "_404";

        }

        $controller = new  $this->controller;
        //select method
        if(!empty($URL[1]))
        {
            if(method_exists($controller, $URL[1]))
            {
                $this->method = $URL[1];
                unset($URL[1]);
            }

        }
        //call_user_func_array: 
        call_user_func_array([$controller, $this->method], $URL);
    }

}


