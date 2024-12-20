<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="700">
        <form action="listeleme.php" method="post">
            <thead>
                Kütüphane İşlemleri
            </thead>
            <tbody >
                <tr>
                    <td>Kitabın Adı</td>
                    <td><input type="text" name="kitapAd"></td>
                </tr>
                <tr>
                    <td>Kitabın Türü</td>
                    <td><select name="tur" id="">
                        <option value="roman">roman</option>
                        <option value="hikaye">hikaye</option>
                        <option value="polisiye">polisiye</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Yazarın Adı</td>
                    <td><input type="text" name="yazarAd"></td>
                </tr>
                <tr>
                    <td>Yayınevi</td>
                    <td><input type="text" name="yayınevi"></td>
                </tr>
                <tr>
                    <td>Sayfa Sayısı</td>
                    <td><input type="text" name="sayfaSayisi"></td>
                </tr>
                <tr>
                    <td>Özet</td>
                    <td><textarea name="ozet" id="" cols="20" rows="5"></textarea></td>
                </tr>
                <tr>
                <td colspan="3"><input type="submit" value="kaydet" name="kaydet">
                <input type="submit" value="güncelle" name="kaydet">
                <input type="submit" value="sil" name="kaydet">
                <input type="submit" value="listeme" name="listeme">
            </td>
            </tr>
            </tbody>
        </form>
    </table>
</body>
</html>