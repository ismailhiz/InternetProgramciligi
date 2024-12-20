<?php

// Veritabanı Bağlantısı
try {
    $db = new PDO("mysql:host=localhost;dbname=ornek;charset=utf8", "root", "");
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}

// Kaydetme Sistemi
if (isset($_POST["kaydet"])) {
    $tc = htmlspecialchars(trim($_POST["tc"]));
    $ad = htmlspecialchars(trim($_POST["ad"]));
    $soyad = htmlspecialchars(trim($_POST["soyad"]));

    if ($db) {
        echo "Veritabanı Bağlantısı Gerçekleşti.<br>";

        $stmt = $db->prepare("INSERT INTO ogrencidurum (ad, soyad, tc) VALUES (:ad, :soyad, :tc)");
        $stmt->bindParam(':ad', $ad);
        $stmt->bindParam(':soyad', $soyad);
        $stmt->bindParam(':tc', $tc);

        if ($stmt->execute()) {
            echo "Kayıt Ekleme Başarılı.";
        } else {
            echo "Kayıt Ekleme Başarısız.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
     <form action="">
        <tbody>
            <tr>
                <td>TC Numarası</td>
                <td><input type="text" name="tc"></td>
            </tr>
            <tr>
            <td>Adı:</td>
            <td><input type="text" name="ad"></td>
            </tr>
            <tr>
                <td>Soyadı</td>
                <td><input type="text" name="soyad"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="kaydet" name="kaydet">
                <input type="submit" value="güncelle" name="kaydet">
                <input type="submit" value="sil" name="kaydet"></td>
            </tr>
        </tbody>
     </form>
    </table>
</body>
</html>