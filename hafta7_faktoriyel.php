


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" name="form">
    <input type="text" name="sayi">
    <input type="submit" name="gonder">
</form>
</body>
</html>



<?php 

if(isset($_POST["gonder"])){
    $ksayi=$_POST["sayi"];
    if($ksayi<0){
        echo "amk salağı eksi sayının faktoriyel mi olur";
    }
    else {
        $faktoriyel=1;
        for($i=1;$i<=$ksayi;$i++)
        {
            $faktoriyel=$faktoriyel*$i;
        }
            echo $ksayi."nın faktörü".$faktoriyel;
    }

}


?>
