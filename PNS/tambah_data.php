<?php
// ------------- CEK LOGIN -----------
session_start();
if (empty($_SESSION['username'])) {
	header("location:login_form.php");
}
?>

<html>
<head>
	<title>:: TAMBAH DATA ::</title>
	<link rel="stylesheet" type="text/css" href="assets/css/fbarang.css">
</head>

<body bgcolor="#fff">
	<center>
		<h2 align="center">INPUT DATA PEGAWAI</h2>
		<?php
		echo "<h5> Login Sebagai : ";
		echo $_SESSION['username'];
		?>
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_7k8jk8vi.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
	</center>
	<center>
		<div class="glass">
			<form method=Post action=proses_tambah.php enctype='multipart/form-data'>
				<table>
					<tr>
						<td valign=top>Nama</td>
						<td> : <input type=text name=nama size=30></td>
					</tr>
					<tr>
						<td>NIP</td>
						<td> : <input type=text name=nip size=15></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td> : <input type=date name=tgl_lahir size=15></td>
					</tr>
					
					<tr>
						<td>Pangkat</td>
						<td> :
							<select name=pangkat>
								<option value=0 selected>-Pilih Kategori-</option>
								<?php
								include "config/koneksi.php";
								$tampil = mysqli_query($koneksi, "SELECT * FROM tb_pangkat ORDER BY nama_pangkat");
								while ($r = mysqli_fetch_array($tampil)) {
									echo "<option value=$r[nama_pangkat]>$r[nama_pangkat]</option>";
								}
								?>

							</select>
						</td>
					</tr>
					
					<tr>
						<td>Golongan</td>
						<td> :
							<select name=gol_pns>
								<option value=0 selected>-Pilih Kategori-</option>
								<?php
								$tampil = mysqli_query($koneksi, "SELECT * FROM tb_golongan ORDER BY nama_golongan");
								while ($r = mysqli_fetch_array($tampil)) {
									echo "<option value=$r[nama_golongan]>$r[nama_golongan]</option>";
								}
								?>

							</select>
						</td>
					</tr>

					<tr>
						<td>Bidang Studi</td>
						<td> : <input type="text" name="bdg_studi" size="15"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td> : <input type="text" name="alamat" size="15"></td>
					</tr>
					<tr>
						<td>Pend-Terakhir</td>
						<td> : <input type="text" name="pnd_terakhir" size="15"></td>
					</tr>
					<tr>
						<td>No HP</td>
						<td> : <input type="text" name="no_hp" size="15"></td>
					</tr>
					<tr>
						<td>Gambar</td>
						<td> : <input type="file" name="fupload" size="40"></td>
					</tr>
					<tr>
						<td colspan=2 align='right'><input id=simpan type=submit name=submit value=Simpan></td>
					</tr>
				</table>

			</form>
			<br>
			<table>
				<form method=POST action=menu.php>
					<button>Menu Utama</button>
				</form>
				<form method=POST action=tampil_data.php>
					<button>Tampil Data</button>
				</form>
			</table>
			<br>
		</div>
	</center>

</body>

</html>