<?php 
class Db { 
    public static $connection;
    public static $_path = 'konkurs2/Konkurs';
    public static $_protocol = "http://";

    public function __construct()
    {
        self::$connection = new mysqli('localhost', 'root', '', 'baza');
        return self::$connection;
    }
    public static function connect() { 
        return self::$connection;
    }
    public static function getLink($url) {
        return  self::$_protocol.$_SERVER['HTTP_HOST'].'/'.self::$_path."/".$url;
    }
}