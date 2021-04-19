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
    
        $bil1 = (double) $_POST["bil1"];
        $operator = $_POST["operasi"];
        $bil2 = (double) $_POST["bil2"];
        
        if($operator == "+"){
            $hasil = $bil1 + $bil2;        
        }else if($operator == "-"){
            $hasil = $bil1 - $bil2;        
        }else if($operator == "x"){
            $hasil = $bil1 * $bil2;        
        }else if($operator == "/"){
            $hasil = $bil1 / $bil2;
        }else if($operator == "^"){
            $hasil = $bil1^$bil2;
        }

        echo "<p>".$hasil."</p>";
    
    ?>
</body>
</html>