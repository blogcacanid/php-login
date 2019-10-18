<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Membuat Form Login Dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br/><br/>
    <div class="box"><br/>
        <h3>Login Failed</h3>
        <label>
        <?php
            // menampilkan pesan error
            echo "Username atau password salah";
        ?>
        </label>
        <br/><br/>
        <a href="index.php" class="tombol">Back to LOGIN</a>
    </div>
</body>
</html>
