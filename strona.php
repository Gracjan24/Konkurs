<!DOCTYPE html>
<?php
        session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="formularz">
        <form method="post">
            <button name="losowanie">Losuj</button>
        </form>
    </div>
    <div class="blok">
        <?php
            if(isset($_POST['losowanie'])) {
                $conn = mysqli_connect('localhost', 'root', '', 'baza');
                $R_id = rand(1, 6);
                $zapytanie_pol = "SELECT `pol` FROM slownictwo WHERE id = ".$R_id."";
                $zapytanie_ang = "SELECT `ang` FROM slownictwo WHERE id = ".$R_id."";
                $result_pol = mysqli_query($conn, $zapytanie_pol);
                $result_ang = mysqli_query($conn, $zapytanie_ang);
                if (mysqli_num_rows($result_pol) > 0) {
                    while ($row = mysqli_fetch_assoc($result_pol)) {
                        $_SESSION['pol'] = $row['pol'];
                    }
                }
                if (mysqli_num_rows($result_ang) > 0) {
                    while ($row = mysqli_fetch_assoc($result_ang)) {
                        $_SESSION['ang'] = $row['ang'];
                    }
                }
                echo '<h4>Przetlumacz wyraz na jezyk angielski</h4>';
                 echo  $_SESSION['pol'];
            }
        ?>
            <form method="post">
                <input type="text" name="answer"><br>
                <button name="sprawdz">Sprawdz</button><br>
            </form>
            <?php
                if(isset($_POST['sprawdz'])) {
                    $answer = $_POST['answer'];
                    echo $answer;
                    // echo $_SESSION['ang'];
                    // echo $_SESSION['pol'];
                    if ($answer == $_SESSION['ang']) {
                        echo 'dobrze';
                    } else {
                        echo 'zle';
                    }
                }
            ?>
    </div>
</body>
</html>