<?php
include("db.php");
if(isset($_POST["adi_soyadi"])){
  $SQL = sprintf("
      INSERT INTO
        kullanicilar
      SET
        adi_soyadi    = '%s',
        parola = '%s',
        tur = '%s'",

  $_POST["adi_soyadi"], $_POST["parola"],$_POST["tur"]);
  $rows  = mysqli_query($db, $SQL);

  echo "<h4>Kayıt eklendi...</h4>";
}

 ?>

<form method="post">
  Adı Soyadı:
  <input type="text" name="adi_soyadi" value="" placeholder="Ad Soyad giriniz">
  <br><br />
  Parola:
  <input type="password" name="parola" value="" placeholder="Parola giriniz">
  <br><br>
  Tür:
  <select name="tur">
 <option value="m">Müşteri</option>
 <option value="e">Esnaf</option>
</select>

  <input type="submit" value="Gönder">
</form>
