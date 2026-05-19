<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bize Ulaşın</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body class="f-govde">
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
    <div class="f-bize-ulasin">
        <a href="https://www.instagram.com/modelband/?hl=tr" target="_blank" rel="noopener noreferrer">
            <img class="f-resim-ulas" src="resimler/instagram.png" alt="Instagram ikonu">
        </a>
        <p class="f-p-ulas">İnstagram hesabımız: modelband</p>
    </div>
    <div class="f-bize-ulasin">
        <a href="https://www.youtube.com/channel/UCgjWJwWFhYERmxx1lIFxLUg" target="_blank" rel="noopener noreferrer">
            <img class="f-resim-ulas" src="resimler/youtube.png" alt="YouTube ikonu">
        </a>
        <p class="f-p-ulas">YouTube kanalımız: MODELOffical</p>
    </div>
    <div class="f-bize-ulasin">
        <a href="https://music.youtube.com/@modelofficial?si=eIlbCfmb99Rwjg2b" target="_blank" rel="noopener noreferrer">
            <img class="f-resim-ulas" src="resimler/youtube-music-seeklogo.png" alt="YouTube Öusic İkonu">
        </a>
        <p class="f-p-ulas">YouTube Music kanalımız: Model</p>
    </div>
    <div class="f-bize-ulasin">
        <a href="https://open.spotify.com/intl-tr/artist/23xJQJM7peht77DF6YNEoq?si=c2p0SRo1RFaTmLfyJMZv6Q" target="_blank" rel="noopener noreferrer">
            <img class="f-resim-ulas" src="resimler/spotifypng.png" alt="Spotify İkonu">
        </a>
        <p class="f-p-ulas">Spotify hesabımız: Model</p>
    </div>
</body>

</html>