<?php 

// döngüler

// while Döngüsü

// if ifadesi ile çok benzer, while de sonsuz dögüye girmek çok kolay. 

// 1-10 a kadar sayıları yazdırma
// $sayi=1;
// while($sayi<=10)
// {
//     echo "sayı: ".$sayi."<br>";
//     $sayi++;
// }


// 1den 10 a kadar sayıları aralarında artı olacak şekilde yazıyoruz ve bunların toplamlarını da yazıyoruz.

// $sayi=1;
// echo $sayi;
// $toplam=$sayi;
// while($sayi<10)
// {
//     $sayi++;
//     $toplam+=$sayi;
//     echo "+".$sayi;
   
// }
// echo "=".$toplam;



// DO WHİLE DÖNGÜSÜ

// ne olursa olsun bir kere çalışır

// do 
// {
//     $sayi++;
//     echo $sayi."-"."ismail"."<br>";
   

// }
// while($sayi<=5);

// 30 sayısının bölenlerini yazdırma
// $sayi=30;

// $a=1;

// do
// {
//     if($sayi%$a==0)
//     {
//         echo $a." sayısı ".$sayi."sayısının bir bölenidir."."<br>";
//     }
//     $a++;
// }

// while($a<=$sayi)



// FOREACH DÖNGÜSÜ

// haftanın günleri

// $gunler = array("pazartesi","salı","Çarsamba","persembe","cuma","cumartesi","pazar");

// foreach($gunler as $gun)
// {
//     echo $gun."<br>";
// }

// not: foreach sadece dizeyle kullanılır.
// NOT: DÖNGÜLERİ SAYFA SAYFA AYIR SONRASINDA GİTHUBA YÜKLE

// albedeki kalın ve ince ünlü harfleri foreach döngüsü ile yazdır. 

// $kalinveInceUnluler=array("a","ı","o","u","e","i","ö","ü");

// echo "Alfabedeki kalın ve ince ünlüler listesi"."<br>";

// foreach($kalinveInceUnluler as $alfabe=>$sira);
// {
//     echo $alfabe." : ".$sira."<br>";
// }

// for döngüsü 

// for ($i=0;$i<=10;$i++)
// {
//     echo "<br>Gelişim üniversitesi</b><u>Web tasarımı ve kodlama programı</u>"."<br>";
// }





?>