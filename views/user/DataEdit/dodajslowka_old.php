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
<img src="../../../image/logopasek.png" alt="logo" title="ZSCKU" class="logo">
    <img src="../../../style/bars-solid.svg" class="menu" title="Otwórz menu" alt="icon" onclick="baroc()">
    <img src="../../../style/right-from-bracket-solid.svg" title="Wyloguj się" class="wyloguj" alt="Wyloguj" onclick="wyloguj()">
        </div>
       
        <!-- <a href='?action=logout' name='wyloguj'>Wyloguj</a> -->
        <!-- <form method="post">
            <button type="submit" name='wyloguj'>Wyloguj</button>
        -->
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
        <div class="hidden">
        <form method="post">   
                <button name="wyloguj" id="guzikwylogowywania"></button>  
        </form>
        </div>
        <div class="main">
                <form method="post" class="formularz">
                    <label for="tabela">Wybierz tabelę, do której ma być wprowadzone słówko</label>
                    <select name="tabela" id="tabela">
                        <option value="zawod_it">Technik Informatyk</option>
                        <option value="zawod_kuch">Technik Żywienia i Usług Gastronomicznych</option>
                    </select> <br>
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
                    <button type="reset">Resetuj</button>
                    <button type="submit">Prześlij</button>
                </form>
                <?php
                $conn = Db::connect();
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
    <?php
        
    ?>
    <div class="bar" id="bar">
    <a href=" <?php echo Db::getLink('views/user/Home/skrypt1.php'); ?>">Zadanie 1</a>
        <a href=" <?php echo Db::getLink('views/user/Home/skrypt2.php'); ?>">Zadanie 2</a>
        <a href=" <?php echo Db::getLink('views/user/Home/skrypt3.php'); ?>">Zadanie 3</a>
        <hr>
        <a onclick="otworz()">Narzędzia zaawansowane</a>
            <span style="visibility: hidden;" id="otworzcontent">
                <a href="<?php echo Db::getLink('views/user/DataEdit/dodajslowka.php'); ?>">Dodaj słówka do bazy słów</a>
                <a href="<?php echo Db::getLink('views/user/Home/help.php'); ?>./help.php"></a>
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