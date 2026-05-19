<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body class="f-govde f-index">
    <ul class="f-ul-anamenu">
        <li class="f-li-anasayfa"><a href="index.php"><i class="fa-solid fa-house"></i>Ana Sayfa</a></li>
        <li class="f-li-anasayfa"><a href="hakkimizda.php"><i class="fa-solid fa-people-group"></i>Hakkımızda</a></li>
        <li class="f-li-anasayfa"><a href="konserler.php"><i class="fa-brands fa-itunes-note"></i>Konserler</a></li>
        <li class="f-li-anasayfa"><a href="bizeulasin.php"><i class="fa-solid fa-phone"></i>Bize Ulaşın</a></li>

        <?php if (isset($_SESSION['oturum_acik']) && $_SESSION['oturum_acik'] === true) { ?>

            <li class="f-li-anasayfa"><a href="admin.php"><i class="fa-solid fa-gear"></i>Admin Paneli</a></li>
            <li class="f-li-anasayfa"><a href="cikis.php"><i class="fa-solid fa-right-from-bracket"></i>Çıkış Yap</a></li>

        <?php } else { ?>

            <li class="f-li-anasayfa"><a href="giris.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>Giriş Yap</a></li>

        <?php } ?>
    </ul>
    </div>
    <div class="f-anasayfa-gorsel">
        <img class="f-anasayfa-gorsel" src="resimler/anasayfagorsel.jpg" alt="model">
    </div>
</body>

</html>