<?php
    // mengaktifkan session
    session_start();

    // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
    if($_SESSION['status'] !="login"){
        header("location:index.php");
    }
?>
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
        <h3>Login Success</h3>
        <label>
        <?php
            // menampilkan pesan selamat datang
            echo "Hai, selamat datang ". $_SESSION['username'];
        ?>
        </label>
        <br/><br/>
        <a href="logout.php" class="tombol">LOGOUT</a>
    </div>
</body>
</html>
