<?php
//loads the class you want that you cannot find
spl_autoload_register(function($classname)
{
    require $filename =  "../app/models/".ucfirst($classname).".php";
});
//Every file you add to the core folder, you must include here
require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';