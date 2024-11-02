<?php 
if(isset($_POST["gonder"])){
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$cinsiyet=$_POST["cinsiyet"];
$dogumyili=$_POST["dogumyili"];
$boyunuz=$_POST["boyunuz"];
$kilonuz=$_POST["kilonuz"];
$bki=$kilonuz / ($boyunuz*$boyunuz);
echo"merhaba ".$ad." ".$soyad."<br>"."yaşınız: ".$dogumyili."<br>"."Beden kitle indeksi ölçünüz: ".$bki."<br>";

if($bki<18){
   $durum="zayıf kategorisinde";
}
else if($bki>19 && $bki<25){
    $durum="normal";
}
else if( $bki> 25 && $bki< 29){
 $durum="kilolu";
}
else{
    $durum="obez";
}

 }

?>

<table>
    <form action="" method="post" name="form">
    <tbody>
        <tr>
            <td><?php echo $durum;?></td>
        </tr>
    </tbody>
    </form>
</table>