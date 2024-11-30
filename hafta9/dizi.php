<?php

// Dizilerin genel özellikleri 

// diziler tek ve çook boyutlu olabilir

// diziler array() anahtar kelimesi oluştuurlmaktadır. 

// dizide yer alan her eleman bir indis değeri olur 

// indisler değer girilmediği sürece otomaik olarak sıfırdan başlar.

// Önemli!
// dizidki bir kodu göndermek için echo yerine print_r ile önderiyoruz


// Örnek 1


// $bilgiler = array(
//     "Eğitim Bilgileri: ",
//         "ÖnLisans: "=>"İstanbul Gelişim Üniversitesi",
//         "Deneyim: ","öğrenci"=>"Gelişim Üniversitesi",
//         "Programlama Dilleri: ", "PHP","Javascript","CSS","Python"
// );
// echo "<pre>";
// print_r($bilgiler);
// echo "</pre>";

// echo $bilgiler[1];


// Count fonksiyonu ile sayma yapabilirz


// Örnek 2 
// Haftanın günlerini for ile yazdırma 

// $gunler=array("pazartesi","Salı","çarsamba","persembe","cuma","cumartesi","pazar");
// echo "<b>haftanın günleri</b>"."<br>";

// for($i=0;$i<count($gunler);$i++)
// {
//     echo $gunler[$i]."<br>";
// }



?>