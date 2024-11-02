<?php 
# Döngülere kadar sınavdan sorumluyuz

if(isset($_POST["gonder"])){
   $gun=$_POST["gun"];
   switch($gun){
  
    case 1:echo"bugün günlerden pazartesi";
    break;
    case 2:echo"bugün günlerden salı";
    break;
    case 3:echo"bugün günlerden carsaba";
    break;
    case 4:echo"bugün günlerden persembe";
    break;
    case 5:echo"bugün günlerden cuma";
    break;
    case 6:echo"bugün günlerden cumartesi";
    break;
    case 7:echo"bugün günlerden pazar";
    break;

    default:echo"böyle bir gün yok";
   }



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case kullanımı</title>
</head>
<body>
    
<form action="" name="form" method="post">
Sayı Giriniz:
<input type="text" name="gun" id="">
<input type="submit" name="gonder" value="gönder">
</form>
</body>
</html>









<!--not:  switch case -->

<!-- else if'lerin çok olduğu durumlarda switch case kullanılır. 

switch($degisken){
    case durum1;
    durum1 sağlanırsa calışacak kod;
    break;
}
case durum2...


-->