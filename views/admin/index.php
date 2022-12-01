<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Konkurs</title> 
        <?php
      
        include '../../classes/auth.php';
        ?>
</head>
<body>

    <header>
        <h1>Witaj, <?php
        //$this->login = $login;
        
       echo (new Auth())->getName(@$_SESSION['id_user']);
      
        ?>
        </h1>
        <!-- <a href='?action=logout' name='wyloguj'>Wyloguj</a> -->
        <!-- <form method="post">
            <button type="submit" name='wyloguj'>Wyloguj</button>
        -->
            <form method="post">
                <button name="wyloguj">Wyloguj</button>
            </form>
            <?php
            if(isset($_POST['wyloguj'])) {
                // session_unset();
                session_destroy();
                header("location: ../../index.php");
            }
            ?>
            <?php
                if(@$_GET['proces'] == 'wyloguj') {
                    echo 'proces wylogowywania';
                }
            ?>
        </form>
        <img src="logo.png" alt="">
    </header>
    <?php
        
    ?>
</body>
</html>