<body bgcolor="#F8F8FF">
<?php
	include "koneksi.php";
	$id_anggota			= $_POST['id_anggota'];
	$nama_anggota		= $_POST['nama_anggota'];
	$id_simpan			= $_POST['id_simpan'];
	$tanggal_simpanan	= $_POST['thn_simpanan']."-".$_POST['bln_simpanan']."-".$_POST['tgl_simpanan'];
	$jumlah_pokok		= $_POST['jumlah_pokok'];
	$jumlah_wajib		= $_POST['jumlah_wajib'];
	$jumlah_sukarela	= $_POST['jumlah_sukarela'];
	//validasi data jika data kosong
	if (empty($_POST['jumlah_wajib'])) {
		echo "<script>window.alert('Masukkan Jumlah Simpanan Wajib!')
			window.location='form-simpanan.php'</script>";
	}
	else {
	//Masukan data ke Table tabungan
	$input	="INSERT INTO simpanan (id_anggota, nama_anggota, id_simpan, tanggal_simpanan, jumlah_pokok, jumlah_wajib, jumlah_sukarela) VALUES ('$id_anggota','$nama_anggota','$id_simpan', '$tanggal_simpanan', '$jumlah_pokok', '$jumlah_wajib', '$jumlah_sukarela')";
	$query_input =mysql_query($input);
	//Update tabungan di tabel member
	//$update="UPDATE member SET tabungan=tabungan + $jml_tabungan WHERE username='$username'";
	//$query_update =mysql_query($update);
		if ($query_input) {
		//Jika Sukses
		echo "<script>window.alert('Setoran Simpanan Berhasil!')
			window.location='menu_kolektor.php'</script>";
	}
	else {
	//Jika Gagal
	echo "<script>window.alert('Simpanan Gagal Diinput, Silahkan diulangi!')
			window.location='menu_kolektor.php'</script>";
	}
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>