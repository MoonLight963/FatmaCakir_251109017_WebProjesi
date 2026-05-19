<?php
session_start();
// Veritabanını sayfaya bağlıyoruz.
require_once 'baglanti.php';
// Kayıt ol a bastı mı?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelen_kullanici = $_POST['kullanici_adi'];

    $gelen_mail = $_POST['eposta'];
    $gelen_sifre = $_POST['sifre'];

    // Şifreyi açık açık kaydetmemek için güvenli bir şekilde şifreliyoruz.
    $guvenli_sifre = password_hash($gelen_sifre, PASSWORD_DEFAULT);

    $sorgu = $db->prepare("INSERT INTO 251109017_kullanicilar (kullanici_adi, eposta, sifre) VALUES (?, ?, ?)");

    $ekle = $sorgu->execute([$gelen_kullanici, $gelen_mail, $guvenli_sifre]);

    // İşlemin başarılı olup olmadığını kontrol ediyoruz.
    if ($ekle) {
        echo "<script>alert('Kayıt başarıyla tamamlandı.');</script>";
    } else {
        echo "<script>alert('Kayıt sırasında bir sorun oluştu.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
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
    <div class="f-uyelik-form">
        <form method="POST">
            <h3 class="f-h3-uyelik">Kayıt Ol!</h3>
            <input class="f-input" type="text" name="kullanici_adi" placeholder="Kullanıcı adı:">
            <br><br>
            <input class="f-input" type="password" name="sifre" placeholder="Şifreniz:">
            <br><br>
            <input class="f-input" type="email" name="eposta" placeholder="Mailiniz:">
            <br><br>
            <input type="submit" value="Kayıt Ol">
            <input type="reset" value="Temizle">
            <br><br>
        </form>
        <br>
        <br>
        <p class="f-p-kayit">Zaten hesabın var mı?<a class="f-a-giris" href="giris.php"> Giriş yap.</a></p>
    </div>

</body>

</html>