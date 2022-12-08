<?php
    session_start();
    class Auth {
        public $login;
        public $pass;
        public $email;
        public $connection;
        public $auth = false;

        public function __construct() {
            $this -> connection = new mysqli('localhost', 'root', '', 'baza');
        }

        public function login($login, $pass) {

            $this -> login = $login;
            $this -> pass = $pass;

            $sql = 'SELECT * FROM `users` WHERE adres_mail = "'.$this -> login.'" AND password = "'.md5($this -> pass).'"';
            $result = ($this -> connection) -> query($sql);
            $item = $result -> fetch_assoc();

            if((@count($item) > 0) && ($item['ID'] > 0)) {

                $this -> auth = true;

                $_SESSION['zalogowany'] = $this -> auth;
                $_SESSION['id_user'] = $item['ID'];

                header('location: ./views/user/Home/index.php');
            } else {
                $this -> auth = false;

                $_SESSION['zalogowany'] = $this -> auth;
            }
        }

        public function rejestracja($login, $email, $pass) {

            $this -> login = $login;
            $this -> email = $email;
            $this -> pass = $pass;

            if((int)$this -> isExist($this -> email) > 0) {

            } else {
                $sql = "INSERT INTO `users`(`nickname`, `adres_mail`, `password`) VALUES('$this->login', '$this->email', '".md5($this->pass)."')";
                ($this -> connection) -> query($sql);
            }
        }

        public function isExist($email) {
            $sql = "SELECT * FROM `users` WHERE `adres_mail` = '$email'";
            $result = ($this -> connection) -> query($sql) -> fetch_all();
            return count($result);
        }

        public function getName($id_user) {
            $sql = "SELECT *  FROM `users` WHERE `ID` = '$id_user'";
            return ($this -> connection) -> query($sql) -> fetch_assoc()['nickname'];
        }

        public function wybor($wybor) {
            $this -> wybor = $wybor;
            return $_SESSION['wybor'];
        }
    }
?>