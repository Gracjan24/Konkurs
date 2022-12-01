<?php
  session_start();
class Auth { 
    public $login;
    public $pass;
    public $email;
    public $connection; 
    public $auth = false;

    public function __construct()
    {
  
       $this->connection = new mysqli("localhost", "root", "", "baza"); 
    }

    public function login($login, $haslo) { 

       $this->login = $login;
       $this->pass = $haslo;

       $sql  = "SELECT * FROM `users` WHERE adres_mail = '".$this->login."' AND password = '".md5($this->pass)."' ";
        
       
        $result = ($this->connection)->query($sql);
       $item = $result->fetch_assoc();
    
     
    
       if((@count($item) > 0) && ($item['ID'] > 0)) {
        // zalogowany
        $this->auth = true;
        $_SESSION['zalogowany'] = $this->auth;
        // print_r($item['ID']);
        // exit();
        $_SESSION['id_user'] =   $item['ID'];
//    echo $item['ID'];
//    exit(); 
     header("location: ./views/admin/index.php");
       } else{  
        $this->auth = false;
        
        $_SESSION['zalogowany'] = $this->auth;    
        //$_SESSION['id_user'] = 0;
    
       }

    }
    public function rejestracja($login, $email, $haslo) { 
        $this->login = $login;
        $this->email = $email;
        $this->pass = $haslo;
   
        if((int)$this->isExist($this->email) > 0) { 
            // jesli jest user nie rejestruj 
        } else { 
            // w przeciwnym wypadku rejestruij 
            $sql = "INSERT INTO `users`(`nickname`, `adres_mail`, `password`) VALUES('$this->login', '$this->email', '".md5($this->pass)."')";
            ($this->connection)->query($sql);
        }
 
      
    }   
    public function isExist($email) { 
        $sql  = "SELECT *  FROM `users` WHERE `adres_mail` = '$email'";
        $result = ($this->connection)->query($sql)->fetch_all();
      
        return   count($result);
}
    public function getName($id_user) {
 
        $sql  = "SELECT *  FROM `users` WHERE `ID` = '$id_user'";
         return ($this->connection)->query($sql)->fetch_assoc()['nickname'];
        //return  ($this->connection)->query($sql)->fetch_all()['nickname'];
    }
// public function isLogin() {

// }
    // // logowanie
    // if(isset($_POST['login'])) {
    //     $emaillogin = $_POST['emaillogin'];
    //     $haslologin = $_POST['haslologin'];
    //     echo "login";
    //     echo  $emaillogin;
    //     exit();
    // }
    // // rejestracja
    // if(isset($_POST['rejestracja'])) {
    //     $nazwarejestracja = $_POST['nazwarejestracja'];
    //     $emailrejestracja = $_POST['emailrejestracja'];
    //     $haslorejestracja = $_POST['haslorejestracja'];
    //     echo "rej";
    //     echo  $nazwarejestracja;
    //     exit();
    // }
}
  ?>