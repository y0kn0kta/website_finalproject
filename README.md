# WEBSITE FOR BI 
## baglanti.php
Oluşturduğum her sayfada veri tabanı işlemlerini yapmak için $baglan tanımladım. 
## index.php
Kullandığım kütüphaneleri tanımladım:
* fontawesome: Ana sayfanın sağ üst kısmında kullandığım menü ikonları için.
* google fonts: Yazımın genel fontu için.
* owl carousel: Eğitimler kısmının yan tarafa doğru kaydırılması için.

menu adında section açtım. nav komutuyla ana sayfa, hakkımızda, eğitimler, ekip ve iletişim bölümlerine yönlendirdim.

anasayfa adında section açtım. İçerisine başlık ve içerik olarak iki kısım oluşturdum. Bu iki kısmı'da admin panelinden düzenleyebiliyorum. (Çoğu kısmı admin panelinden ayarlayacağım için require_once ile admin.php dosyamı içeri aktarıp $baglan ile bağlanıyorum. Yazımda tekrara düşmemek için admin panelinden kontrol edebiliyorum ifadesini kullanacağım.)

hakkımızda adında section açtım. sag ve sol adında iki div'e ayırdım. Altlarına resim eklemek için select kullandım ve resmin altına da yazı yazma işlemi gerçekleştirdim. Bu kısmı da admin panelinden kontrol edebiliyorum.

egitimler adından section açtım. class olarak owl carousel olduğunu belirttim. Admin panelinden kontrol edilebilir yaptım. if sorgum ile de veri eklemesini söyledim.
data-merge ile kartların arasına boşluk koydum. Eğitimin başlığı, içeriği, resmi admin panelinden kontrol edilebiliyor.

ekip adından section açtım. Bu bölümde üç profil oluşturdum. Bunların resmi, adı ve görevleri admin panelinden kontrol edilebiliyor.

Son olarak iletişim adında section oluşturdum. sagform ve solform olarak iki id'ye ayırdım. Ad, Soy Ad, Telefon Numarası, Email, Konu Başlığı ve Girilen metin inputları var. Girilen veriler oluşturacağım panel.php sayfasına gidecek. Kendi iletişim bilgilerimi ise kodun içinde yazdım. 

Görünüşünü ise style.css dosyasında yazdım. O bölümde açıklanacak bir şey yok. Renkler, yazı stilleri, fontu vs.
## admin.php
Bu bölüm ana sayfamda belirttiğim bölgeleri kod ile değil de elle değiştirebilmemizi sağlıyor. 

Burada yapılan tek şey phpmyadmin'de verdiğim sütun isimleri ile kodlamada verdiğim isimleri eşleştirmek ve veri ekleme, silme işlemi.
## panel.php
Burayı w3schools'dan aldım, kendime göre düzenledim.
İletişim bölümündeki bilgileri tutmak için customers adında table oluşturdum. if sorgusu ile veri tabanında veri bulunuyorsa çekmeyi sağladım. url ile giriş yapmayı kapattım. url'den giriş yapmaya çalışılınca cikis.php sayfasıne yönlendiriyor.
## panelgiris.php
Burası kullanıcı adı ve şifre istiyor. Alt taraftaki php koduyla bilgiler doğruysa içeri geçişe izin veriyor, yanlış ise hata veriyor.
