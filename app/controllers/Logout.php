<?php

class Logout  
{
    use Controller;
    //Always have a function index
    public function index()
    {
        if(!empty($_SESSION['USER']))
            unset($_SESSION['USER']);
            
        redirect('home');
    }

}
