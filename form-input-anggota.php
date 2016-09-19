<html>
<?php
	include 'koneksi.php';
?>
<head>
<title>Pembukuan Kolektor Koperasi</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
.style3 {font-size: 18px}
-->
</style>
</head>
<body>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
  	<td width="19" bgcolor="#0099FF"></td>
    <td width="128" bgcolor="#0099FF"><img src="images/Logo.gif" width="120" height="125"/></td>
	<td width="817" bgcolor="#0099FF">
	  <h4 class="style1"><br/>Koperasi Hebras<br/>
    <span class="style3">Komp. Cipadung Permai RW 07, Cipadung, Cibiru, Kota Bandung</span></h4></td><br/>
  </tr>
</table>
<form action="input-anggota.php" method="POST" name="form-input-anggota">
	<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="46">
				<td width="25%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="65%"><h1>Input Data Anggota </h1></td>
	  </tr>
		<tr>
			<td width="10%">&nbsp;</td>
			<td width="25%"><input type="button" value="Cancel" onclick=location.href="menu_kolektor.php" title="Cancel"><br /><br /></td>
			<td width="65%">&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>ID Anggota</td>
			<td><input type="text" name="id_anggota" size="11" maxlength="20" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nama Anggota</td>
			<td><input type="text" name="nama_anggota" size="30" maxlength="45" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
				<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Alamat</td>
			<td><input type="text" name="alamat" size="100" maxlength="200" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nomor HP</td>
			<td><input type="text" name="no_hp" size="13" maxlength="12" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Simpan">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>
</div>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#B0C4DE">
		<td height="36" colspan="5" bgcolor="#B0C4DE"><div align="center" style="margin:0 12px 0 0;"><font color="#000">&copy;2016 Novianti Indah Putri</font><br>
		</div></td>
	</tr>
</table>


</body>
</html>
