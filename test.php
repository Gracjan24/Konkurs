<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function changeString($str) {
        $str = str_replace(" ", "", $str);
        $str = strtolower($str);
        return $str;
    }
    $ang = 'A N G';
    $pol = 'P O L';
    $ang = changeString($ang);
    $pol = changeString($pol);
    echo $ang.'<br>';
    echo $pol.'<br>';
?>
</body>
</html>