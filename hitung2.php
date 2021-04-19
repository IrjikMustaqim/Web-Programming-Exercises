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
// baca kedua bilangan
    $bil1 = $_POST["bil1"];
    $bil2 = $_POST["bil2"];
// proses perhitungan
    if (isset($_POST["penumlahan"])){
        $hasil = $bil1 + $bil2;
        $op = "+";
    } else if (isset($_POST["pengurangan"])){
        $hasil = $bil1 - $bil2;
        $op = "-";
    } else if (isset($_POST["perkalian"])){
        $hasil = $bil1 * $bil2;
        $op = "x";
    } else if (isset($_POST["pembagian"])){
        $hasil = $bil1 / $bil2;
        $op = "/";
    } else if (isset($_POST["pangkat"])){
        $hasil = pow($bil1, $bil2);
    }
        // menampilkan hasil perhit ungan
    echo "<h2>".$bil1." ".$op." ".$bil2." = ".$hasil."</h2>";
?>
</body>
</html>