<?php 


/*
$ad= "ismail";
$soyad ="hız";
echo $ad." ".$soyad;
*/

#gettype() fonksiyonun türünü getirmek için kullanırız

#veri türünü ve değerini görmek için var_dump() kullanıyoruz

# var_dump html etiketleriyle uyumlu çalışmıyor 
/*

$degisken = true;
$degisken2= 3;
$degisken3= 5.6;
$degisken4="ismail";
$degisken5 = array("red", "blue", "yellow");
$degisken6 = new stdClass;
$degisken7 = NULL;
$degisken8 = "30";
/*

/*
echo gettype($degisken)."<br>";
gettype($degisken2)."<br>";
gettype($degisken3)."<br>";
gettype($degisken4)."<br>";
gettype($degisken5)."<br>";
gettype($degisken6)."<br>";
gettype($degisken7)."<br>";
gettype($degisken8)."<br>";
*/
/*
echo var_dump($degisken)."<br>";
var_dump($degisken2)."<br>";
var_dump($degisken3)."<br>";
var_dump($degisken4)."<br>";
var_dump($degisken5)."<br>";
var_dump($degisken6)."<br>";
var_dump($degisken7)."<br>";
var_dump($degisken8)."<br>";
*/
/*
echo $degisken."<br>";
echo $degisken2."<br>";
echo $degisken3."<br>";
echo $degisken4."<br>";
echo $degisken5."<br>";
echo $degisken6."<br>";
echo $degisken7."<br>";
echo $degisken8."<br>";
*/

//gettype ekran görüntüsü 

/*
$sayi=55;
echo "<b>birinci değişkenin adı:\$sayi</b>"."<br>"."Değeri: ".$sayi."<br>"."Türü: ".gettype($sayi)."<br>";

$adi = "ismail";
echo "<b> ikinci değiskenin adı:\$adi </b>"."<br>"."Değeri: ".$adi."<br>"."Türü ".gettype($adi)."<br>";

$ondalik = 5.1234;
echo "<b> ücüncü değişkenin adı:\$ondalık </b>"."<br>"."Değeri: ".$ondalik."<br>"."Türü: ".gettype($ondalık)."<br>"; 

$mantiksal = 1;
echo "<b> dördüncü değişkenin adı:\$mantiksal </b>"."<br>"."Değeri: ".$mantiksal."<br>"."Türü: ".gettype($mantiksal)."<br>"; 
*/


// /adi :kaçış operatörü

// değişkenler arasında tür ataması yapmak için settype() kullanılır. settype($a, "integer")

/*
$a = "32";

settype($a, "integer");
var_dump($a); # Not: hem sayı değerini hemde integer değerini gösterdi
echo gettype($a)."<br>"; 


$b =32;
settype($b,"string");
var_dump($b);
echo gettype($b)."<br>";

$c=true;
settype($c, "integer");
var_dump($c);
echo gettype($c)."<br>";
*/

# dosya dizilerini kaydederken sabit değer kullanılır. sitelerde kullanıcı adı ve sifreleri girişlerinde sabit değişken kullanılır

#  sabit tnaımlamak için define() fonksiyonu veya const kullanılır.

// PHP SABİTLRİ
/*
echo "<h2> PHP sabitleri </h2>"."<br>".
"kodun bulunduğu yer: ".(__LINE__)."<br>".
"Dosyanın bulunduğu yer: ".(__FILE__)."<br>".
"Sunucudaki PHP versiyonu: ".phpversion()."<br>".
"sunucudaki isletim sistemi :".(PHP_OS)."<br>".
"Dosyanın bulunduğu dizim: ".(__DIR__); 
*/





?>
