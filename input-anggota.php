<div style="border:0; padding:10px; width:860px; height:400;">
<?php
	include 'koneksi.php';
	if ($_POST['Submit'] == "Simpan") {
	$id_anggota		= $_POST['id_anggota'];
	$nama_anggota	= $_POST['nama_anggota'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];
	$alamat			= $_POST['alamat'];
	$no_hp			= $_POST['no_hp'];
	
	//validasi data data kosong
	if (empty($_POST['id_anggota'])||empty($_POST['nama_anggota'])||empty($_POST['jenis_kelamin'])||empty($_POST['alamat'])||empty($_POST['no_hp'])) {
		echo "<script>window.alert('Data Harap Dilengkapi!')
			window.location='form-input-anggota.php'</script>";

	}
//Masukan data ke Table data member
$input	="INSERT INTO anggota (id_anggota, nama_anggota, jenis_kelamin, alamat, no_hp)
		VALUES ('$id_anggota','$nama_anggota','$jenis_kelamin','$alamat','$no_hp')";
$query_input =mysql_query($input);
	if ($query_input) {
	//Jika Sukses
		echo "<script>window.alert('Input Data Anggota Berhasil!')
			window.location='menu_kolektor.php'</script>";
	}
	else {
	//Jika Gagal
	echo "<script>window.alert('Input Gagal!')
		window.location='form-input-anggota.php'</script>";
		
	}
//Tutup koneksi engine MySQL
	//mysql_close($Open);
	}
?>
</div>