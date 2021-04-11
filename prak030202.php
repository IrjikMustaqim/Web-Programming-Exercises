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
        function hitungDenda($tglHarusKembali,$tglKembali){
            $harusKembali = date_create($tglHarusKembali);
            $uangPerHari = 3000;
            $kembali = date_create($tglKembali);
            if($tglHarusKembali < $tglKembali){
                $denda = (date_diff($kembali, $harusKembali)->d)*$uangPerHari;
                return $denda;
            }else{
                return 0;
            }
        }

        print hitungDenda("2021-01-05","2021-01-09");
    ?>
</body>
</html>