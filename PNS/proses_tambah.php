<link rel="stylesheet" href="assets/css/ibarang.css">
<?php
//-----------Cek Login--------------//
session_start();
if (empty($_SESSION['username'])) {
    header("location:login_form.php");
}
// -------------------------------
include "config/koneksi.php";
?>

<html>
<head>
	<title>:: Menu Utama ::</title>
	<link rel="stylesheet" href="assets/css/ibarang.css">
</head>

<body>
	<center>
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> 
		<lottie-player src="https://assets9.lottiefiles.com/packages/lf20_qlwqp9xi.json"  background="transparent"  speed="1"  style="width: 420px; height: 420px;"  loop  autoplay></lottie-player>
	</center>

	<?php
		$lokasi_file = $_FILES['fupload']['tmp_name'];
		$nama_file   = $_FILES['fupload']['name'];

		// Bila Ynag Di input Lengkap
		if(!empty($lokasi_file)){
			move_uploaded_file($lokasi_file, "gambar/$nama_file");
			$a=mysqli_query($koneksi, "INSERT INTO `tb_data_pns`(`nama`, `nip`, `tgl_lahir`, `pangkat`, `gol_pns`, `bdg_studi`, `alamat`, `pnd_terakhir`, `no_hp`, `gambar`) VALUES ('$_POST[nama]','$_POST[nip]','$_POST[tgl_lahir]','$_POST[pangkat]','$_POST[gol_pns]','$_POST[bdg_studi]','$_POST[alamat]','$_POST[pnd_terakhir]','$_POST[no_hp]','$nama_file')");
	?>
		<script>
			alert('data berhasil disimpan');
			window.location="tambah_data.php";
		</script>
		<?php
	}
	// Bila Tidak Lengkap
	else{
		?>
		<h1 align=center>Maaf, Data yang anda masukkan tidak lengkap, <br> Silahkan Kembali.</h1>
		<br><br>
		<center>
			<table>
				<form method=POST action=tambah_data.php>
					<button>Kembali</button>
				</form>
				<form method=POST action=logout.php>
					<button>Logout</button>
				</form>
			</table>
		</center>

		<?php
	}
		?>

</body>
</html>