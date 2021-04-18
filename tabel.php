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
        $myfile = fopen($namaFile,"r") or die("Tidak bisa membuka file");
        echo "<table style='width:100%' border='1'>
        <tr>
          <th>NIM</th>
          <th>Nama Mhs</th>
          <th>Tanggal Lahir</th>
          <th>Tempat Lahir</th>
          <th>Usia (thn)</th>
        </tr>";
        $jumlah =0;
        while(!feof($myfile)){
            $data = explode("|",fgets($myfile));
            echo "<tr>";
            foreach($data as $dt){
                echo "<td>".$dt."</td>";
            }
            echo "<td>".date_diff(date_create(date("y-m-d")),date_create($data[2]))->y."</td>";
            echo "</tr>";
            $jumlah += 1;
        }
        echo "</table>";
        echo "<p>Jumlah Data :".$jumlah;
        fclose($myfile);
    ?>
</body>
</html>