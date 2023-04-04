<?php

class Home  
{
    use Controller;
    //Always have a function index
    public function index()
    {
        $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
        $this->view('home', $data);
    }

}
