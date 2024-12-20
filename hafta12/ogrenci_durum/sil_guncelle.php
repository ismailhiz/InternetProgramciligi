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
                $sil = $db->exec("DELETE FROM ogrencidurum WHERE ad='$kadi'");
                if ($sil) 
                {
                    echo "Silme işlemi başarı ile tamamlandı.";
                }
                else {
                    echo "Silme işlemi başarısız";
                }
            }
        }

    ?>