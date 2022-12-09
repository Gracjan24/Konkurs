<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Home/style1.css" class="css">
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
            <img src="../../../style/house-solid.svg" id="glowna" title="Wróć do strony głównej" alt="glowna" onclick="window.open('../Home/index.php','_self')">
            <p onclick="baroc()">▼ Zadania</p>
            <p> </p>
            <p onclick="baroc1()">Narzędzia ▼</p>
            <img src="../../../style/right-from-bracket-solid.svg" id="wyloguj" title="Wyloguj się" onclick="wyloguj()" alt="Wyloguj się">
        </div>
    </div>
    <div id="podstrona">
        <a href="./skrypt1.php">Zadanie 1</a>
        <a href="./skrypt2.php">Zadanie 2</a>
        <a href="./skrypt3.php">Zadanie 3</a>
    </div>
    <div id="podstrona1">
        <a href="../DataEdit/dodajslowka.php">Dodaj słówka do bazy słów</a>
        <a href="./help.php">Pomoc techniczna</a>
    </div>
    <div class="glowna">
        <div class="kontener">
        <div class="window">
            <div class="tytul">Zadanie "polski - angielski"</div>
            <hr class="hrtytul">
            <div class="pol">
            Przetlumacz wyraz na jezyk angielski<br><br>
            <?php
                $tabela = $_COOKIE['wybor'];
                function change($str) {
                    $str = str_ireplace(' ', '', $str);
                    $str = strtolower($str);
                    return $str;
                }
                if(isset($_POST['losowanie'])) {
                    $conn = Db::connect();
                    $rand = rand(1, 4);
                    $zapytanie_pol = "SELECT `pol`, `ang` FROM $tabela ORDER BY RAND()";
                    $result = mysqli_query($conn, $zapytanie_pol);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $_SESSION['pol'] = $row['pol'];
                            $_SESSION['ang'] = $row['ang'];
                        }
                    }
                    echo  $_SESSION['pol'];
                    $_SESSION['ang'] = change($_SESSION['ang']);
                }
                if(isset($_POST['sprawdz'])) {
                    $answer = $_POST['answer'];
                    $answer = change($answer);
                    if ($answer == $_SESSION['ang']) {
                        echo 'dobrze';
                    } else {
                        echo 'zle';
                    }
                }
            ?>
            </div>
            <div class="spr">
                <form method="post" autocomplete="off">
                    <input type="text" name="answer" id="answer" placeholder="tu wprowadz odpowiedz" required>
                    <button name="sprawdz" id="spr">Sprawdz</button>
                </form>
            </div>
            <div class="losuj">
                <form method="post">
                    <button name="losowanie" id="losuj">Losuj</button>
                </form>
            </div>
        </div>
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