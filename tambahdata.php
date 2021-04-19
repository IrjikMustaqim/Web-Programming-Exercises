<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Input Data Mahasiswa</h1>
        <script type="text/javascript">
            function validateForm() {
                var a = document.forms["Form"]["nim"].value;
                var b = document.forms["Form"]["nama"].value;
                var c = document.forms["Form"]["tgllhr"].value;
                var d = document.forms["Form"]["tmptlhr"].value;
                if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "") {
                    alert("Please Fill All Required Field");
                    return false;
                }
        }
        </script>
        <form method="post" action="simpan.php" name="Form">
            <table>
                <tr><td>NIM</td><td><input type="text" name="nim" style="width:100%"></td></tr>
                <tr><td>Nama</td><td><input type="text" name="nama" style="width:100%"></td></tr>
                <tr><td>Tgl Lahir</td><td><input type="date" name="tgllhr" style="width:100%"></td></tr>
                <tr><td>Tempat Lahir</td><td><input type="text" name="tmptlhr" style="width:100%"></td></tr>
                <tr><td></td><td><input type="submit" onclick="return validateForm();" name="submit" value="Tambahkan" style="width:100%"></td></tr>
            </table>
            
        </form>        
        
        
    </body>
</html>