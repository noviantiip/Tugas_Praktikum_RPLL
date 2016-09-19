<?php
// Sesion Di jalankan
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
// membuat koneksi Ke MYSQL dan Database, Sesuaikan Dengan pengaturan di tempat anda 
$koneksi=mysql_connect("localhost", "root", "");
$db=mysql_select_db("koperasi",$koneksi);

// mencari password berdasarkan username
$query = "SELECT * FROM pengurus WHERE username = '$username' and password= '$password'";
$hasil = mysql_query($query) or die("Error");
$ketemu = mysql_num_rows($hasil);
$data  = mysql_fetch_array($hasil);

if($ketemu > 0){
	session_start();
	$_SESSION[username] = $data[username];
	$_SESSION[password] = $data[password];
	$_SESSION[hak_akses] = $data[hak_akses];
        if($data['hak_akses']=="kolektor"){
            $_SESSION[menu_kolektor];
			header('location:menu_kolektor.php');
        }else if($data['hak_akses']=="ketua"){
            $_SESSION[menu_ketua];
			header('location:menu_ketua.php');
        }
	
	
}else{
	echo "<script>windows.alert('LOGIN GAGAL! Silahkan coba lagi!');
			windows.location=(href='form-login.php')</script>";
}
?>