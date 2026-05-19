<?php
session_start();
require_once 'baglanti.php';
if (!isset($_SESSION['oturum_acik']) || $_SESSION['oturum_acik'] !== true) {
    echo "<script>alert('Dur önce! Bilet almak için giriş yapmalısın.'); window.location.href='giris.php';</script>";
    exit;
}
// Form gönderildiğinde burası çalışacak
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Formdan gelen paketleri alıyoruz
    $gelen_tarih = $_POST['tarih'];
    $gelen_detay = $_POST['detay'];

    // Boş gönderilmesini engelliyoruz
    if (!empty($gelen_tarih) && !empty($gelen_detay)) {

        // Hocam yeni konseri veritabanına ekliyoruz
        $konser_ekle = $db->prepare("INSERT INTO 251109017_konserler (tarih, detay) VALUES (?, ?)");
        $sonuc = $konser_ekle->execute([$gelen_tarih, $gelen_detay]);

        if ($sonuc) {
            echo "<script>alert('Harika! Yeni konser başarıyla eklendi kanka.');</script>";
        } else {
            echo "<script>alert('Konser eklenirken bir sorun çıktı.');</script>";
        }
    } else {
        echo "<script>alert('Tarih ve detay alanlarını boş bırakma!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
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
    <div class="f-admin">
        <form method="POST">
            <h3 class="f-h3-admin">Admin Girişi</h3>
            <input class="f-input-admin" type="text" name="tarih" placeholder="Konser tarihi:">
            <br><br>
            <input class="f-input-admin" type="text" name="detay" placeholder="Detaylar:">
            <br><br>
            <input class="f-input-admin-ekle" type="submit" value="Konser Ekle">
        </form>
    </div>
    <br><br>

    <div class="f-tablo-admin">
        <h3 class="f-h3-admin">Sistemdeki Konserler</h3>

        <table border="1" style="margin: auto; text-align: center; width: 80%; background-color: rgba(255,255,255,0.8); color: black;">
            <tr class="f-tsatiri-admin">
                <th class="f-tbaslik-admin">Konser ID</th>
                <th class="f-tbaslik-admin">Tarih</th>
                <th class="f-tbaslik-admin">Detay</th>
                <th class="f-tbaslik-admin">İşlem</th>
            </tr>

            <?php
            // Admin panelinde mevcut konserleri listelemek için veritabanından çekiyoruz 
            $konser_sorgu = $db->prepare("SELECT * FROM 251109017_konserler ORDER BY id DESC");
            $konser_sorgu->execute();
            $tum_konserler = $konser_sorgu->fetchAll(PDO::FETCH_ASSOC);

            // Veritabanındaki her bir konser için tabloda yeni bir satır oluşturuyoruz
            foreach ($tum_konserler as $konser) { ?>
                <tr class="f-tsatiri-admin">
                    <td class="f-tveri-admin"> <?php echo $konser['id']; ?> </td>
                    <td class="f-tveri-admin"> <?php echo $konser['tarih']; ?> </td>
                    <td class="f-tveri-admin"> <?php echo $konser['detay']; ?> </td>
                    <td class="f-tveri-admin">
                        <form method="POST" action="konser_sil.php" style="margin: 0;">
                            <input type="hidden" name="silinecek_id" value="<?php echo $konser['id']; ?>">
                            <input type="submit" value="Sil" style="background-color: darkred; color: white; padding: 5px 10px; cursor: pointer; border: none;">
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</body>

</html>