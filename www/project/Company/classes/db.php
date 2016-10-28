<?php
define('SERVER', 'localhost');
define('USERNAME', 'localhost');
define('PASSWORD', 'root');
define('DATABASE', 'job');

class DB {
    function __construct(){
        $connection = @mysql_connect(USERNAME, PASSWORD) or die('Connection error -> ' . mysql_error());
        mysql_select_db(DATABASE, $connection) or die('Database error -> ' . mysql_error());
    }
}
?>