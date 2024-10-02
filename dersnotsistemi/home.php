<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homestyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
     integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Anasayfa</title>
</head>
<body>

    <div class="wrapper">
         <h1>Hoşgeldin , <?php echo $_SESSION['name'];  ?></h1>

         <div class="container">

               <div class="box" id="ist">
                   <h2>İstatistiksel Analiz</h2>
                   <a href="istanaliz.php" class="btn">Ders Notlarını Gör</a>
               </div>

               <div class="box" id="say">
                   <h2>Sayısal Analiz</h2>
                   <a href="sayanaliz.php" class="btn">Ders Notlarını Gör</a>
               </div>

               <div class="box" id="bil">
                   <h2>Bilgisayar Ağları</h2>
                   <a href="bilişim.php" class="btn">Ders Notlarını Gör</a>
               </div>

               <div class="box" id="yaz">
                   <h2>Yazılım Mimarisi</h2>
                   <a href="yazmim.php" class="btn">Ders Notlarını Gör</a>
               </div>


               <div class="box" id="yazger">
                   <h2>Yazılım Gereksinimleri</h2>
                   <a href="yazger.php" class="btn">Ders Notlarını Gör</a>
               </div>

               <div class="box" id="bağ">
                   <h2>Bağımlılıkların Önlenmesi</h2>
                   <a href="bağön.php" class="btn">Ders Notlarını Gör</a>
               </div>

         </div>



    </div>


    <a href="logout.php" class="logout"> <i class="fa-solid fa-right-from-bracket"></i> Çıkış Yap</a>  
    
</body>
</html>




<?php

}else {
    header("Location: index.php");
    exit();
}

?>






