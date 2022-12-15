<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Home/style.css" class="css">
    <?php include '../../../classes/auth.php'; ?>
</head>
<body>
    <!-- <?php echo $_COOKIE['wybor'];?> -->
    <div class="baner">
        <img src="../../../image/logopasek.png" alt="logo" title="ZSCKU" class="logo">
        <p>Witaj 
            <?php echo (new Auth())->getName(@$_SESSION['id_user']); ?>
            !
        </p>
    </div>
    <div class="navv">
        <div class="nav">
            <img src="../../../style/house-solid.svg" id="glowna" title="Wróć do strony głównej" alt="glowna" onclick="window.open('../Home/index.php','_self')">
            <p onclick="baroc()">▼ Zadania</p>
            <p> </p>
            <p onclick="baroc1()">Narzędzia ▼</p>
            <img src="../../../style/right-from-bracket-solid.svg" id="logout" title="Wyloguj się" onclick="wyloguj()" alt="Wyloguj się">
        </div>
    </div>
    <div id="podstrona">
        <a href="../Home/skrypt1.php">Zadanie 1</a>
        <a href="../Home/skrypt2.php">Zadanie 2</a>
        <a href="../Home/skrypt3.php">Zadanie 3</a>
    </div>
    <div id="podstrona1">
        <a href="../DataEdit/dodajslowka.php">Dodaj słówka do bazy słów</a>
        <a href="../Home/help.php">Pomoc techniczna</a>
    </div>
    <div class="glowna">
        <div class="kontent">
            <div class="main">
        <form method="post" class="formularz" autocomplete="off">
                    <label for="ang">Słowo po angielsku: </label>
                    <input type="text" name="ang"> <br>
                    <label for="pol">Znaczenie po polsku: </label>
                    <input type="text" name="pol"> <br>
                    <label for="wrong">Błędna odpowiedź 1 (do zadania 2): </label>
                    <input type="text" name="wrong"> <br>
                    <label for="bad">Błędna odpowiedź 2 (do zadania 2): </label>
                    <input type="text" name="bad"> <br>
                    <label for="text">Definicja (do zadania 3):</label>
                    <input type="text" name="text"> <br>
                    <label for="tabela">Wybierz zawód:</label>
                    <select name="tabela">
                        <option value="zawod_it">TI</option>
                        <option value="zawod_kuch">TŻiUG</option>
                        <option value="zawod_te">TE</option>
                        <option value="zawod_mps">TPS</option>
                    </select><br>
                    <button type="reset">Resetuj</button>
                    <button type="submit">Prześlij</button>
                </form>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "baza");
                if(isset($_POST['text'])) {
                    $tabela = $_POST['tabela'];
                    $ang = $_POST['ang'];
                    $pol = $_POST['pol'];
                    $wrong = $_POST['wrong'];
                    $bad = $_POST['bad'];
                    $textt = $_POST['text'];
                    $zap1 = "INSERT INTO $tabela (ang, pol, wrong, bad, text) VALUES ('$ang','$pol','$wrong','$bad','$textt');";
                    $wynik1 = mysqli_query($conn, $zap1);
                    // echo mysqli_error($conn);
                    if(mysqli_error($conn) == null) {
                        echo "<p class='blad'>Słówko zostało wprowadzone prawidłowo do bazy danych</p>";
                    }else {
                        echo "<p class='blad'>Wystąpił błąd, proszę sprawdzić poprawność wprowadzonych danych (aktualnie nie można używać znaków { ' ` oraz cudzysłowów})</p> ";
                    }
                }
                ?>
            </div>
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