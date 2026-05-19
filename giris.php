<?php
// Kullanıcı giriş yapınca site onu unutmasın.
session_start();
require_once 'baglanti.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Formdan gelen bilgileri yakalıyoruz
    $girilen_kullanici = $_POST['kullanici_adi'];
    $girilen_sifre = $_POST['sifre'];

    //Veritabanından bu kullanıcı adına sahip kişiyi bulma.
    $sorgu = $db->prepare("SELECT * FROM 251109017_kullanicilar WHERE kullanici_adi = ?");
    $sorgu->execute([$girilen_kullanici]);

    $kullanici_bilgisi = $sorgu->fetch(PDO::FETCH_ASSOC);


    // Kontrol.
    if ($kullanici_bilgisi && password_verify($girilen_sifre, $kullanici_bilgisi['sifre'])) {

        // Şifre doğruysa siteye giriş anahtarını veriyoruz.
        $_SESSION['oturum_acik'] = true;
        $_SESSION['aktif_kullanici'] = $kullanici_bilgisi['kullanici_adi'];

        // Giriş başarılı olunca onu ana sayfaya yönlendiriyoruz.
        echo "<script>alert('Hoş geldin!'); window.location.href='index.php';</script>";
        exit;
    } else {
        // Şifre veya kullanıcı adı yanlışsa
        echo "<script>alert('Kullanıcı adı veya şifre yanlış, tekrar dene!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
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

    <br><br>
    <div class="f-giris-form">
        <form method="POST">
            <h3 class="f-h3-giris">Giriş Yap!</h3>
            <input class="f-input" type="text" name="kullanici_adi" placeholder="Kullanıcı adı:">
            <br><br>
            <input class="f-input" type="password" name="sifre" placeholder="Şifreniz:">
            <br><br>
            <input type="submit" value="Giriş Yap">
            <input type="reset" value="Temizle">
            <br><br>
            <p class="f-p-giris">Hesabın yok mu?<a class="f-a-giris-kayit" href="kayit.php"> Kayıt ol.</a></p>
        </form>
    </div>
</body>

</html>