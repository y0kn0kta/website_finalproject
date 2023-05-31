<!--w3schools-->
<!DOCTYPE html>
<html>
<head>
  <title>Panel</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>ad soyad</th>
    <th>telefon</th>
    <th>email</th>
    <th>konu</th>
    <th>mesaj</th>
  </tr>
  <?php
  session_start();
  if($_SESSION["user"]=="") //urlden giriş kapatma
  {
    echo "<script>window.location.href='cikis.php'</script>";
  }
  else
  {
    echo "Kullanıcı Adınız :".$_SESSION['user']."<br>";
    echo "<a href='cikis.php'>çıkış yap</a> | <a href='index.php'>siteye git</a>";
    include("baglanti.php");
    $sec="Select * From iletisim";
    $sonuc=$baglan->query($sec);
    if($sonuc->num_rows>0) //veri varsa çeker
    {
      while($cek=$sonuc->fetch_assoc()) //sütun isimlerine indisli bir dizi döner
      { 
        echo "
        <tr>
          <td>".$cek['adsoyad']."</td>
          <td>".$cek['telefon']."</td>
          <td>".$cek['email']."</td>
          <td>".$cek['konu']."</td>
          <td>".$cek['mesaj']."</td>
        </tr>
        ";
      }
    }
    else
    {
      echo "Veri tabanında kayıtlı bir veri bulunamadı.";
    }
    }
  
    ?>  
</table>
<a href="admin.php">Admin Paneli</a>
</body>
</html>
