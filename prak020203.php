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
        $baris = 4;
        $kolom = 5;
        $nomor = 1;
        
        echo "<table border=’1’>";
        for($i =0; $i < $baris; $i++){
            echo "<tr>";
            for ($j =0 ; $j < $kolom; $j++){
                if(($nomor+$j)%2 == 0){
                    echo "<td style='color:white;background-color:red'>".($nomor+$j)."</td>";
                }else{
                    echo "<td style='color:red;background-color:white'>".($nomor+$j)."</td>";
                }
            }
            echo "</tr>";
            $nomor += 5;
        }
        echo "</table>";
    ?>
</body>
</html>