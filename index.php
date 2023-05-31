<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="css/style.css">
    <!--fontawesome kütüphanesi-->
    <script src="https://kit.fontawesome.com/9b585b8358.js" crossorigin="anonymous"></script>
    <!--googlefonts kütüphanesi-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <!--owlcarousel-->
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    <section id="menu"> <!--bölümler-->
        <div id="logo">CLOUDNES</div>
        <nav> <!--yönlendirme-->
            <a href="admin.php">Admin</a>
            <a href="#anasayfa"><i class="fa-solid fa-house ikon"></i>Ana Sayfa</a>
            <a href="#hakkimizda"><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href="#egitimler"><i class="fa-solid fa-graduation-cap ikon"></i>Eğitimler</a>
            <a href="#ekip"><i class="fa-solid fa-people-group ikon"></i>Ekip</a>
            <a href="#iletisim"><i class="fa-solid fa-map-pin ikon"></i>İletişim</a>
            <a href="panel.php">Panel</a>
        </nav>
    </section>
    <section id="anasayfa">
        <div id="black"> <!--arkaplan siyah perde-->
        </div>
        <div id="icerik">
            <?php require_once("baglanti.php");
                $select  = mysqli_query($baglan, "SELECT * FROM yonetici WHERE id = '1'");
                while ($row = mysqli_fetch_array($select)) {
            ?>
        <h2><?php echo $row['baslik']; ?></h2>
        
            <hr width="300" align="left">
            <p><?php echo $row['banner']; ?></p>
            <?php
                }
        ?>
        </div>
    </section>
    <section id="hakkimizda">
    <?php require_once("baglanti.php");
                $select  = mysqli_query($baglan, "SELECT * FROM hakkimizda WHERE id = '1'");
                while ($row = mysqli_fetch_array($select)) {
            ?>
        <h3>HAKKIMIZDA</h3>
        <div class="container"> <!--kontrolün kolaylaşması için container-->
            <div id="sol">
                <h5 id="h5sol"><?php echo $row['hakkimizdasol']; ?></h5>
            </div>
            <div id="sag">
                <span><?php echo $row['hakkimizdaharf']; ?></span> 
                <p id="psag"><?php echo $row['hakkimizdasag']; ?></p>
                <?php
                }
        ?>
            </div>
            <?php require_once("baglanti.php");
                $select  = mysqli_query($baglan, "SELECT * FROM resim WHERE id = '1'");
                while ($row = mysqli_fetch_array($select)) {
            ?>
            <img src="img/<?php echo $row['resimyolu']; ?>" alt=""
            class="img-fluid mt100" style="height: 600px; width: 700px;">
            <p id="pson"><?php echo $row['resimyazi']; ?></p>
            <?php
                }
        ?>
        </div> 
    </section>
    <section id="egitimler">
        <div class="contailner">
            <h3>EĞİTİMLER</h3>
            <div class="owl-carousel
            owl-theme">
            <?php require_once("baglanti.php");
                $select  = "SELECT * FROM egitim";
                $result = mysqli_query($baglan, $select);
                while($row = mysqli_fetch_array($result)){
                    if(mysqli_num_rows($result) > 0 ){
            ?>
                <div class="card
                item" data-merge="1.5"> <!--kartların arasına boşluk-->
                    <img src="img/<?php echo $row['egitimresim']; ?>" alt=""
                    class="img-fluid" style="height: 200px; width: 320px; ">
                    
                    <h5 class="baslikcard"><?php echo $row['egitimbaslik']; ?></h5>
                    <p class="cardp"><?php echo $row['egitimyazi']; ?></p>
                </div>
                <?php
                }
            }
        ?>
            </div>
        </div>
    </section>
    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">EKİP</h3>
            <?php require_once("baglanti.php");
                $select  = mysqli_query($baglan, "SELECT * FROM ekip WHERE id = '1'");
                while ($row = mysqli_fetch_array($select)) {
            ?>
            <div class="sutun-sol-sag">
                <img src="img/<?php echo $row['ekipresim']; ?>" alt="" class="img-fluid oval">
                <h4 class="ekipisim"><?php echo $row['ekipisim']; ?></h4>
                <p class="ekipp">
                <?php echo $row['ekipyazi']; ?>
                </p>
            </div>
            <?php
                }
        ?>
         <?php require_once("baglanti.php");
                $select  = mysqli_query($baglan, "SELECT * FROM ekip WHERE id = '2'");
                while ($row = mysqli_fetch_array($select)) {
            ?>
            <div class="sutun">
                <img src="img/<?php echo $row['ekipresim']; ?>" alt="" class="img-fluid oval">
                <h4 class="ekipisim"><?php echo $row['ekipisim']; ?></h4>
                <p class="ekipp">
                <?php echo $row['ekipyazi']; ?>
                </p>
            </div>
            <?php
                }
        ?>
         <?php require_once("baglanti.php");
                $select  = mysqli_query($baglan, "SELECT * FROM ekip WHERE id = '3'");
                while ($row = mysqli_fetch_array($select)) {
            ?>
            <div class="sutun-sol-sag">
                <img src="img/<?php echo $row['ekipresim']; ?>" alt="" class="img-fluid oval">
                <h4 class="ekipisim"><?php echo $row['ekipisim']; ?></h4>
                <p class="ekipp">
                <?php echo $row['ekipyazi']; ?>
                </p>
            </div>
            <?php
                }
        ?>
        </div>
    </section>
    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İLETİŞİM</h3>
            <form action="index.php" method="post"> <!--verilerin gideceği-->
            <div id="iletisimopak">
                <div id="formgroup">
                     <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                     </div>
                     <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adres" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                     </div>
                     <textarea name="mesaj" id="" cols="30" placeholder="Mesajınızı Girin" rows="10" required class="form-control"></textarea>
                     <input type="submit" value="Gönder" name="gonder">
                </div>
                <div id="adres">
                    <h4 id="adresbaslik">Adres:</h4>
                    <p class="adresp">Gazi Mahallesi</p>
                    <p class="adresp">Aşık Veysel Caddesi</p>
                    <p class="adresp">2002 sokak No:34</p>
                    <p class="adresp">İstanbul/Sultangazi</p>
                    <p class="adresp">0539 625 50 45</p>
                    <p class="adresp">enesdesouza@gmail.com</p>
                </div>
            </div>
            </form>
            <footer>
                <div id="copyright">2023 | Tüm Hakları Saklıdır</div>
                <div id="socialfooter">
                    <a href="#"><i class="fa-brands fa-facebook-f social"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter social"></i></a>
                </div>
                <a href="#menu">
                    <i class="fa-sharp fa-solid fa-angle-up" id="up"></i>
                </a>
            </footer>
        </div>
    </section>
<!--jquery kütüphanesi-->
<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script>
<script src="owl/script.js"></script>
</body>
</html>
<?php
require_once("baglanti.php");
if(isset($_POST["gonder"])){
    $ad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $mail=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    if($ad=="" or $telefon=="" or $mail=="" or $konu=="" or $mesaj==""){
        echo "Boş alan bırakmayın.";
    }
    else
    {
        $ekle = ("INSERT INTO iletisim (adsoyad, telefon, email ,konu, mesaj ) VALUES ('$ad', '$telefon', '$mail' , '$konu', '$mesaj');");
        $add = mysqli_query($baglan , $ekle);
        if($add)
        {
            echo "Başarlı.";
        }
    }
}
?>