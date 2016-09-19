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
    <td><h1 align="center">Buku Bulanan</h1></td>
  </tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8FF">
  <tr height="46">
      <td>&nbsp;</td>
      <td>Bulan</td>
      <td><select name="nama_bln">
	  <?php
        for($bln=1;$bln<=12;$bln++){
			$nama_bln = array (1=>"Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Des");
				echo "<option value=$bln>$nama_bln[$bln]</option>";
		}
	  ?>
	  </select></td>
	  <td width="50"><input name="button" type="button" title="Cetak" value="Cetak"></td>
	  </tr>
	<tr height="46">
      <td>&nbsp;</td>
      <td>Tahun</td>
      <td><select name="tahun">
	  <?php
        for ($i=2016; $i<=2020; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
	  ?>
	  </select></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	  </tr>
</table>
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
  	<tr bgcolor="#FF0033">
	<th width="80">ID</th>&nbsp;
	<th width="140">Nama</th>&nbsp;
	<th width="80">Tanggal</th>&nbsp;
	<th width="80">Pokok </th>&nbsp;
	<th width="80">Wajib</th>&nbsp;
	<th width="80">Sukarela</th>&nbsp;	
	<th width="80">Jumlah</th>&nbsp;
	<th width="80">Pinjaman</th>&nbsp;
	<th width="80">Angsuran</th>&nbsp;
	<th width="80">Jasa</th>&nbsp;
	<th width="80">Jumlah Setoran</th>&nbsp;
	<th width="80">Debet</th>&nbsp;
	<th width="80">Kredit</th>&nbsp;
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
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>

<?php
	include "koneksi.php";
	$Cari="SELECT a.id_anggota AS ID , a.nama_anggota AS Nama, s.tanggal_simpanan AS Tanggal, s.jumlah_pokok AS Pokok, 
			s.jumlah_wajib AS Wajib, s.jumlah_sukarela as Sukarela, (jumlah_pokok+jumlah_wajib+jumlah_sukarela) AS Jumlah, 
			p.jumlah_pinjaman AS Pinjaman, an.jumlah_angsuran AS Angsuran, an.jumlah_jasa AS Jasa, 
			(p.jumlah_pinjaman+an.jumlah_angsuran+an.jumlah_jasa) AS Jumlah, 
			(s.jumlah_pokok+s.jumlah_wajib+s.jumlah_sukarela+an.jumlah_angsuran+an.jumlah_jasa) AS Debet, (p.jumlah_pinjaman) AS Kredit
			FROM anggota
			INNER JOIN simpanan s USING(id_anggota)
			INNER JOIN pinjaman p USING(id_anggota)
			INNER JOIN angsuran an USING(id_anggota)";
		$Tampil = mysql_query($Cari);
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($Tampil)) {
			$id=stripslashes ($hasil['a.id_anggota']);
			$nama= stripslashes ($hasil['a.nama_anggota']);
			$tanggal = stripslashes ($hasil['s.tanggal_simpanan']);
			$jumlah_pokok = stripslashes ($hasil['s.jumlah_pokok']);
			$jumlah_wajib = stripslashes ($hasil['s.jumlah_wajib']);
			$jumlah_sukarela = stripslashes ($hasil['s.jumlah_sukarela']);
			$jumlah= stripslashes ($hasil['(jumlah_pokok+jumlah_wajib+jumlah_sukarela)']);
			$jumlah_pinjaman=stripslashes ($hasil['p.jumlah_pinjaman']);
			$jumlah_angsuran=stripslashes ($hasil['an.jumlah_angsuran']);
			$jumlah_jasa= stripslashes($hasil['an.jumlah_jasa']);
			$debet= stripslashes ($hasil['(s.jumlah_pokok+s.jumlah_wajib+s.jumlah_sukarela+an.jumlah_angsuran+an.jumlah_jasa)']);
			$kredit= stripslashes ($hasil['p.jumlah_pinjaman']);
		{
	$nomer++;

?>
	tr align="center">
		<td height="32"><?=$id?><div align="center"></div></td>
		<td><?=$nama?><div align="center"></div></td>
		<td><?=$tanggal?><div align="center"></div></td>
		<td><?=$jumlah_pokok?><div align="center"></div></td>
		<td><?=$jumlah_wajib?><div align="center"></div></td>
		<td><?=$jumlah_sukarela?><div align="center"></div></td>
		<td><?=$jumlah?><div align="center"></div></td>
		<td><?=$jumlah_pinjaman?><div align="center"></div></td>
		<td><?=$jumlah_angsuran?><div align="center"></div></td>
		<td><?=$jumlah_jasa?><div align="center"></div></td>
		<td><?=$debet?><div align="center"></div></td>
		<td><?=$kredit?><div align="center"></div></td>
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
	<center><input name="cancel" type="button" value="Cancel" onclick=location.href="menu_kolektor.php"></center>
	<td>&nbsp;</td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#B0C4DE">
		<td height="36" colspan="5" bgcolor="#B0C4DE"><div align="center" style="margin:0 12px 0 0;"><font color="#000">&copy; 2016. By Novianti Indah Putri</font><br>
		</div></td>
	</tr>
</table>