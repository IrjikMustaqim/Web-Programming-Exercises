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
        
        $namaFile = "datatabung.dat";
        $myfile = fopen($namaFile,"r") or die("Tidak bisa membuka file");
        echo "<table style='width:100%' border='1'>
        <tr>
          <th>Nama Tabung</th>
          <th>Diameter</th>
          <th>Tinggi</th>
          <th>Luas</th>
        </tr>";
        
        while(!feof($myfile)){
            $data = explode(",",fgets($myfile));
            echo "<tr>";
            foreach($data as $dt){
                echo "<td>".$dt."</td>";
            }
            echo "<td><a href='luas.php?n=".$data[0]."&d=".$data[1]."&t=".$data[2]."'>View</a></td>";
            echo "</tr>";
            
        }
        echo "</table>";
        
        fclose($myfile);
    ?>
</body>
</html>