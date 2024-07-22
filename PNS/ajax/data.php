<?php
require '../config/koneksi.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM tb_data_pns WHERE nama LIKE '%$keyword%' OR nip LIKE '%$keyword%' OR tgl_lahir LIKE '%$keyword%' OR pangkat LIKE '%$keyword%' OR gol_pns LIKE '%$keyword%' OR bdg_studi LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR pnd_terakhir LIKE '%$keyword%' OR no_hp LIKE '%$keyword%' OR gambar LIKE '%$keyword%'";
$data = query($query);
?>

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

<?php if(empty($data)): ?>
<tr>
<td colspan="8" align="center"><br><br><b style="font-size:20px">Data
Tidak Ditemukan</b><br><br><br></td>
</tr>

<?php endif; ?>

<?php $i = 1;
foreach($data as $row ){ ?>

<tr class="isi">
<td align=center><?= $i; ?></td>
<td align=left><?= $row["nama"] ?></td>
<td align=left><?= $row["nip"] ?></td>
<td align=left><?= $row["tgl_lahir"] ?></td>
<td align=center><?= $row["pangkat"] ?></td>
<td align=left><?= $row["gol_pns"] ?></td>
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
<?php $i++;?>
<?php } ?>
</table>