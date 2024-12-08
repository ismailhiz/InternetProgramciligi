<?php 

// BİRİNCİ ÖRNEK
echo "Array_unshift() kullanımı"."<br>";
$diller=array("php","C#");
array_unshift($diller,"javascript","python");
print_r($diller);
echo "array_shift() kullanımı"."<br>";
array_shift($diller);
print_r($diller);
echo "Array_push() kullanımı"."<br>";
array_push($diller,"Vue","Laravel");
print_r($diller);
echo "<h3>Array_pop kullanımı<h3>"."<br>";
array_pop($diller);
print_r($diller);
echo "<h3>Unset Kullanımı<h3>";
unset($diller["2"]);



// İKİNCİ ÖRNEK

echo "<h3> Dizi elemanlarını Birleştirme</h3>";
$marmara_bolge=array("Balıkesir","İstanbul","Bursa");
$ege_bolge=array("izmir","Manisa","Aydın");
$tum_iller=array_merge($marmara_bolge,$ege_bolge);
echo "<pre>";
print_r($tum_iller);
echo"</pre>";

// ücüncü örnek

echo "<h3>Dizideki orak eleman<h3>";
$dizi1=array("araba","Kalem","ev");
$dizi2=array("araba","Kalem","masa");
$dizi3=array("kalem","araba","sandalye");
$dizi4=array("masa","Kalem","araba");
$ortak_bul=array_intersect($dizi1,$dizi2,$dizi3,$dizi4);
echo "<pre>";
print_r($ortak_bul);
echo "</pre>";

// dördüncü örnek

// Dizi elemanlarını tke seferde cıktı alma

echo "<h3>İmplode kullanımı<h3>";
$programlamadilleri=array("PHP","HTML","CSS","Javascript");
$duzenle=implode(" | ",$programlamadilleri);
echo $duzenle;

// besinci örnek

// Dizi elemanlarından rastgele Seçim

echo "<h3>diziden rastgele eleman seçme </h3>";

$sehir=array("Balıkesir","İstanbul","İzmir","Van","Erzurum","Muğla");
$rastgele=array_rand($sehir);
echo $sehir[$rastgele];

// altıncı örnek

echo "<h3> Dizilerde Sıralama</h3>";
$iller=array(
    "Ankara"=>6,
    "İstanbul"=>34,
    "İzmir"=>35,
    "Balıkesir"=>10,
    "Kocaeli"=>41,
    "Kırklareli"=>39,
);

echo "<h5> dizi elemanlarnnı anahtar dğeerlerini koruyarak küçükten büyüpüe sıralaıyn</h5>";
echo"<pre>";
asort($iller);
print_r($iller);
echo "<pre>";

echo "<h5> dizi elemanlarnnı anahtar dğeerlerini koruyarak büyükten küçüğe sıralaıyn</h5>";
echo"<pre>";
arsort($iller);
print_r($iller);
echo "<pre>";


// <!-- örnek 6-->


echo "<h5> Dizi elemanlarını büyükten üçüpe sıralanması</h5>";
echo"<pre>";
rsort($sayi);
echo"</pre>";

echo "<h5> Dizi elemanlarını random sıralanması</h5>";
echo"<pre>";
shuffle($sayi);
echo"</pre>";

echo "<h5> Dizi elemanlarını indis değerine göre sıralanması</h5>";
echo"<pre>";
ksort($sayi);
echo"</pre>";

echo "<h5> Dizi elemanlarını indis değerine göre büyükten küçüğe sıralanması</h5>";
echo"<pre>";
krsort($sayi);
echo"</pre>";


// <!-- Dizi elemanlarını tersine çevirme -->

echo "<h3> Dizi elemanlarını tersine cevirme <h3>";

$isim=array("Çisem", "Tuğba","Mehmet","Aysun","Bilal");
$ters_cevir=array_reverse($isim);
echo "İlk hali"."<br>";
echo "<pre>";
print_r($isim);
echo "</pre>";
echo "Ters hali"."<br>";
echo "<pre>";
print_r($ters_cevir);
echo "</pre>";










?>







<!-- fatıma Zehra hız daha yakıştı sanki :) -->