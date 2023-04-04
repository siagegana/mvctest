<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    //Database config
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'http://localhost/testmvc/public');
}
else 
{
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'https://www.yourwebsite.com');

}

define('APP_NAME', "My Website");
define('APP_DESC', "Awesome site");
/**true means show errors */
define('DEBUG', true);