<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,0 initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Konkurs</title>
    <?php 

include 'views/head.php';
?>
</head>
<body>
 <?php 
 if((@$_SESSION['zalogowany'])  != true ) {
 ?>
    <div class="kontener">
      <input type="checkbox" id="flip">
      <div class="zakrywka">
        <div class="przod">
          <img src="logo.png" alt="">
        </div>
      </div>
        <form  method="POST">
        <div class="zawform">
          <div class="logowanie">
            <div class="tytul">Zaloguj</div>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Wprowadź e-mail" name='emaillogin' required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Wprowadź hasło" name='haslologin' required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Zaloguj" name='login'>
              </div>
              <div class="text login-text">Nie masz konta ? <label for="flip">Zarejestruj teraz!</label></div>
            </div>
        </form>
      </div>
        <div class="rejestracja">
          <div class="tytul">Zarejestruj</div>
        <form  method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Wprowadź nazwę" name='nazwarejestracja' required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Wprowadź e-mail" name='emailrejestracja' required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Wprowadź hasło" name='haslorejestracja' required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Zarejestruj" name='rejestracja'>
              </div>
              <div class="text signup-text">Masz już konto ? <label for="flip">Zaloguj teraz!</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
 <?php 
} else{ 
  echo "zalogowany";
 }
?>
</body>  
</html>