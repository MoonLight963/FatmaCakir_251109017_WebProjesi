<?php
session_start();
require_once 'baglanti.php';

// Güvenlik: Giriş yapmamış biri bu sayfaya dışarıdan linkle girmeye çalışırsa kapı dışarı ediyoruz
if (!isset($_SESSION['oturum_acik']) || $_SESSION['oturum_acik'] !== true) {
    header("Location: giris.php");
    exit;
}

// Eğer form gerçekten POST yöntemiyle gönderildiyse ve gizli ID geldiyse işlemi başlatıyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['silinecek_id'])) {
    
    $silinecek_id = $_POST['silinecek_id'];

    // Silme işlemini (DELETE) prepared statement ile güvenli bir şekilde yapıyoruz
    $silme_sorgusu = $db->prepare("DELETE FROM 251109017_konserler WHERE id = ?");
    $sonuc = $silme_sorgusu->execute([$silinecek_id]);

    if ($sonuc) {
        // Silme başarılıysa admin paneline geri dön ve mesaj ver
        echo "<script>alert('Konser veritabanından acımasızca silindi kanka!'); window.location.href='admin.php';</script>";
        exit;
    } else {
        echo "<script>alert('Eyvah! Silme işlemi sırasında bir sorun oluştu.'); window.location.href='admin.php';</script>";
        exit;
    }

} else {
    // Post olmadan direkt linkle geldiyse kovuyoruz
    header("Location: admin.php");
    exit;
}
?>