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
    </div>
    <div class="blok">
        <!-- <button onclick></button> -->
        <?php
            // if(isset($_POST['losowanie'])) {
            //     $conn = mysqli_connect('localhost', 'root', '', 'baza');
            //     $zapytanie = "SELECT `pol`, `ang`, `bad`, `wrong` FROM slownictwo WHERE id = RAND()";
            //     $result = mysqli_query($conn, $zapytanie);
            //     if (mysqli_num_rows($result) > 0) {
            //         while ($row = mysqli_fetch_assoc($result)) {
            //             $_SESSION['pol'] = $row['pol'];
            //             $_SESSION['ang'] = $row['ang'];
            //             $_SESSION['bad'] = $row['bad'];
            //             $_SESSION['wrong'] = $row['wrong'];
            //         }
            //     }
            //     echo '<h4>Przetlumacz wyraz na jezyk angielski</h4>';
            if(isset($_POST['losowanie'])) {
                $w1 = $w2 = $w3 = true;
                for ($i = 0; $i < 3; $i++) {
                    $w = rand(1,3);
                    if ($w == 1) {
                        if ($w1 == true) {
                            echo 'ang';
                            $w1 = false;
                        } else {
                            $i--;
                        }
                    }
                    if ($w == 2) {
                        if ($w2 == true) {
                            echo 'bad';
                            $w2 = false;
                        } else {
                            $i--;
                        }
                    }
                    if ($w == 1) {
                        if ($w3 == true) {
                            echo 'wrong';
                            $w3 = false;
                        } else {
                            $i--;
                        }
                    }
                }
            }

        ?>
    </div>
</body>
</html>