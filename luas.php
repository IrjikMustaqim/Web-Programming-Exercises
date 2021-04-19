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
        $diameter = (float) $_GET["d"];
        $tinggi = (float) $_GET["t"];
        $luas = M_PI*pow($diameter/2,2)*$tinggi;
        echo "Luas tabung ".$_GET["n"]." dengan diameter ".$_GET["d"]." dan tinggi ".$_GET["t"]." adalah ".strval($luas)." satuan luas";
    ?>
</body>
</html>