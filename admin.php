<?php
    require_once("baglanti.php");
    if(isset($_POST["submit"]))
    {
        $baslik=$_POST["baslik"];
        $banner=$_POST["banner"];
        $ekle = "UPDATE yonetici SET baslik = '$baslik', banner = '$banner' WHERE  id='1'";
        $add = mysqli_query($baglan , $ekle);
        if($add) // ekleme işlemi gerçekleştiyse
        {
            echo "<script>alert('Mesajınız gönderildi!');</script>"; // mesaj gönderildi uyarısı
        }
        else
        {
            echo "<script>alert('Hata! Mesaj gönderilemedi.');</script>"; // hata mesajı
        }
    }
    if(isset($_POST["hakkimizdasubmit"]))
    {
        $hakkimizdasol=$_POST["hakkimizdasol"];
        $hakkimizdaharf=$_POST["hakkimizdaharf"];
        $hakkimizdasag=$_POST["hakkimizdasag"];
        $ekle = "UPDATE hakkimizda SET hakkimizdasol = '$hakkimizdasol', hakkimizdaharf = '$hakkimizdaharf', hakkimizdaSAG = '$hakkimizdasag' WHERE  id='1'";
        $add = mysqli_query($baglan , $ekle);
        if($add) // ekleme işlemi gerçekleştiyse
        {
            echo "<script>alert('Mesajınız gönderildi!');</script>"; // mesaj gönderildi uyarısı
        }
        else
        {
            echo "<script>alert('Hata! Mesaj gönderilemedi.');</script>"; // hata mesajı
        }
    }
    if(isset($_POST["resimsubmit"]))
    {
        $resim = $_FILES["resim"]['name'];
        $resim_tmp_name = $_FILES["resim"]["tmp_name"];
        $resim_folder = "img/".$resim;
        copy($resim_tmp_name, 'img/' . $resim);
        $resimyazi=$_POST["resimyazi"];
        $ekle = "UPDATE resim SET resimyolu = '$resim', resimyazi = '$resimyazi' WHERE  id='1'";
        $add = mysqli_query($baglan , $ekle);
        if($add) // ekleme işlemi gerçekleştiyse
        {
            echo "<script>alert('Mesajınız gönderildi!');</script>"; // mesaj gönderildi uyarısı
        }
        else
        {
            echo "<script>alert('Hata! Mesaj gönderilemedi.');</script>"; // hata mesajı
        }
    }
    if(isset($_POST["egitimsubmit"]))
    {
        $egitimresim = $_FILES["egitimresim"]['name'];
        $egitimresim_tmp_name = $_FILES["egitimresim"]["tmp_name"];
        $egitimresim_folder = "img/".$egitimresim;
        copy($egitimresim_tmp_name, 'img/' . $egitimresim);
        $egitimbaslik=$_POST["egitimbaslik"];
        $egitimyazi=$_POST["egitimyazi"];
        $ekle = ("INSERT INTO egitim (egitimresim, egitimbaslik, egitimyazi) VALUES ('$egitimresim', '$egitimbaslik', '$egitimyazi');");
        $add = mysqli_query($baglan , $ekle);
        if($add) // ekleme işlemi gerçekleştiyse
        {
            echo "<script>alert('Mesajınız gönderildi!');</script>"; // mesaj gönderildi uyarısı
        }
        else
        {
            echo "<script>alert('Hata! Mesaj gönderilemedi.');</script>"; // hata mesajı
        }
    }
    if(isset($_POST["ekipsubmit"]))
    {
        $ekipbirresim = $_FILES["ekipbirresim"]['name'];
        $ekipbirresim_tmp_name = $_FILES["ekipbirresim"]["tmp_name"];
        $ekipbirresim_folder = "img/".$ekipbirresim;
        copy($ekipbirresim_tmp_name, 'img/' . $ekipbirresim);
        $ekipikiresim = $_FILES["ekipikiresim"]['name'];
        $ekipikiresim_tmp_name = $_FILES["ekipikiresim"]["tmp_name"];
        $ekipikiresim_folder = "img/".$ekipikiresim;
        copy($ekipikiresim_tmp_name, 'img/' . $ekipikiresim);

        $ekipucresim = $_FILES["ekipucresim"]['name'];
        $ekipucresim_tmp_name = $_FILES["ekipucresim"]["tmp_name"];
        $ekipucresim_folder = "img/".$ekipucresim;
        copy($ekipucresim_tmp_name, 'img/' . $ekipucresim);

        $ekipbirbaslik=$_POST["ekipbirbaslik"];
        $ekipbiryazi=$_POST["ekipbiryazi"];

        $ekipikibaslik=$_POST["ekipikibaslik"];
        $ekipikiyazi=$_POST["ekipikiyazi"];

        $ekipucbaslik=$_POST["ekipucbaslik"];
        $ekipucyazi=$_POST["ekipucyazi"];

        $eklebir = "UPDATE ekip SET ekipresim= '$ekipbirresim',ekipisim='$ekipbirbaslik', ekipyazi = '$ekipbiryazi' WHERE  id='1'";
        $ekleiki = "UPDATE ekip SET ekipresim = '$ekipikiresim',ekipisim='$ekipikibaslik', ekipyazi = '$ekipikiyazi' WHERE  id='2'";
        $ekleuc = "UPDATE ekip SET ekipresim = '$ekipucresim',ekipisim='$ekipucbaslik', ekipyazi = '$ekipucyazi' WHERE  id='3'";
        
        $addbir = mysqli_query($baglan , $eklebir);
        $addiki = mysqli_query($baglan , $ekleiki);
        $adduc = mysqli_query($baglan , $ekleuc);
        if($addbir and $addiki and $adduc) // ekleme işlemi gerçekleştiyse
        {
            echo "<script>alert('Mesajınız gönderildi!');</script>"; // mesaj gönderildi uyarısı
        }
        else
        {
            echo "<script>alert('Hata! Mesaj gönderilemedi.');</script>"; // hata mesajı
        }
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="file"] {
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 12px;
            background-color: #007bff;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ccc;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        /* Örnek Ek Stiller */

        /* Form alanlarının genişliğini ayarlayın */
        input[type="text"],
        input[type="file"] {
            width: 100%;
        }

        /* Gönder düğmelerinin genişliğini ayarlayın */
        button {
            width: 100%;
        }

        /* H2 başlıklarının altındaki boşlukları azaltın */
        h2 {
            margin-bottom: 5px;
        }

        /* Form alanlarını yan yana yerleştirin */
        form input[type="text"],
        form button {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
        }

        /* H2 başlıklarının altındaki yatay çizgileri kalınlaştırın */
        hr {
            border-top-width: 2px;
        }

        /* Panel linkinin stilini düzenleyin */
        a.panel-link {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h2>Admin Paneli</h2>
    <hr><a href="panel.php">Panel</a>
    <hr>
    <form action="admin.php" method="post">
        Başlık:<input type="text" name="baslik">
        Banner:<input type="text" name="banner">
        <button name="submit">gönder</button>
    </form>
    <hr>
    <h2>Hakkımızda Bölümü</h2>
    <form action="admin.php" method="post">
        Hakkımızda Sol:<input type="text" name="hakkimizdasol">
        Hakkımzda Harf:<input type="text" name="hakkimizdaharf">
        Hakkımızda Sağ:<input type="text" name="hakkimizdasag">
        <button name="hakkimizdasubmit">gönder</button>
    </form>
    <hr>
    <h2>RESİM Bölümü</h2>
    <form action="admin.php" method="post" enctype="multipart/form-data">
        Resim:<input type="file" name="resim" accept="image/png, image/jpeg, image/jpg" style="border:0;">
        Resim Yazı:<input type="text" name="resimyazi">
        <button name="resimsubmit">gönder</button>
    </form>
    <hr>
    <h2>EĞİTİM</h2>
    <form action="admin.php" method="post" enctype="multipart/form-data">
        Eğitim Resim<input type="file" name="egitimresim" accept="image/png, image/jpeg, image/jpg" style="border:0;">
        Eğitim Başlık:<input type="text" name="egitimbaslik">
        Eğitim Yazı:<input type="text" name="egitimyazi">
        <button name="egitimsubmit">gönder</button>
    </form>
    <hr>
    <h2>EKİP</h2>
    <form action="admin.php" method="post" enctype="multipart/form-data">
        Ekip 1 Resim<input type="file" name="ekipbirresim" accept="image/png, image/jpeg, image/jpg" style="border:0;"><br>
        EKİP 1 Başlık:<input type="text" name="ekipbirbaslik"><br>
        EKİP 1 Yazı:<input type="text" name="ekipbiryazi"><br>
        Ekip 2 Resim<input type="file" name="ekipikiresim" accept="image/png, image/jpeg, image/jpg" style="border:0;"><br>
        EKİP 2 Başlık:<input type="text" name="ekipikibaslik"><br>
        EKİP 2 Yazı:<input type="text" name="ekipikiyazi"><br>
        Ekip 3 Resim<input type="file" name="ekipucresim" accept="image/png, image/jpeg, image/jpg" style="border:0;"><br>
        EKİP 3 Başlık:<input type="text" name="ekipucbaslik"><br>
        EKİP 3 Yazı:<input type="text" name="ekipucyazi"><br>
        <button name="ekipsubmit">gönder</button><br>
    </form>
</body>
</html>