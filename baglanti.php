<?php
$host = "localhost";
$dbname = "251109017_konser_db";
$kullanici = "root";
$sifre = "";
try {
    // PDO kullanarak veri tabanına bağlanıyoruz.
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $kullanici, $sifre);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Eyvah hocam bağlantı koptu! Hata detayı: " . $e->getMessage();
}
