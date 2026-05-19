<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda</title>
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
    <div class="f-uyeler-ve-hakkimizda">
        <div class="f-uyeler">
            <img class="f-img-hakkimizda" src="resimler/fatma turgut.jpg" alt="fatma turgut">
            <h2 class="f-h2-hakkimizda">Fatma Turgut</h2>
            <p class="f-p-hakkimizda">Fatma Turgut, Türk rock sahnesinin en güçlü seslerinden biri ve efsanevi alternatif rock grubu Model'in solistidir.</p>
            <img class="f-img-hakkimizda" src="resimler/okan ışık.jpg" alt="okan ışık">
            <h2 class="f-h2-hakkimizda">Okan Işık</h2>
            <p class="f-p-hakkimizda">Okan Işık, Model grubunun melodik altyapısını ve sert tınılarını belirleyen, grubun kuruluşundan bugüne tüm ikonik şarkılarında imzası olan kurucu gitaristidir.</p>
            <img class="f-img-hakkimizda" src="resimler/can temiz.jpg" alt="can temiz">
            <h2 class="f-h2-hakkimizda">Can Temiz</h2>
            <p class="f-p-hakkimizda">Can Temiz, Model grubunun "Değmesin Ellerimiz" ve "Pembe Mezarlık" gibi en büyük hitlerine imza atan kurucu bas gitaristi, söz yazarı ve bestecisidir.</p>
            <img class="f-img-hakkimizda" src="resimler/kerem sedef.jpg" alt="kerem sedef">
            <h2 class="f-h2-hakkimizda">Kerem Sedef</h2>
            <p class="f-p-hakkimizda">Kerem Sedef, Model grubunun dinamik ve enerjik ritim altyapısını oluşturan, grubun en üretken dönemlerinde bagetleri devralmış profesyonel davulcusudur.</p>
        </div>
        <div class="f-tarihce-hakkimizda">
            <h2 class="f-h2-hakkimizda">Tarihçe</h2>
            <p class="f-p2-hakkimizda">2005 yılında Okan Işık, Aşkın Çolak ve Can Temiz tarafından A Due Carmen adıyla kuruldu. 2007 yılında gruba Fatma Turgut ve Serkan Gürüzümcü katıldı. Sonraki yıl grubun adı MODEL olarak değişti.
                <br><br>
                İlk albümleri olan Perili Sirk, GNL Entertainment desteği ile 2009 yılında piyasaya sürüldü. Albümde Levent Yüksel ile yapılmış Bak Bir Varmış Bir Yokmuş düeti ve hemen popüler olan Olmaz adlı parça bulunuyordu.
                <br><br>
                Model, albüm ve sahne çalışmalarının yanı sıra şirketler için ürettiği jinglelar ile de adını duyurmuştur. Marka Konferansı için 10. Yıl Marşı, 1 adet jingle ve 1 tane de intro bestelemiştir. Grup, 2009 ve 2010 yıllarında konferansın müzikal koordinatörlüğünü de üstlenmiştir. 2010 yılında Efes Pilsen'in 'Sokakta Hayat Var' projesinde, 25 Eylül 2010 tarihinde de Antalya'da gerçekleşen Efes Pilsen One Love Festivali'nde sahne aldılar.
                <br><br>
                2012 yılında Model
                İkinci albümleri, Diğer Masallar 2011 yılının Şubat ayında, Demir Demirkan prodüktörlüğünde yayınlandı. Grup bu dönemde AFM, Herbalife, Algida, Sinpaş gibi markalar için jingle çalışmaları yaptı. Diğer Masallar albümünde yer alan "Buzdan Şato", "Pembe Mezarlık", "Değmesin Ellerimiz" ve "Bir Melek Vardı" şarkıları büyük beğeni topladı. Albüm çıktıktan bir süre sonra 2. gitarist olan Serkan Gürüzümcü gruptan ayrıldı, yerine Burak Yerebakan geldi.
                <br><br>
                2012 Aralık ayında baterist Aşkın Çolak Model'den ayrıldı, yerine Kerem Sedef geldi. Sedef, Model üyeleriyle eskiden beri arkadaş olduğu için gruba hemen uyum sağladı ve grup üçüncü albüm çalışmalarına başlandı. Albüm çalışmalarına başlamadan önce grubun 2. gitaristi olan Burak Yerebakan Model'den ayrıldı, grup yolunda dört kişi devam etti.
                <br><br>
                Üçüncü albümleri Levlâ'nın Hikayesi 2013 yılı Kasım ayının son haftasında GNL Entertainment etiketiyle piyasaya sürüldü. Model bu albümdeki şarkılarında 'ayrılıktan sonraki yasın beş evresi ve daha sonra insanın kendi iç hesaplaşması, insan ilişkileri' temasını kullandı.Diğer Masallar albümünde olduğu gibi Levlâ'nın Hikâyesi de Demir Demirkan prodüktörlüğünde kaydedilmiştir. İlerleyen zamanlarda İstanbul Live, Jolly Joker, Bronx Pi sahnelerinde ve çeşitli festivallerde sahne aldılar.
                <br><br>
                Grubun 26 Eylül 2016 tarihinde dağılma kararı aldığı iddia edildi. Ancak 27 Eylül'de Model grubunun solisti Fatma Turgut'un menajeri Güray Gürsel, Twitter'da bu iddiayı yalanlamıştır. 27 Aralık 2016 gecesi Fatma Turgut kendi sosyal hesabından gruptan ayrıldığını duyurmuş ardından Model grubunun hesaplarından Can Temiz ile Okan Işık bunu doğrulamıştır.
                <br><br>
                2026 yılında tekrar bir araya gelen Model konserler vermeye başlamıştır.
            </p>
        </div>
    </div>
</body>

</html>