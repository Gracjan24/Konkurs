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
                $conn = mysqli_connect('localhost', 'root', '', 'konkurs');
                $rand = rand(1, 6);
                $zapytanie_pol = "SELECT `ang`, `text` FROM slownictwo WHERE id = ".$rand."";
                $result = mysqli_query($conn, $zapytanie_pol);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['ang'] = $row['ang'];
                        $_SESSION['text'] = $row['text'];
                    }
                }
                echo $_SESSION['text'];
            }
        ?>
            <form method="post">
                <input type="text" name="answer"><br>
                <button name="sprawdz">Sprawdz</button><br>
            </form>
            <?php
                if(isset($_POST['sprawdz'])) {
                    $answer = $_POST['answer'];
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