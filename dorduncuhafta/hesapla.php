<?php 
if(isset($_POST["buton"])){
    $kadi=$_POST["name"];
    $ksoyad=$_POST["soyad"];
    $kvize=$_POST["vize"];
    $kfinal=$_POST["final"];
    $kproje=$_POST["proje"];
    $ortalama=($kvize*0.5)+($kfinal*0.25)+($kproje*0.25);
    echo "Merhaba ".$kadi." ".$ksoyad."<br>"."Vize Notun: ".$kvize."<br>"."Final :".$kfinal."<br>"."Proje notun: ".$kproje."<br>"."ortalaman: ".$ortalama."<br>";
    if($ortalama>40 && $kproje>=40)
    {
        echo "Tebrikler ".$ortalama."ortalama ile dersi tamamladın";
    }
    else
    {
        echo "Malesef".$ortalama."ile kaldınız";
    }
}



?>