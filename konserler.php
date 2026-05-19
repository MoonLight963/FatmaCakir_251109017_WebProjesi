<?php
session_start();
require_once 'baglanti.php';

// Konserleri listelemek için çekiyorum
$sorgu = $db->prepare("SELECT * FROM 251109017_konserler");
$sorgu->execute();
$konserler = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konserler</title>
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
    <div class="f-konserler-ve-muzik">
        <div class="f-konserler-muzik">
            <h2 class="f-h2-konserler">Popüler Müzikler</h2>
            <div>
                <img class="f-album-kapagi" src="resimler/mey.png" alt="mey albüm kapağı">
                <audio controls>
                    <source src="muzikler/Model - Mey_128k.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div>
                <img class="f-album-kapagi" src="resimler/degmesin ellerimiz pembe mezarlık.png" alt="değmesin ellerimiz pembe mezarlık albüm kapağı">
                <audio controls>
                    <source src="muzikler/Model - Değmesin Ellerimiz_128k.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div>
                <img class="f-album-kapagi" src="resimler/degmesin ellerimiz pembe mezarlık.png" alt="değmesin ellerimiz pembe mezarlık albüm kapağı">
                <audio controls>
                    <source src="muzikler/Model - Pembe Mezarlık_128k.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div>
                <img class="f-album-kapagi" src="resimler/dagilmak istiyorum.png" alt="dağılmak istiyorum albüm kapağı">
                <audio controls>
                    <source src="muzikler/Ozan Doğulu, Model - Dağılmak İstiyorum_128k.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
        <div class="f-konserler-takvimi">
            <h2 class="f-h2-konserler">Konser Takvimi</h2>
            <ul class="f-ul-konserler">

                <?php foreach ($konserler as $konser) { ?>
                    <li class="f-li-konserler">
                        <span> <?php echo $konser['tarih'] . " - " . $konser['detay']; ?> </span>

                        <form method="POST" action="bilet_al.php" style="display:inline;">
                            <input type="hidden" name="konser_id" value="<?php echo $konser['id']; ?>">
                            <input type="submit" value="Bilet Al">
                        </form>
                    </li>
                <?php } ?>

            </ul>
        </div>
</body>

</html>