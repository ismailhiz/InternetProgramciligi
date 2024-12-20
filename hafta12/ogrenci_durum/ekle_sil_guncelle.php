<?php
        
        // Veritabanı Bağlama
        try {
            $db = new PDO("mysql:host=localhost; dbname=ornek; charset=utf8","root", "");
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

        // Kaydetme Sistemi
        if(isset($_POST["kaydet"])) {
            $tc = $_POST["tc"];
            $ad = $_POST["ad"];
            $soyad = $_POST["soyad"];

            if($db) {
                echo "Veritabanı Bağlantısı Gerçekleşti."."<br>";
                $guncelle = $db->exec("UPDATE FROM ogrencidurum (ad, soyad, tc) VALUES ('$ad', '$soyad', '$tc')");
                if ($kaydet) {
                    echo "Kayıt Ekleme Başarılı.";
                }
                else {
                    echo "Kayıt Ekleme Başarısız.";
                }
            }
        }

    ?>