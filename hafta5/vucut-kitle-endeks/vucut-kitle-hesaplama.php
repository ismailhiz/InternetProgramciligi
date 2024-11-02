<?php ?>

<h1>
    Vucut kitle endeksi
</h1>

<form action="hafta_5bki.php" method="post" name="form">
    
    <table>
        <tbody>
        <tr>
            <td><label for="adınız">adınız</label> </td>
           <td><input type="text" name="ad"></td>
        </tr>
        <tr>
           <td><label for="">Soyadınız</label> </td>
           <td><input type="text"name="soyad" ></td>
        </tr>
        <tr>
           <td><label for="">Cinsiyetiniz</label> </td>
           <td><input type="radio" value="kadın" name="cinsiyet">kadın <input type="radio" value="erkek" name="cinsiyet">erkek</td>
        </tr>
        <tr>
           <td><label for="" >Doğum yılı</label> </td>
           <td>
            <select name="dogumyili" id="">
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
            </select>
           </td>
        </tr>
        <tr>
           <td><label for="">Boyunuz</label> </td>
           <td><input type="text" name="boyunuz"></td>
        </tr>
        <tr>
           <td><label for="">kilonuz</label> </td>
           <td><input type="number" name="kilonuz"></td>
        </tr>
        <tr>
           <td colspan="2"><input type="submit" name="gonder"></input></td>
        </tr>
        </tbody>
    </table>
   
    
    

</form>