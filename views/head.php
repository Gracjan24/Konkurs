<?php 

include './classes/auth.php';


if(isset($_POST['rejestracja'])) { 
    $auth = (new Auth())->rejestracja($_POST['nazwarejestracja'], $_POST['emailrejestracja'], $_POST['haslorejestracja']);
}
if(isset($_POST['login'])) { 
    $auth = (new Auth())->login($_POST['emaillogin'], $_POST['haslologin']);
}

 