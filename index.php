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
        <h3>Login</h3>
        <form action="login.php" method="post" onSubmit="return validasi()">
            <div>
                <label>Username:</label>
                <input type="text" name="username" id="username" />
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" id="password" />
            </div>			
            <div>
                <input type="submit" value="Login" class="tombol">
            </div>
        </form>
    </div>
</body>
</html>
