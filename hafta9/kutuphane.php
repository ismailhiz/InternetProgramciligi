<?php 
$kutuphane=[
    [ 
    "kitabın Adı"=>"Nutuk",
    "kitabın Yazarı:"=>"Mustafa Kemal Atatürk",
    "yayınevi"=>"yapı Kredi Yayınları"
],
[
    "kitabın Adı"=>"küçük prens",
    "kitabın Yazarı:"=>"antoni de saint...",
    "yayınevi"=>"can cocuk yayınları"
],
[

    "kitabın Adı"=>"Nutuk",
    "kitabın Yazarı:"=>"Mustafa Kemal Atatürk",
    "yayınevi"=>"yapı Kredi Yayınları"
]
];

foreach($kutuphane as $kitap)
{
    foreach($kitap as $anahtar=>$deger){
        echo $anahtar."-".$deger."<br>";
    }
}

?>