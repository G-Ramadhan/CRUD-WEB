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
<h2 align=center>DEVELOPER INFO</h2>

<center>
<table>
<form method=POST action=menu.php>
<button>Menu Utama</button>
</form>
</table>
<br>

<form action="" method="post">
<!-- <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword"> -->
</form>

<div id="container">
<table class="styled-table" border=0 >
<tr class="isi">
<td align=center><img src="Gilang.png" width="502" height="295"></td>
</tr>
</table>
</div>

<div id="container">
<table class="styled-table" border=0 >

<tr class="isi">
<td align=center><img src="Zia.png" width="502" height="295"></td>
<td align=center><img src="Wati.png" width="502" height="295"></td>
</tr>
<tr class="isi">
<td align=center><img src="Tom.png" width="502" height="295"></td>
<td align=center><img src="Rega.png" width="502" height="295"></td>
</tr>

</table>
</div>


</center>
<script src="assets/js/cari.js"></script>
</body>
</html>