<html>
<head>
</head>
<body>
<form method="POST" action="2.php">
<table>
<tr>
<td>NIS : </td>
<td><input type="text" name="nis" required></td>
</tr>
<tr>
<td>Nama Depan : </td>
<td><input type="text" name="namad" required></td>
</tr>
<tr>
<td>Nama Belakang : </td>
<td><input type="text" name="namab" required></td>
</tr>
<tr>
<td>Tempat Lahir : </td>
<td><input type="text" name="lahir" size="29" required></td>
</tr>
<tr>
<td>Tanggal Lahir : </td>
<td><input type="date" name="tgl" required></td>
</tr>
<tr>
<td>Agama : </td>
<td><input type="text" name="agama" required></td>
</tr>
<tr>
<td>Jenis Kelamin : </td>
<td><input type="radio" name="gender" value="pria" id = "pria" required>Pria
<input type="radio" name="gender" value="wanita" id = "wanita" required>Wanita</td>
</tr>
<tr>
<td>Email : </td>
<td><input type="text" name="email" required></td>
</tr>
<tr>
<td>Telepon : </td>
<td><input type="number" name="telp" required></td>
</tr>
<tr>
<td>Instagram : </td>
<td><input type="text" name="insta" required></td>
</tr>
<tr>
<td>Facebook : </td>
<td><input type="text" name="face" required></td>
</tr>
<tr>
<td>WebSite : </td>
<td><input type="text" name="web" placeholder="http://" required></td>
</tr>
<tr>
<td>Alamat : </td>
<td><input type="text" name="alamat" style="height:50px" required></td>
</tr>
<tr>
<td>Jurusan : </td>
<td><select name="jurusan" required>
<option value="tkj">Teknik Komputer Jaringan</option>
<option value="rpl">Rekayasa Perangkat Lunak</option>
</select></td>
</tr>
<tr>
<td>Kelas : </td>
<td><select name="kelas" required>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select></td>
</tr>
<tr>
<td>Username : </td>
<td><input type="text" name="user" required></td>
</tr>
<tr>
<td>Password : </td>
<td><input type="password" name="pass" required></td>
</tr>
<tr>
<td>Pesan : </td>
<td><input type="text" name="pesan" style="height:50px" required></td>
</tr>
<td>
<input type="submit" name="submit" value="simpan">
<input type="submit" name="submit" value="batal">
</td>
</table>
</form>
</body>
</html>