<body bgcolor="#F8F8FF">
<?php
	include "koneksi.php";
	$id_anggota			= $_POST['id_anggota'];
	$nama_anggota		= $_POST['nama_anggota'];
	$id_pinjam			= $_POST['id_pinjam'];
	$tanggal_pinjam		= $_POST['thn_transaksi']."-".$_POST['bln_transaksi']."-".$_POST['tgl_transaksi'];
	$jumlah_pinjaman	= $_POST['jumlah_pinjaman'];
	//validasi data jika data kosong
	if (empty($_POST['jumlah_pinjaman'])) {
		echo "<script>window.alert('Masukkan Jumlah Pinjaman!')
			window.location='form-pinjaman.php'</script>";
	}
	else {
	//Masukan data ke Table pinjaman
	$input	="INSERT INTO pinjaman (id_anggota, nama_anggota, id_pinjam, tanggal_pinjam, jumlah_pinjaman) VALUES ('$id_anggota','$nama_anggota', '$id_pinjam', '$tanggal_pinjam','$jumlah_pinjaman')";
	$query_input =mysql_query($input);
	//Update pinjaman di tabel member
//	$update="UPDATE member SET pinjaman=pinjaman + $jml_transaksi WHERE username='$username'";
	//$query_update =mysql_query($update);
		if ($query_input) {
		//Jika Sukses
		echo "<script>window.alert('Usulan Pinjaman Berhasil!')
			window.location='menu.php'</script>";
	}
	else {
	//Jika Gagal
	echo "<script>window.alert('Pinjaman Gagal Diinput, Silahkan diulangi!')
		window.location='form-pinjaman.php'</script>";
	}
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>