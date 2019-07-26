<?php
include("db.php");

if (isset( $_POST["sayi1"] )) {  // Form POST edilmiş...

  // Önce EKLEME için SQL hazırlayalım...
  $SQL = sprintf("
      INSERT INTO
        sayilar
      SET
        sayi1    = '%s',
        sayi2 = '%s'",
  $_POST["sayi1"], $_POST["sayi2"]);
  // SQL komutunu MySQL veritabanı üzerinde çalıştır!
  $rows  = mysqli_query($db, $SQL);

  echo "<h4>Kayıt eklendi...</h4>";
  echo "<a href='listele.php'>Sayıları görmek için tıklayınız...</a>";

}  // Form POST edilmiş...

?>


    <form method="post">

      1. Sayıyı Giriniz:
      <input type="text" name="sayi1" value="" placeholder="Sayı giriniz">
      <br><br />
      2. Sayıyı Giriniz:
      <input type="text" name="sayi2" value="" placeholder="Sayı giriniz">
      <br><br>

      <input type="submit" value="Gönder">

    </form>
