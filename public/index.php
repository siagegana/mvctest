<?php

//In every system that is going to have a login and signout, we need a session
session_start();
require "../app/core/init.php";
if(DEBUG)
{
    ini_set('display_errors', 1);

}
else
{
    ini_set('display_errors', 0);
}
//Instantiate a class in order to use it
$app = new App;
$app->loadController();