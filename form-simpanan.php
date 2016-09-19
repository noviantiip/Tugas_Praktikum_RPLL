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
	<td width="900" bgcolor="#0099FF">
	  <h4 class="style1"><br/>Koperasi Hebras<br/>
    <span class="style3">Komp. Cipadung Permai RW 07, Cipadung, Cibiru, Kota Bandung</span></h4></td><br/>
  </tr>
</table>
<form action="simpanan.php" method="POST" name="form-simpanan">
  <table width="964" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8FF">
    <tr>
      <td width="450">&nbsp;</td>
	  <td width="450">&nbsp;</td>
      <td width="514" align="center"><h1>Simpanan</h1></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr height="46">
      <td>&nbsp;</td>
      <td>ID Anggota</td>
      <td><input name="id_anggota" type="text" size="25" id="id_anggota" placeholder="id_anggota" onClick="window.open('http://localhost/Pembukuan/viewanggota.php','popuppage','width=500,toolbar=0,resizable=0,scrollbars=no,height=400,top=100,left=100');" /></td>
      <td width="850"><input name="button" type="button" title="Cancel" onClick=location.href="menu.php" value="Cancel"></td>
	</tr>
    <tr height="46">
      <td>&nbsp;</td>
      <td>Nama Anggota </td>
      <td><input name="nama_anggota" type="text" size="25" id="nama_anggota" readonly="readonly" /></td>
    </tr>
    <tr height="46">
      <td>&nbsp;</td>
      <td>ID Simpanan</td>
      <td><input name="id_simpan" type="text" size="25" value=""  /></td>
    </tr>
    <tr height="46">
      <td>&nbsp;</td>
      <td>Tanggal Simpanan</td>
      <td><select name="tgl_simpanan">
          <?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
        </select>
        -
        <select name="bln_simpanan">
          <?php
					for($bln=1;$bln<=12;$bln++){
						$nama_bln = array (1=>"Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Des");
						echo "<option value=$bln>$nama_bln[$bln]</option>";
					}
				?>
        </select>
        -
        <select name="thn_simpanan">
          <?php
					for ($i=2016; $i<=2020; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
				?>
        </select>      </td>
    </tr>
    <tr height="46">
      <td>&nbsp;</td>
      <td>Jumlah Simpanan Pokok</td>
      <td><input type="text" name="jumlah_pokok" size="25" maxlength="10" /></td>
    </tr>
    <tr height="46">
      <td>&nbsp;</td>
      <td>Jumlah Simpanan Wajib</td>
      <td><input type="text" name="jumlah_wajib" size="25" maxlength="10" /></td>
    </tr>
	<tr height="46">
      <td>&nbsp;</td>
      <td>Jumlah Simpanan Sukarela</td>
      <td><input type="text" name="jumlah_sukarela" size="25" maxlength="10" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr height="46">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan">
        &nbsp;</td>
    </tr>
    <tr height="46">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
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