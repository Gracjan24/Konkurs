<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style/styleHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Konkurs</title> 
        <?php
      
        include '../../../classes/auth.php';
        ?>
</head>
<body>
<div class="pasek">
    <img src="../../../image/logo.png" alt="logo" class="logo">
    <?php echo '<h5>Witaj,'. (new Auth())->getName(@$_SESSION['id_user']).'</h5>'; ?>
    <img src="../../../style/bars-solid.svg" class="menu" alt="icon" onclick="baroc()">
    <img src="../../../style/right-from-bracket-solid.svg" class="wyloguj" alt="Wyloguj" onclick="wyloguj()">
        </div>
       
        <!-- <a href='?action=logout' name='wyloguj'>Wyloguj</a> -->
        <!-- <form method="post">
            <button type="submit" name='wyloguj'>Wyloguj</button>
        -->
            <?php
            if(isset($_POST['wyloguj'])) {
                // session_unset();
                session_destroy();
                header("location: ../../../index.php");
            }
            ?>
            <?php
                if(@$_GET['proces'] == 'wyloguj') {
                    echo 'proces wylogowywania';
                }
            ?>
        </form>
        <div class="hidden">
        <form method="post">   
                <button name="wyloguj" id="guzikwylogowywania"></button>  
        </form>
        </div>
        <div class="main">
                <h1>Kalgon</h1>
    </div>
    <?php
        
    ?>
    <div class="bar" id="bar">
        <!-- <a href="javascript:void(0)" class="cbar" onclick="closebar()">&times</a> -->
        <a href="./strona.php">Zadanie 1</a>
        <a href="./zad2.php">Zadanie 2</a>
        <a href="./zad3.php">Zadanie 3</a>
        <hr>
        <a onclick="otworz()">Narzędzia zaawansowane</a>
            <span style="visibility: hidden;" id="otworzcontent">
                <a href="./dodajslowka.php">Dodaj słówka do bazy słów</a>
                <a href="./help.php">Pomoc techniczna</a>
            </span>
    </div>
    <script>
        var barstate = false;
        var advstate = false;
    function baroc() {
        if(barstate == false) {
            document.getElementById("bar").style.width="250px";
            barstate = true;
        }else {
            document.getElementById("bar").style.width="0px";
            barstate = false;
            document.getElementById("otworzcontent").style.visibility = "hidden";
            advstate = false;
        }
    }
    function wyloguj(){
        var buttonik = document.getElementById('guzikwylogowywania')
        buttonik.click();
    }
    function otworz(){
        if(advstate == false) {
            document.getElementById("otworzcontent").style.visibility = "visible";
            advstate = true;
        }else {
            document.getElementById("otworzcontent").style.visibility = "hidden";
            advstate = false;    
        }
    }
    </script>
</body>
</html>