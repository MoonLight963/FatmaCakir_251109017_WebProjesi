<?php
session_start();
// Kullanıcının sistemdeki giriş anahtarını ve tüm oturum bilgilerini yok ediyoruz
session_destroy(); 

// Çıkış işlemi bitince onu direkt ana sayfaya yolluyoruz
header("Location: index.php"); 
exit;
?>