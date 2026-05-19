<?php
// Oturum bilgilerine erişmek ve veritabanı köprüsünü kullanmak için bunları çağırıyorum.
session_start();
require_once 'baglanti.php';

// Eğer kullanıcı giriş yapmadıysa bilet alamaz. 
if (!isset($_SESSION['oturum_acik']) || $_SESSION['oturum_acik'] !== true) {
    echo "<script>alert('Dur önce! Bilet almak için giriş yapmalısın.'); window.location.href='giris.php';</script>";
    exit;
}

// Konserler sayfasındaki formdan POST ile gelen gizli konser_id verisini yakalıyorum
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['konser_id'])) {

    $konser_id = $_POST['konser_id'];
    $aktif_kullanici_adi = $_SESSION['aktif_kullanici'];

    // Giriş yapan kişinin kullanıcı adından yola çıkarak veritabanındaki ID'sini buluyorum
    $kullanici_sorgu = $db->prepare("SELECT id FROM 251109017_kullanicilar WHERE kullanici_adi = ?");
    $kullanici_sorgu->execute([$aktif_kullanici_adi]);
    $kullanici_bilgisi = $kullanici_sorgu->fetch(PDO::FETCH_ASSOC);

    if ($kullanici_bilgisi) {
        $kullanici_id = $kullanici_bilgisi['id'];

        // Prepared statement kullanarak hangi kullanıcının hangi konseri aldığını köprü tablomuza kaydediyorum
        // Dışarıdan gelen veriler güvenli şekilde sorguya alınıyor
        $bilet_ekle = $db->prepare("INSERT INTO 251109017_biletler (kullanici_id, konser_id) VALUES (?, ?)");
        $sonuc = $bilet_ekle->execute([$kullanici_id, $konser_id]);

        if ($sonuc) {
            echo "<script>alert('Biletiniz başarıyla alındı! Konserde iyi eğlenceler.'); window.location.href='konserler.php';</script>";
            exit;
        } else {
            echo "<script>alert('Bilet alınırken sistemsel bir hata oluştu.'); window.location.href='konserler.php';</script>";
            exit;
        }
    }
} else {
    // Eğer bu sayfaya form doldurmadan direkt linkle girmeye çalışırlarsa konserler sayfasına geri yolluyorum
    header("Location: konserler.php");
    exit;
}
