<?php
	session_start();
	include 'config/koneksi.php';
	$username=$_POST['username'];
	$password=$_POST['pwd'];
	$query=mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username' AND pwd ='$password'");
	$cek=mysqli_num_rows($query);
	if ($cek > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:menu.php");
	}else{
		header("location:login_form.php?pesan=gagal");
	}
	?>