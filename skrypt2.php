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
</head>
<body>
    <div class="formularz">
        <form method="post">
            <button name="losowanie">Losuj</button>
        </form>
        <div class="answerBlok"></div>
    </div>
    <div class="blok">
        <!-- <button onclick></button> -->
        <?php
            if(isset($_POST['losowanie'])) {
                $conn = mysqli_connect('localhost', 'root', '', 'konkurs');
                $zapytanie = "SELECT `pol`, `ang`, `bad`, `wrong` FROM slownictwo WHERE id = 1";
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
                    echo '<div class="answerBlok">'.$_SESSION['ang'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['bad'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['wrong'].'</div>';
                }
                if ($r == 2) {
                    echo '<div class="answerBlok">'.$_SESSION['wrong'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['ang'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['bad'].'</div>';
                }
                if ($r == 3) {
                    echo '<div class="answerBlok">'.$_SESSION['bad'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['wrong'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['ang'].'</div>';
                }
                if ($r == 4) {
                    echo '<div class="answerBlok">'.$_SESSION['wrong'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['bad'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['ang'].'</div>';
                }
                if ($r == 5) {
                    echo '<div class="answerBlok">'.$_SESSION['ang'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['wrong'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['bad'].'</div>';
                }
                if ($r == 6) {
                    echo '<div class="answerBlok">'.$_SESSION['bad'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['ang'].'</div>';
                    echo '<div class="answerBlok">'.$_SESSION['wrong'].'</div>';
                }
            }
        ?>
    </div>
</body>
</html>