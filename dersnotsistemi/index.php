<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Giriş Sayfası</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Giriş Yap</h2>

        <?php
        
        if (isset($_GET['error'])) { ?>

             <p class="error"><?php echo $_GET['error'] ; ?></p>
            
        <?php } ?>

        <label>Kullanıcı Adı</label>
        <input type="text" name="uname" placeholder="Kullanıcı Adı"><br>

        <label>Şifre</label>
        <input type="password" name="password" placeholder="Şifre"><br>

        <button type="submit">Giriş Yap</button>
    </form>
    
</body>
</html>