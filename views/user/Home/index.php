<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" class="css">
    <?php @include '../../../classes/auth.php'; ?>
    <?php @include '../../../views/head.php'; ?>
</head>
<body>
    <div class="baner">
        <img src="../../../image/logopasek.png" alt="logo" title="ZSCKU" class="logo">
        <p>Witaj 
            <?php echo (new Auth())->getName(@$_SESSION['id_user']); ?>
            !
        </p>
    </div>
    <div class="navv">
        <div class="nav" id="nav">
            <img src="../../../style/house-solid.svg" id="glowna" title="Wróć do strony głównej" alt="glowna" onclick="window.open('./index.php','_self')">
            <p onclick="baroc()">▼ Zadania</p>
            <p> </p>
            <p onclick="baroc1()">Narzędzia ▼</p>
            <img src="../../../style/right-from-bracket-solid.svg" id="logout" title="Wyloguj się" onclick="wyloguj()" alt="Wyloguj się">
        </div>
    </div>
    <div id="podstrona">
        <a href="../TaskOne/skrypt1.php">Zadanie 1</a>
        <a href="../TaskTwo/skrypt2.php">Zadanie 2</a>
        <a href="../TaskThree/skrypt3.php">Zadanie 3</a>
    </div>
    <div id="podstrona1">
        <a href="../DataEdit/dodajslowka.php">Dodaj słówka do bazy słów</a>
        <a href="./help.php">Pomoc techniczna</a>
    </div>
    <div class="glowna">
        <div class="kontent">
            <form method="post">
                <label for="wybor_tabeli">Wybierz zestaw słownictwa: </label>
                <select name="wybor_tabeli" id="wybor_tabeli">
                    <option value="zawod_it">TI</option>
                    <option value="zawod_kuch">TŻiUG</option>
                    <option value="zawod_te">TE</option>
                    <option value="zawod_mps">TPS</option>
                </select><br>
                <button type="submit" name="zapisz">Zatwierdź zmianę zawodu</button>
            </form>
            <img src="../../../image/homepicture.jpg" alt="home">
        </div>
    </div>
    <div class="hidden">
    <?php
            if(isset($_POST['wyloguj'])) {
                session_destroy();
                header("location: ../../../index.php");
            }
            ?>
            <?php
                if(@$_GET['proces'] == 'wyloguj') {
                    echo 'proces wylogowywania';
                }
            ?>
        <form method="post">   
                <button name="wyloguj" id="guzikwylogowywania"></button>  
        </form>
    </div>
    <script>
        var barstate = false;
        var barstate1= false;
         function baroc() {
        if(barstate == false) {
            document.getElementById("podstrona").style.height="3.5vh";
            barstate = true;
            barstate1= false;
            document.getElementById("podstrona1").style.height="0px";
        }else {
            document.getElementById("podstrona").style.height="0px";
            barstate = false;
        }
    }
    function baroc1() {
        if(barstate1 == false) {
            document.getElementById("podstrona1").style.height="3.5vh";
            barstate1 = true;
            barstate = false;
            document.getElementById("podstrona").style.height="0px";
        }else {
            document.getElementById("podstrona1").style.height="0px";
            barstate1 = false;
        }
    }
    function wyloguj(){
        var buttonik = document.getElementById('guzikwylogowywania')
        buttonik.click();
    }
    </script>
</body>
</html>