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
        $namaFile = "datamhs.dat";
        $myfile = fopen($namaFile,"a") or die("Tidak bisa membuka file");
        fwrite($myfile, "\n".$_POST["nim"]."|".$_POST["nama"]."|".$_POST["tgllhr"]."|".$_POST["tmptlhr"]);
        fclose($myfile);
        
    ?>
</body>
</html>