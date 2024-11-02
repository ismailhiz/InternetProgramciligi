<?php
if(isset($_POST["gonder"])) {
    $sayi1 = $_POST["birincisayi"];
    $sayi2 = $_POST["ikincisayi"];
    $islem = $_POST["islem"];

    switch($islem) {
        case "toplama":
            $sonuc = $sayi1 + $sayi2;
            echo "Toplama işleminin sonucu: " . $sonuc;
            break;
        
        case "cikarma":
            $sonuc = $sayi1 - $sayi2;
            echo "Çıkarma işleminin sonucu: " . $sonuc;
            break;
        
        case "carpma":
            $sonuc = $sayi1 * $sayi2;
            echo "Çarpma işleminin sonucu: " . $sonuc;
            break;
        
        case "bolme":
            if ($sayi2 != 0) {
                $sonuc = $sayi1 / $sayi2;
                echo "Bölme işleminin sonucu: " . $sonuc;
            } else {
                echo "Hata: Sıfıra bölme işlemi yapılamaz!";
            }
            break;
        
        default:
            echo "Geçersiz işlem seçildi.";
    }
} else {
    echo "Form gönderilmedi.";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>
<body>
    <h1>Switch ile Hesap Makinesi</h1>
    <form action="" method="post" name="form">
        <table>
            <tbody>
                <tr>
                    <td>1. Sayıyı Giriniz:</td>
                    <td><input type="text" name="birincisayi" required></td>
                </tr>
                <tr>
                    <td>2. Sayıyı Giriniz:</td>
                    <td><input type="text" name="ikincisayi" required></td>
                </tr>
                <tr>
                    <td>Yapacağınız İşlemi Seçin:</td>
                    <td>
                        <select name="islem" required>
                            <option value="toplama">Toplama</option>
                            <option value="cikarma">Çıkarma</option>
                            <option value="carpma">Çarpma</option>
                            <option value="bolme">Bölme</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="gonder" value="Gönder"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
