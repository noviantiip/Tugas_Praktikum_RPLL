<html>
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
    <td></td>
	<td width="40"></td> 
  </tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8FF">
  <tr bgcolor="#F8F8FF">
    <td><h1 align="center">Buku Anggota</h1></td>
  </tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8FF">
  <tr height="46">
    <td>&nbsp;</td>
      <td>ID Anggota</td>
      <td><input name="id_anggota" type="text" size="25" id="id_anggota" placeholder="id_anggota" onClick="window.open('http://localhost/Pembukuan/viewanggota.php','popuppage','width=500,toolbar=0,resizable=0,scrollbars=no,height=400,top=100,left=100');" /></td>
	  <td width="290"><input name="button" type="button" title="Cetak" value="Cetak"></td>
  </tr>
  <tr height="46">
      <td>&nbsp;</td>
      <td>Nama Anggota </td>
      <td><input name="nama_anggota" type="text" size="25" id="nama_anggota" readonly="readonly" /></td>
    </tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
  	<tr bgcolor="#FF0033">
	<th width="52">Tanggal</th>&nbsp;
	<th width="114">Pokok </th>&nbsp;
	<th width="114">Wajib</th>&nbsp;
	<th width="114">Sukarela</th>&nbsp;	
	<th width="114">Jumlah</th>&nbsp;
	<th width="114">Pinjaman</th>&nbsp;
	<th width="114">Angsuran</th>&nbsp;
	<th width="114">Jasa</th>&nbsp;
	<th width="114">Jumlah Setoran</th>&nbsp;
	</tr>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>

<?php
	include "koneksi.php";	
	$Cari="SELECT s.tanggal_simpanan AS Tanggal, 
			s.jumlah_pokok AS Pokok, 
			s.jumlah_wajib AS Wajib, 
			s.jumlah_sukarela AS Sukarela, 
			(jumlah_pokok+jumlah_wajib+jumlah_sukarela) AS Jumlah, 
			p.jumlah_pinjaman AS Pinjaman, 
			an.jumlah_angsuran AS Angsuran, 
			an.jumlah_jasa AS Jasa, 
			(s.jumlah_pokok+s.jumlah_wajib+s.jumlah_sukarela+p.jumlah_pinjaman+an.jumlah_angsuran+an.jumlah_jasa) AS Jumlah Setoran 
			FROM anggota 
		 	INNER JOIN simpanan  s USING(id_anggota)
			INNER JOIN pinjaman p USING(id_anggota)
			INNER JOIN angsuran an USING(id_anggota)";
	$Tampil = mysql_query($Cari);
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($Tampil)) {
			$tanggal = stripslashes ($hasil['s.tanggal_simpanan']);
			$jumlah_pokok = stripslashes ($hasil['s.jumlah_pokok']);
			$jumlah_wajib = stripslashes ($hasil['s.jumlah_wajib']);
			$jumlah_sukarela = stripslashes ($hasil['s.jumlah_sukarela']);
			$jumlah= stripslashes ($hasil['(jumlah_pokok+jumlah_wajib+jumlah_sukarela)']);
			$jumlah_pinjaman=stripslashes ($hasil['p.jumlah_pinjaman']);
			$jumlah_angsuran=stripslashes ($hasil['an.jumlah_angsuran']);
			$jumlah_jasa= stripslashes($hasil['an.jumlah_jasa']);
			$jumlah_setoran= stripslashes ($hasil['(s.jumlah_pokok+s.jumlah_wajib+s.jumlah_sukarela+p.jumlah_pinjaman+an.jumlah_angsuran+an.jumlah_jasa)']);
		{
	$nomer++;

?>
	<tr align="center">
		<td height="32"><?=$tanggal?><div align="center"></div></td>
		<td><?=$jumlah_pokok?><div align="center"></div></td>
		<td><?=$jumlah_wajib?><div align="center"></div></td>
		<td><?=$jumlah_sukarela?><div align="center"></div></td>
		<td><?=$jumlah?><div align="center"></div></td>
		<td><?=$jumlah_pinjaman?><div align="center"></div></td>
		<td><?=$jumlah_angsuran?><div align="center"></div></td>
		<td><?=$jumlah_jasa?><div align="center"></div></td>
		<td><?=$jumlah_setoran?><div align="center"></div></td>
	</tr>
<?php
	}
	}  
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
		<td>&nbsp;</td>
</table>
</div>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="">
	<td><center><input name="cancel" type="button" value="Cancel" onclick=location.href="menu.php"></center></td>
	<td>&nbsp;</td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#B0C4DE">
		<td height="36" colspan="5" bgcolor="#B0C4DE"><div align="center" style="margin:0 12px 0 0;"><font color="#000">&copy;2016 Novianti Indah Putri</font><br>
		</div></td>
	</tr>
</table>
</body>