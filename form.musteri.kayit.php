<!doctype html>
<html>
<head>
<title>FORM ETİKETLERİ</title>
<meta charset="utf-8">
</head>
<body>
<form action="" >
<table border="0">
  <h1>
    MÜŞTERİ KAYIT
  </h1>
<tr>
<td>Ad :</td>
<td><input type="text" name="ad" id="ad" required placeholder="Lütfen Ad, Soyad Girin"></td>
</tr>
  <tr>
<td>Parola :</td>
<td><input type="password" name="parola" id="parola" required placeholder="Lütfen Parola Girin"></td>
</tr>
  <tr>
<td>Telefon :</td>
<td><input type="text" name="tel" id="tel" required placeholder="05.."></td>
</tr>
  <tr>
<td>Email :</td>
<td><input type="email" name="mail" id="mail"  required placeholder="Lütfen Mailinizi Girin"></td>
</tr>

<tr>
	<td colspan="2">
Kullanıcı Sözleşmesi <input type="checkbox"name="sozlesme" required >

    </td>
</tr>
  <br>

<tr>
<td>Adres Tarifi :</td>
<td><textarea rows = "5" cols = "50" name = "description"></textarea></td>
</tr>
<tr>
<td>İl :</td>
<td>
    <select name="iller" size=1 >
      <option>İSTANBUL</option>
		<option>ANKARA</option>
		<option>BOLU</option>
	</select></td>
</tr>
 <tr>
<td>İlçe :</td>
<td>
    <select name="ilceler" size=1 >
      <option>Beylikdüzü</option>
		<option>Çankaya</option>
		<option>Merkez</option>
	</select></td>
</tr>
<tr>
<td>Mahalle :</td>
<td>
    <select name="mahalleler" size=1 >
      <option>Cumhuriyet</option>
		<option>Anıttepe</option>
		<option>Bahçelievler</option>
	</select></td>
</tr>
  <tr>
<td>Cadde :</td>
<td><input type="text" name="cadde" id="cadde" required placeholder="Lütfen Cadde Girin"></td>
</tr>
  <tr>
<td>Bina :</td>
<td><input type="text" name="bina" id="bina" required placeholder="Lütfen Bina Girin"></td>
</tr>
  <tr>
<td>Sokak :</td>
<td><input type="text" name="sokak" id="sokak" required placeholder="Lütfen Sokak Girin"></td>
</tr>
  <tr>
<td>Daire :</td>
<td><input type="text" name="daire" id="daire" required placeholder="Lütfen Daire Girin"></td>
</tr>

<tr align="center">
<td colspan="2" >
<input type="submit" name="kaydet" id="kaydet" value="KAYDET">

</td>
</tr>
    </table>

</form>
  <style>
  table{margin:5px 10% ;
      border-collapse: separate;
  border-spacing: 5px;
    background:orange;
    color:green;
    font-family:helvetica;
    }
    h1{
    text-align:center;}

  </style>

</body>

</html>
