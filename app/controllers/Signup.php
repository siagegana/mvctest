<?php

class Signup  
{
    use Controller;
    //Always have a function index
    public function index()
    {
        $data = [];

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $user = new User;
            if($user->validate($_POST))
            {
                $user->insert($_POST);
                redirect('login');
            }
            $data['errors'] = $user->errors;
        }
       
        $this->view('signup', $data);
    }

}
