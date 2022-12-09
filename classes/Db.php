<?php 
class Db { 
    public static $connection;

    public function __construct()
    {
        self::$connection = new mysqli('localhost', 'root', '', 'baza');
        return self::$connection;
    }
    public static function connect() { 
        return self::$connection;
    }
}