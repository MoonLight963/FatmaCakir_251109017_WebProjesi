-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2026, 20:40:55
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `251109017_konser_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `251109017_biletler`
--

CREATE TABLE `251109017_biletler` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `konser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `251109017_biletler`
--

INSERT INTO `251109017_biletler` (`id`, `kullanici_id`, `konser_id`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `251109017_konserler`
--

CREATE TABLE `251109017_konserler` (
  `id` int(11) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `detay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `251109017_konserler`
--

INSERT INTO `251109017_konserler` (`id`, `tarih`, `detay`) VALUES
(1, '22 Mayıs 2026', 'Model - CerModern, Ankara'),
(2, '7 Haziran 2026', 'Model - Selçuklu Kongre Merkezi Açıkhava Sahnesi, Konya'),
(3, '9 Haziran 2026', 'Model - Eskişehir Kent Park Yeni Festival Alanı, Eskişehir'),
(4, '10 Haziran 2026', 'Model - Antalya Açıkhava, Antalya');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `251109017_kullanicilar`
--

CREATE TABLE `251109017_kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `eposta` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `251109017_kullanicilar`
--

INSERT INTO `251109017_kullanicilar` (`id`, `kullanici_adi`, `eposta`, `sifre`) VALUES
(1, 'deneme123', 'deneme123@gmail.com', '$2y$10$0DbdfgAb4SraeFqhL0plSeFXn4VxtSG/vFHkrF7hLRU8hAGnXq0YG'),
(2, 'test', 'test@gmail.com', '$2y$10$KlzZGuKe0oa/tedsSdx7WuXLjnNerWeap2RjKaJYEwneqlrKjJmZi'),
(3, 'test2', 'test2@gmail.com', '$2y$10$2Vdoxte3pJUNfMPAYRhnd./j1cZ41nPRQQ8dVHG4Nfn3mVidNd6yC');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `251109017_biletler`
--
ALTER TABLE `251109017_biletler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `251109017_konserler`
--
ALTER TABLE `251109017_konserler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `251109017_kullanicilar`
--
ALTER TABLE `251109017_kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `251109017_biletler`
--
ALTER TABLE `251109017_biletler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `251109017_konserler`
--
ALTER TABLE `251109017_konserler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `251109017_kullanicilar`
--
ALTER TABLE `251109017_kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
