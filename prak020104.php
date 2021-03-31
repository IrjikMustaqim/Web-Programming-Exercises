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
    $i=1;
    while ($i<=6){
        if($i%2==0){
            echo "<h".$i." style='color:red;'>Heading ".$i."</h".$i.">";
        }else{
            echo "<h".$i.">Heading ".$i."</h".$i.">";
        }
        $i++;
    }
?>
</body>
</html>