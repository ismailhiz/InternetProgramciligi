<?php

// Veritabanı Bağlantısı
try {
    $db = new PDO("mysql:host=localhost;dbname=itp-deneme;charset=utf8", "root", "");
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}

// Kaydetme İşlemi
if (isset($_POST['kaydet'])) {
    $kitapAd = htmlspecialchars(trim($_POST['kitapAd']));
    $tur = htmlspecialchars(trim($_POST['tur']));
    $yazarAd = htmlspecialchars(trim($_POST['yazarAd']));
    $yayinevi = htmlspecialchars(trim($_POST['yayınevi']));
    $sayfaSayisi = (int)$_POST['sayfaSayisi'];
    $ozet = htmlspecialchars(trim($_POST['ozet']));

    $stmt = $db->prepare("INSERT INTO kutuphane (kitapAd, tur, yazarAd, yayınevi, sayfaSayisi, ozet) 
                          VALUES (:kitapAd, :tur, :yazarAd, :yayinevi, :sayfaSayisi, :ozet)");
    $stmt->execute([
        'kitapAd' => $kitapAd,
        'tur' => $tur,
        'yazarAd' => $yazarAd,
        'yayinevi' => $yayinevi,
        'sayfaSayisi' => $sayfaSayisi,
        'ozet' => $ozet
    ]);
    echo "Kayıt Başarıyla Eklendi.";
}

// Güncelleme İşlemi
if (isset($_POST['guncelle'])) {
    $id = (int)$_POST['id'];
    $kitapAd = htmlspecialchars(trim($_POST['kitapAd']));
    $tur = htmlspecialchars(trim($_POST['tur']));
    $yazarAd = htmlspecialchars(trim($_POST['yazarAd']));
    $yayinevi = htmlspecialchars(trim($_POST['yayınevi']));
    $sayfaSayisi = (int)$_POST['sayfaSayisi'];
    $ozet = htmlspecialchars(trim($_POST['ozet']));

    $stmt = $db->prepare("UPDATE kutuphane SET kitapAd=:kitapAd, tur=:tur, yazarAd=:yazarAd, 
                          yayınevi=:yayinevi, sayfaSayisi=:sayfaSayisi, ozet=:ozet WHERE id=:id");
    $stmt->execute([
        'kitapAd' => $kitapAd,
        'tur' => $tur,
        'yazarAd' => $yazarAd,
        'yayinevi' => $yayinevi,
        'sayfaSayisi' => $sayfaSayisi,
        'ozet' => $ozet,
        'id' => $id
    ]);
    echo "Kayıt Güncellendi.";
}

// Silme İşlemi
if (isset($_POST['sil'])) {
    $id = (int)$_POST['id'];
    $stmt = $db->prepare("DELETE FROM kutuphane WHERE id=:id");
    $stmt->execute(['id' => $id]);
    echo "Kayıt Silindi.";
}

// Listeleme İşlemi
$kayitlar = $db->query("SELECT * FROM kutuphane")->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1" width="700">
    <thead><tr><th>ID</th><th>Kitap Adı</th><th>Tür</th><th>Yazar</th><th>Yayınevi</th><th>Sayfa Sayısı</th><th>Özet</th><th>İşlemler</th></tr></thead>
    <tbody>
    <?php foreach ($kayitlar as $kayit): ?>
        <tr>
            <td><?= $kayit['id'] ?></td>
            <td><?= htmlspecialchars($kayit['kitapAd']) ?></td>
            <td><?= htmlspecialchars($kayit['tur']) ?></td>
            <td><?= htmlspecialchars($kayit['yazarAd']) ?></td>
            <td><?= htmlspecialchars($kayit['yayınevi']) ?></td>
            <td><?= $kayit['sayfaSayisi'] ?></td>
            <td><?= htmlspecialchars($kayit['ozet']) ?></td>
            <td>
                <form method="post" style="display:inline-block;">
                    <input type="hidden" name="id" value="<?= $kayit['id'] ?>">
                    <input type="submit" name="sil" value="Sil">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
