<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" class="css">
    <?php include '../../../classes/auth.php'; ?>
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
            <!-- <button>zadanie 1</button>
            <button>zadanie 2</button>
            <button>zadanie 3</button>
            <button>dodawanie</button>
            <button>pomoc</button>
            <button>wyloguj</button>
            <button>glowna</button> -->
            <img src="../../../style/house-solid.svg" id="glowna" title="Wróć do strony głównej" alt="glowna" onclick="window.open('./index.php','_self')">
            <p onclick="baroc()">▼ Zadania</p>
            <p> </p>
            <p onclick="baroc1()">Narzędzia ▼</p>
            <img src="../../../style/right-from-bracket-solid.svg" id="logout" title="Wyloguj się" onclick="wyloguj()" alt="Wyloguj się">
        </div>
    </div>
    <div id="podstrona">
        <a href=" <?php echo Db::getLink('views/user/Home/skrypt1.php'); ?>">Zadanie 1</a>
        <a href=" <?php echo Db::getLink('views/user/Home/skrypt2.php'); ?>">Zadanie 2</a>
        <a href=" <?php echo Db::getLink('views/user/Home/skrypt3.php'); ?>">Zadanie 3</a>
    </div>
    <div id="podstrona1">
        <a href=" <?php echo Db::getLink('views/user/DataEdit/dodajslowka.php'); ?>">Dodaj słówka do bazy słów</a>
        <a href=" <?php echo Db::getLink('views/user/Home/help.php'); ?>">Pomoc techniczna</a>
    </div>
    <div class="glowna">
        <div class="kontent">
            <h2>Pytania związane ze stroną prosimy kierować na adres E-MAIL:</h2> <br>
            <a href="mailto:pomoc_angzscku@gmail.com">pomoc_angzscku@gmail.com</a>
        </div>
    </div>
    <div class="hidden">
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