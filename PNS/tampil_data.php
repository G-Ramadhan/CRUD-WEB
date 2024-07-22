<?php
// ------------
session_start();
if (empty($_SESSION['username'])) {
	header("location:login_form.php");
}
// --------------
require 'config/koneksi.php';
$data = query("SELECT * FROM tb_data_pns");

// --- kolom pencarian terisi

if(isset($_POST["cari"])) {
$data = cari($_POST["keyword"]);
}
?>

<html>
<head>
<title>Data PNS</title>
<link rel="stylesheet" href="assets/css/tbarang.css">

<!-- data table style-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
<h2 align=center>DATA PEGAWAI NEGERI SIPIL</h2>
<center>
<table>
<form method=POST action=tambah_data.php> <button>Tambah Data</button>
</form>
<form method=POST action=menu.php>
<button>Menu Utama</button>
</form>
<form method=POST action=logout.php>
<button>Logout</button>
</form>
</table>
<br>

<form action="" method="post">
<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
</form>
<div id="container">
<table class="styled-table" border=0 >
<tr class="judul">
<th>No</th>
<th>Nama</th>
<th>NIP</th>
<th>Tanggal Lahir</th>
<th>Pangkat</th>
<th>Golongan</th>
<th>Bidang Studi</th>
<th>Alamat</th>
<th>Pendidikan Terakhir</th>
<th>No HP</th>
<th>Gambar</th>
<th>Action</th>
</tr>

<?php $i = 1; ?>
<?php foreach($data as $row) { ?>
<tr class="isi">
<td align=center><?= $i; ?></td>
<td align=left><?= $row["nama"] ?></td>
<td align=left><?= $row["nip"] ?></td>
<td align=left><?= $row["tgl_lahir"] ?></td>
<td align=center><?= $row["pangkat"] ?></td>
<td align=center><?= $row["gol_pns"] ?></td>
<td align=left><?= $row["bdg_studi"] ?></td>
<td align=left><?= $row["alamat"] ?></td>
<td align=left><?= $row["pnd_terakhir"] ?></td>
<td align=left><?= $row["no_hp"] ?></td>
<td align=center><img src=gambar/<?= $row["gambar"]; ?> width="70"
height="70"></td>
<td align=center><a style="text-decoration: none" href="edit.php?id=<?php echo $row['nomor']; ?>">Edit</a>
<br><br>
<a style="text-decoration: none" href="hapus_data.php?id=<?php echo $row['nomor']; ?>" onclick="return confirm('yakin ingin meghapus data ini ?')">Hapus</a>
</td>
</tr>
<?php $i++;
} ?>
</table>
</div>
</center>
<script src="assets/js/cari.js"></script>
</body>
</html>