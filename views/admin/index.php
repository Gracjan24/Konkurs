<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Konkurs</title> 
        <?php
      
        include '../../classes/auth.php';
        ?>
</head>
<body>
<div class="pasek">
    <?php echo '<h5>Witaj,'. (new Auth())->getName(@$_SESSION['id_user']).'</h5>'; ?>
    <img src="./bars-solid.svg" alt="icon" onclick="baroc()">
        </div>
    <header>
       
        <!-- <a href='?action=logout' name='wyloguj'>Wyloguj</a> -->
        <!-- <form method="post">
            <button type="submit" name='wyloguj'>Wyloguj</button>
        -->
            <form method="post">
                <button name="wyloguj">Wyloguj</button>
            </form>
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
        <img src="logo.png" alt="logo">
    </header>
    <?php
        
    ?>
    <div class="bar" id="bar">
        <!-- <a href="javascript:void(0)" class="cbar" onclick="closebar()">&times</a> -->
        <a href="./strona.php">Zadanie 1</a>
    </div>
    <script>
        var barstate = false;
    function baroc() {
        if(barstate == false) {
            document.getElementById("bar").style.width="250px";
            barstate = true;
        }else {
            document.getElementById("bar").style.width="0px";
            barstate = false;
        }
    }
    // function openbar() {
    //     document.getElementById("bar").style.width="250px";
    //     barstate = true;
    // }

    // function closebar() {
    //     document.getElementById("bar").style.width="0px";
    //     barstate = false;
    // }
    </script>
</body>
</html>