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
        <div class="nav">
            <button>zadanie 1</button>
            <button>zadanie 2</button>
            <button>zadanie 3</button>
            <button>dodawanie</button>
            <button>pomoc</button>
            <button>wyloguj</button>
            <button>glowna</button>
        </div>
    </div>

    <div class="glowna">
        <div class="kontent">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt maiores nobis, repellat hic commodi error inventore similique doloribus quis, quo voluptas et placeat possimus magnam labore facilis maxime dicta! Voluptatem?</p>
            <img src="../../../image/homepicture.jpg" alt="home">
        </div>
    </div>
</body>
</html>