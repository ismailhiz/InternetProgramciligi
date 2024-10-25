<?php 
// KARAR YAPISI
// $sayi=7;

// echo "sayıdegeri: ".$sayi."<br>";
// if($sayi>3 && $sayi<10)
// {
//     echo "sayi değeri 3 den büyük 10 dan küçüktür.";
// }

// else if kullanımı

// $kullaniciadi="ismail";
// $sifre=123456;
// echo "kullaniciadi: ".$kullaniciadi."<br>";
// echo "sifreniz :".$sifre."<br>";
// if($kullaniciadi=="ismail" && $sifre==123456){
//     echo "giriş yaptınız";
// }
// else if($kullaniciadi=="ismail" || $sifre==4231)
// {
// echo "sifreniz yanlış";
// }
// else if($kullaniciadi=="ahmet" || $sifre==123456)
// {
//     echo "kullanıcı adınız yanlış";
// }
// else{
// echo "tekrar giriniz";
// }


//  TERNARY YAPISI (önemli satır kodunu azaltarak hızlı sayfalar elde ederiz)

//  else ve else if den kaçabiliyoruz bunu yaparak

//  ifade(koşul)? (dogruysa çalışacak alan):(yanlıssa çalışacak alan)

// $sayi=10;
// echo"Tanımlanmış sayı değeri: ".$sayi."<br>";
// echo ($sayi>10)?"sayi 10'dan büyük":"Sayı 10'dan küçük";
?>

<!-- 
<html>    
<head>    
</head>    
<body>    
<h3>Sayının pozitif, negatif ve tek,çift olma durumu kontrolü</h3>
<form action="" method="POST">
    <label for="name">Sayı Giriniz:</label>
    <input type="text" name="name">
    <input type="submit" name="gonder">
</form>
</body>    
</html>     -->

<?php 

//  if(isset($_POST["gonder"]))
//  {
//      $sayi=$_POST["name"];
//      if($sayi>0 && $sayi%2==0)
//      {
//          echo "sayı hem pozitif hem negatif";
//      }
//      else if($sayi>0 && $sayi%2==1)
//      {
//          echo "sayı hem pozitif hemde negatiftir.";
//      }
//      else if($sayi<0 && $sayi%2==0)
//      {
//          echo "sayı hem negatif hem cifttir";
//      }
//         else if($sayi<0 && $sayi%2==-1)
//      {
//          echo "sayı hem negatif hem tektir.";
//      }
//  }
// ?> 

<!-- 
<html>
    <head></head>
<body>
<form action="hesapla.php" name="form" method="POST">
<table>
    <tr>
        <td>Adı:</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Soyad:</td>
        <td><input type="text" name="soyad"></td>
    </tr>
    <tr>
        <td>Vize notunuzu giriniz(%50):</td>
        <td><input type="text" name="vize"></td>
    </tr>
    <tr>
        <td>final notunuzu giriniz(%25):</td>
        <td><input type="text" name="final"></td>
    </tr>
    <tr>
        <td>Proje notunuzu giriniz(%25):</td>
        <td><input type="text" name="proje"></td>
    </tr>
</table>
<input type="submit" name="buton">

</form>
</body>
</html> -->

<?php 


?>