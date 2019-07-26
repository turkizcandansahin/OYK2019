<?php
  include("db.php");
?>

<h1>Sayı Liste</h1>

<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td>ID</td>
    <td>1. SAYI</td>
    <td>2. SAYI</td>
  </tr>
  <?php
  $SQL   = "SELECT id,sayi1,sayi2 FROM sayilar ORDER BY id DESC";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) { // Kayıt adedince döner
      echo sprintf("
        <tr>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>
        </tr>",
        $row["id"], $row["sayi1"], $row["sayi2"] );
  }

  ?>
</table>
