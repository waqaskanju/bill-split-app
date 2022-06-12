<?php
/* This file is for setting connection with database.
Feel free to change it according to your need.
add your hostname, database name and your databaseusername and password.
*/
class Connection
{

    private  static $hostname = 'localhost';
    private  static  $dbname = 'flatdb';
    private  static $username = 'root';
    private  static $password = '';

    public  static $con;
    public  function  __construct()
    {
        self::$con = mysqli_connect(self::$hostname, self::$username, self::$password, self::$dbname);
        return self::$con;
    }
}

$obj = new Connection();
$con = Connection::$con;
