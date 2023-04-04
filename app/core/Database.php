<?php
//
Trait Database
{
    private function connect()
    {
        //Add a string connected and Tell PDO what driver you are using
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        //run a connection
        $con = new PDO($string, DBUSER, DBPASS);
        return $con;
    }

    public function query($query, $data = [])
    {
        //Prepared statements prevent sql injection
        //create a connection
        $con = $this->connect();
        //prepare a statement
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if($check)
        {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result))
            {
                return $result;
            }

        }

        return false;
    }
    public function get_row($query, $data = [])
    {
        //Prepared statements prevent sql injection
        //create a connection
        $con = $this->connect();
        //prepare a statement
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if($check)
        {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result))
            {
                return $result[0];
            }

        }

        return false;
    }
}


