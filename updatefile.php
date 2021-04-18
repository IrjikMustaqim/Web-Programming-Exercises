<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    $namaFile = "myfile.txt";
    $myfile = fopen($namaFile,"w") or die("Tidak bisa membuka file");
    fwrite($myfile,"DOS = Disk Operating System\n");
    fclose($myfile);

    ?>
<body>  
</body>
</html>