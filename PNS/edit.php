<?php
//--------------------------
session_start();
if (empty($_SESSION['username'])) {
	header("location:login_form.php");
}
//-------------------------------------//
include "config/koneksi.php";

$edit = mysqli_query($koneksi, "SELECT * FROM tb_data_pns WHERE nomor='$_GET[id]'");
$row = mysqli_fetch_array($edit);

?>
<html>
<head>
    <title>:: EDIT DATA ::</title>
    <link rel="stylesheet" href="assets/css/ebarang.css">
</head>
<body>
    <center>
    <h2 align=center>Edit Data PNS</h2>
    <?php
     echo"<h5>Login Sebagai : ";
        echo $_SESSION['username'];
    ?>
<div class="glass">

<form method=POST enctype='multipart/form-data' name='update' action=proses_edit.php>
<?php echo "
<input type=hidden name=id value=$row[nomor]>
<table align=center border=0 id=table1>

<tr><td valign=top>Nama</td><td>
<input type=text name=nama size=30 value='$row[nama]'>
</td></tr>

<tr><td valign=top>NIP</td><td>
<input type=text name=nip size=30 value=$row[nip]>
</td></tr>

<tr><td valign=top>Tanggal Lahir</td><td>
<input type=date name=tgl_lahir size=30 value=$row[tgl_lahir]>
</td></tr>


<tr><td>Pangkat</td><td><select name=pangkat>";
$tampil=mysqli_query($koneksi, "SELECT * FROM tb_pangkat ORDER BY nama_pangkat");
while($c = mysqli_fetch_array($tampil)){
    if ($row['pangkat']==$c['nama_pangkat']){
    echo "<option value='{$c['nama_pangkat']}' selected>$c[nama_pangkat]</option>";
}
else{
    echo "<option value='{$c['nama_pangkat']}'>$c[nama_pangkat]</option>";
    }
}
echo "</select></td></tr>
<tr><td>Golongan</td><td><select name=gol_pns>";
$tampil2=mysqli_query($koneksi, "SELECT * FROM tb_golongan ORDER BY nama_golongan");
while($d=mysqli_fetch_array($tampil2)){
if ($row['gol_pns']==$d['nama_golongan']){
    echo "<option value=$d[nama_golongan] selected>$d[nama_golongan]</option>";
}
else{
    echo "<option value=$d[nama_golongan]>$d[nama_golongan]</option>";
    }
}

echo "
<tr><td>Bidang Studi</td><td><input type=text value='$row[bdg_studi]'
name=bdg_studi size=15</td</tr>

<tr><td>Alamat</td><td><input type=text value='$row[alamat]'
name=alamat size=15</td</tr>

<tr><td>Pendidikan Terakhir</td><td><input type=text value='$row[pnd_terakhir]'
name=pnd_terakhir size=15</td</tr>

<tr><td>NO HP</td><td><input type=text value='$row[no_hp]'
name=no_hp size=15</td</tr>

<tr><td>Gambar</td><td><img src='gambar/$row[gambar]' width=200 heigt=200</td></tr>

<tr><td>Ganti Gambar</td><td><input type=file name=fupload></td</tr>

<tr><td><br></td</tr>



<tr><td colspan=2><b><i>#Jika tidak ingin mengubah gambar silahkan abaikan saja</b></i></td></tr>
<tr><td colspan=2><input id=update type=submit value=Perbarui>
</table>";
?>
<br><br>
                    <table>
                        <form method=POST action=menu.php>
                            <button>Menu Utama</button>
                        </form>
                        <form method=POST action=tampil_data.php>
                            <button>Tampil Data PNS</button>
                        </form>
                    </table>
            </div>
            </center>
        </body>
        </html>
                    