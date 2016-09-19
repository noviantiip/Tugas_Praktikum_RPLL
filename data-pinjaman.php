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
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F8F8FF">
    <td>
	<br/><div align="right"><a href="logout.php" title="Logout">Logout</a></div></td>
	<td width="40"></td> 
  </tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8FF">
  <tr bgcolor="#F8F8FF">
    <td><h1 align="center">Data Pinjaman</h1></td>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
  	<tr bgcolor="#FF0033">
	<th width="46">No</th>&nbsp;
	<th width="387">Nama Anggota </th>&nbsp;
	<th width="145">Tanggal</th>&nbsp;
	<th width="193">Jumlah Pinjaman</th>&nbsp;
	</tr>
<?php
	include "koneksi.php";
	$Cari="SELECT * FROM pinjaman";
	$Tampil = mysql_query($Cari);
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($Tampil)) {
			$nama_anggota = stripslashes ($hasil['nama_anggota']);
			$tanggal_pinjam = stripslashes ($hasil['tanggal_pinjam']);
			$jumlah_pinjaman = stripslashes ($hasil['jumlah_pinjaman']);
		{
	$nomer++;
?>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr align="center">
		<td height="32"><?=$nomer?><div align="center"></div></td>
		<td><?=$nama_anggota?><div align="center"></div></td>
		<td><?=$tanggal_pinjam?><div align="center"></div></td>
		<td><?=$jumlah_pinjaman?><div align="center"></div></td>
	</tr>
	<?php  
		}
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</table>
</div>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="">
	<td>&nbsp;</td>
	<center><input type="button" value="Cancel" onclick=location.href="menu_kolektor.php"></center>
	<td>&nbsp;</td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#B0C4DE">
		<td height="36" colspan="5" bgcolor="#B0C4DE"><div align="center" style="margin:0 12px 0 0;"><font color="#000">&copy; 2016. By Novianti Indah Putri</font><br>
		</div></td>
	</tr>
</table>