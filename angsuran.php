<body bgcolor="#EEF2F7">
<?php
	include "koneksi.php";
	$id_anggota			= $_POST['id_anggota'];
	$nama_anggota		= $_POST['nama_anggota'];
	$id_angsuran		= $_POST['id_angsuran'];
	$tanggal_angsur		= $_POST['thn_bayar']."-".$_POST['bln_bayar']."-".$_POST['tgl_bayar'];
	$jumlah_pinjaman	= $_POST['jumlah_pinjaman'];
	$jumlah_angsuran	= $_POST['jumlah_angsuran'];
	$jumlah_jasa		= $_POST['jumlah_jasa'];
	$sisa_pinjaman		= $_POST['sisa_pinjaman'];
	//validasi data jika data kosong
	if (empty($_POST['jumlah_angsuran'])) {
		echo "<script>window.alert('Masukkan Jumlah Angsuran!')
			window.location='form-angsuran.php'</script>";
	}
	else {
	//Masukan data ke Table angsuran
	$input	="INSERT INTO angsuran (id_anggota, nama_anggota, id_angsuran, tanggal_angsur, jumlah_pinjaman, jumlah_angsuran, jumlah_jasa, sisa_pinjaman) VALUES ('$id_anggota','$nama_anggota', '$id_angsuran', '$tanggal_angsur','$jumlah_pinjaman', '$jumlah_angsuran', '$jumlah_jasa', '$sisa_pinjaman')";
	$query_input =mysql_query($input);
	//Update pinjaman di tabel member
	//$update="UPDATE member SET pinjaman=pinjaman - $jml_bayar WHERE username='$username'";
	//$query_update =mysql_query($update);
		if ($query_input) {
		//Jika Sukses
		echo "<script>window.alert('Pembayaran Angsuran Berhasil!')
			window.location='menu.php'</script>";
	}
	else {
	//Jika Gagal
	echo "<script>window.alert('Angsuran Gagal Diinput, Silahkan diulangi!')
		window.location='form-angsuran.php'</script>";
	}
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>