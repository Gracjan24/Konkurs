<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Home/style1.css">
    <link rel="stylesheet" href="../Home/style.css" class="css">
    <link rel="stylesheet" href="style2.css">
    <?php include '../../../classes/auth.php'; ?>
</head>
<body>
    <script>
        function dobrze() {
            document.getElementById('ang').style.background = 'green';
            document.getElementById('ang').disabled = true;
            document.getElementById('bad').disabled = true;
            document.getElementById('wrong').disabled = true;
        }
        function bad() {
            document.getElementById('bad').style.background = 'red';
            document.getElementById('ang').disabled = true;
            document.getElementById('bad').disabled = true;
            document.getElementById('wrong').disabled = true;
        }
        function wrong() {
            document.getElementById('wrong').style.background = 'red';
            document.getElementById('ang').disabled = true;
            document.getElementById('bad').disabled = true;
            document.getElementById('wrong').disabled = true;
        }
    </script>
    <div class="baner">
        <img src="../../../image/logopasek.png" alt="logo" title="ZSCKU" class="logo">
        <p>Witaj 
            <?php echo (new Auth())->getName(@$_SESSION['id_user']); ?>
            !
        </p>
    </div>
    <div class="navv">
        <div class="nav" id="nav">
            <img src="../../../style/house-solid.svg" id="glowna" title="Wróć do strony głównej" alt="glowna" onclick="window.open('../Home/index.php','_self')">
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
            <button name="losowanie" class="los">Losuj</button>
        </form>
        <div class="blok">
        <?php
            $tabela = $_COOKIE['wybor'];
            if(isset($_POST['losowanie'])) {
                $conn = mysqli_connect('localhost', 'root', '', 'baza');
                $rand = rand(1,6);
                $zapytanie = "SELECT `pol`, `ang`, `bad`, `wrong` FROM $tabela ORDER BY RAND()";
                $result = mysqli_query($conn, $zapytanie);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['pol'] = $row['pol'];
                        $_SESSION['ang'] = $row['ang'];
                        $_SESSION['bad'] = $row['bad'];
                        $_SESSION['wrong'] = $row['wrong'];
                    }
                }
                echo $_SESSION['pol'];
                echo '<h4>Przetlumacz wyraz na jezyk angielski</h4>';
                $r = rand(1,6);
                if ($r == 1) {
                    echo '<button id="ang" class="answerBlok" name="ang" onclick="dobrze()">'.$_SESSION['ang'].'</button>';
                    echo '<button id="bad" class="answerBlok" name="bad" onclick="bad()">'.$_SESSION['bad'].'</button>';
                    echo '<button id="wrong" class="answerBlok" name="bad" onclick="wrong()">'.$_SESSION['wrong'].'</button>';
                }
                if ($r == 2) {
                    echo '<button id="wrong" class="answerBlok" name="bad" onclick="wrong()">'.$_SESSION['wrong'].'</button>';
                    echo '<button id="ang" class="answerBlok" name="ang" onclick="dobrze()">'.$_SESSION['ang'].'</button>';
                    echo '<button id="bad" class="answerBlok" name="bad" onclick="bad()">'.$_SESSION['bad'].'</button>';
                }
                if ($r == 3) {
                    echo '<button id="bad" class="answerBlok" name="bad" onclick="bad()">'.$_SESSION['bad'].'</button>';
                    echo '<button id="wrong" class="answerBlok" name="bad" onclick="wrong()">'.$_SESSION['wrong'].'</button>';
                    echo '<button id="ang" class="answerBlok" name="ang" onclick="dobrze()">'.$_SESSION['ang'].'</button>';
                    }
                if ($r == 4) {
                    echo '<button id="wrong" class="answerBlok" name="bad" onclick="wrong()">'.$_SESSION['wrong'].'</button>';
                    echo '<button id="bad" class="answerBlok" name="bad" onclick="bad()">'.$_SESSION['bad'].'</button>';
                    echo '<button id="ang" class="answerBlok" name="ang" onclick="dobrze()">'.$_SESSION['ang'].'</button>';
                    }
                if ($r == 5) {
                    echo '<button id="ang" class="answerBlok" name="ang" onclick="dobrze()">'.$_SESSION['ang'].'</button>';
                    echo '<button id="wrong" class="answerBlok" name="bad" onclick="wrong()">'.$_SESSION['wrong'].'</button>';
                    echo '<button id="bad" class="answerBlok" name="bad" onclick="bad()">'.$_SESSION['bad'].'</button>';
                }
                if ($r == 6) {
                    echo '<button id="bad" class="answerBlok" name="bad" onclick="bad()">'.$_SESSION['bad'].'</button>';
                    echo '<button id="ang" class="answerBlok" name="ang" onclick="dobrze()">'.$_SESSION['ang'].'</button>';
                    echo '<button id="wrong" class="answerBlok" name="bad" onclick="wrong()">'.$_SESSION['wrong'].'</button>';
                }
            }
        ?>
        </div>
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